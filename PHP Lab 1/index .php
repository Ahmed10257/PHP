<?php
session_start();
require_once("vendor/autoload.php");

$message = "";
$valid="";
$nameError="";
$mailError="";
$messageError="";
$counter=new Counter();
// First check if the sumbit button is pressed or not
if(isset($_POST["submit"])) {
    // Checking on the name length
    if(strlen($_POST["name"]) > nameLength){
    $nameError = "Name length is more than required";
    } elseif(empty($_POST["name"])){
        $nameError = "Name is empty";
    }

    //Checking Email
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    $mailError = "Invalid email or Empty field";
    }

    //Checking on Message length
    if(strlen($_POST["message"]) > messageLength || strlen($_POST["message"]) == 0){
        $messageError = "Message length is more than required";
    }elseif(empty($_POST["message"])){
        $messageError = "Message is empty";
    }

    //IF all validations are met
    if(strlen($_POST["name"]) < nameLength && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) && strlen($_POST["message"]) < messageLength){
        $valid = "Thank You! \r\n Name: $_POST[name] \r\n Email: $_POST[email] \r\n Your Message: $_POST[message]";
    }
}
//Second Lab
// Setting the Date and Time so it doesn't change 
$starting_session_time=isset($_SESSION["starting_session_time"])?$_SESSION["starting_session_time"]:date("Y-m-d H:i:s");
$_SESSION["starting_session_time"]=$starting_session_time;
echo"Hello, Your Session Started at $starting_session_time <br/>";

//Third Lab
//Adding a Flag to Session
$visit=new Visit();
$flag=isset($_SESSION["flag"])?$_SESSION["flag"]:"First Time Visit";
if($flag=="First Time Visit"){
    echo"Welcome to our website, This is your first visit";
    $_SESSION["flag"]="Visited";
    $visit->setVisitFlag(true);
    $counter->increaseCount();

    store_counter_to_file(Visit::getCount());}
else{
    echo"Welcome back, You have visited our website before";
    // $visit=new Visit($_SERVER["REMOTE_ADDR"],$_SERVER["HTTP_USER_AGENT"]);
}
// Controlling the flow, based on view
$current_view=isset($_GET["view"])?$_GET["view"]:default_view;
if($current_view=="display"){
    display_all_sumbit_data();
    echo"<br/> To add new User Data <a href='index.php?view=add'> Click Add User </a>";
}else{
    ?>
   
<html>
    <head>
        <title> contact form </title>


    </head>

    <body>
        <h3> Contact Form </h3>
        <div id="after_submit">
            
        </div>
        <h2><?php  echo $message; ?></h2>
        <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">

            <div class="row">
                <!-- added php code to remember the name  -->
                <label class="required" for="name">Your name:</label><br />
                <input id="name" class="input" name="name" type="text" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ""; ?>" size="30" /><br  /><?php echo $nameError ?>

            </div>
            <div class="row">
                <!-- added php code to remember the email  -->
                <label class="required" for="email">Your email:</label><br />
                <input id="email" class="input" name="email" type="text" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ""; ?>" size="30" /><p><?php echo $mailError ?></p><br />

            </div>
            <div class="row">
                <label class="required" for="message">Your message:</label><br />
                <textarea id="message" class="input" name="message" rows="7" cols="30"><?php echo isset($_POST["message"]) ? $_POST["message"] : ""; ?></textarea><p><?php echo $messageError ?></p><br />

            </div>

            <input id="submit" name="submit" type="submit" value="Send email" />
            <input id="clear" name="clear" type="reset" value="clear form" />

        </form>
        <h2><?php echo nl2br ($valid)?></h2>
    </body>

</html>
<?php
    store_sumbit_data_to_file($_POST["name"],$_POST["email"]);
    echo"<br/> To display all user Data <a href='index.php?view=display'> View all User Data </a>";
    echo"<br/> Counter= <?php counter->getCount(); ?> </a>";
}


?>

