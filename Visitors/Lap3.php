<?php
session_start();
require_once("vendor/autoload.php");

$counter=new Counter();

//Third Lab
//Adding a Flag to Session
$visit=new Visit();
$visit->visit_flag=isset($_SESSION["$visit->visit_flag"])?$_SESSION["$visit->visit_flag"]:$visit->setVisitFlag(true);
if($visit->visit_flag){
    echo"Welcome to our website, This is your first visit";
    $counter->increaseCount();

    store_counter_to_file($counter->getCount());}
else{
    echo"Welcome back, You have visited our website before";
    // $visit=new Visit($_SERVER["REMOTE_ADDR"],$_SERVER["HTTP_USER_AGENT"]);
}
?>

