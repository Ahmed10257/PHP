<?php
session_start();
require_once("vendor/autoload.php");

$counter = new Counter();

// Third Lab
// Adding a Flag to Session
$visit = new Visit();
$visit_flag_key = $visit->getVisitFlag(); 
$visit_flag_key=(isset($_SESSION["visit_flag_key"]) ? $_SESSION["visit_flag_key"] : $visit->getVisitFlag());
$_SESSION["visit_flag_key"] = $visit_flag_key; 

echo "Visit Flag= " . $visit->getVisitFlag();
if (!$_SESSION["visit_flag_key"]){
    echo " <br/> Welcome to our website, This is your first visit";
    $counter->increaseCount();
    store_counter_to_file($counter->getCount());
    $visit->setVisitFlag(true);
    $_SESSION["visit_flag_key"] = $visit->getVisitFlag(); 
} else {
    echo "<br/> Welcome back, You have visited our website before";
}

echo "<br/> Counter= " . $counter->getCount(); 
echo "<br/> Visit Flag= " . $visit->getVisitFlag();
?>
