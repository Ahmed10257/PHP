<?php
//Function to add Counter Value
function store_counter_to_file($counter){
    $file_value=file(counter_file);
    $fp=fopen(counter_file,"w"); // creating a handle to deal with sumbit file
    if($fp){ //checks if the file was open or not
    var_dump($file_value);
    // $counter_value=explode(":",$file_value[0]);
    $counter_value=$file_value[0]+1;
    // $counter->setCounter($counter_value+1);
    $input=$counter_value.PHP_EOL;
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

