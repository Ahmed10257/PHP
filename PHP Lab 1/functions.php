<?php
require_once("vendor/autoload.php");
// Function to add new data
function store_sumbit_data_to_file($name,$email){
    $fp=fopen(sumbit_file,"a+"); // creating a handle to deal with sumbit file
    if($fp){ //checks if the file was open or not
    $input=date("Y-m-d H:i:s").",".$_SERVER["REMOTE_ADDR"].","."$name".","."$email".PHP_EOL;
        if(fwrite($fp,$input)){ //Chech if the writing was done or not
          fclose($fp);
          return true;
        }else{
            fclose($fp);
          return false;
        }
    }else{
        return false;
    }

}
//Function to add Counter Value
function store_counter_to_file($counter){
    $file_value=file(counter_file);
    $counter_value=explode(":",$file_value[0]);
    $counter->setCounter($counter_value[1]+1);
    $fp=fopen(counter_file,"w"); // creating a handle to deal with sumbit file
    if($fp){ //checks if the file was open or not
    $file_value=file(counter_file);
    $counter_value=explode(":",$file_value[0]);
    $counter->setCounter($counter_value[1]+1);
    $input="Number of Visits:$counter".PHP_EOL;
        if(fwrite($fp,$input)){ //Chech if the writing was done or not
          fclose($fp);
          return true;
        }else{
            fclose($fp);
          return false;
        }
    }else{
        return false;
    }

}

//Function to Display all the Sumbit data
function display_all_sumbit_data(){
    $i=0; // To Count the tokens of user_data
    $array_of_lines=file(sumbit_file); //Dividing our file into lines
    // Looping on the lines, as each line represents a user
    foreach($array_of_lines as $line){
        echo"<h3>New User Data</h3>";
        $user_data=explode(",",$line); // split the user data according to a given delimeter
        $i=0; // To Count the tokens of user_data
        // Looping on the data of a single user
        foreach($user_data as $data){
            switch($i){
                case (0):
                echo"<h5>Date: $data</h5>";
                break;

                case(1):
                echo"<h5>User IP: $data</h5>";
                break;  

                case(2):
                echo"<h5>Name: $data</h5>";
                break; 

                case(3):
                echo"<h5>E-mail: $data</h5>";
                break; 
            }
            $i++;
        }
    }
}