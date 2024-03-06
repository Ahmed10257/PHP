<?php
require_once("vendor/autoload.php");

$my_db = new DatabaseAccess();
if($my_db->connect())   {
    echo "Connected to the database";
    echo "<pre>";
    echo $my_db->get_data(array(),0);
    echo "</pre>";
    $my_db->disconnect();
} else {
    echo "Not connected to the database";
}

?>