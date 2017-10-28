<?php

$host="localhost";
$user="root";
$password="";
$db="project_apsi";

$connect=new mysqli($host,$user,$password,$db);
if($connect->connect_error){ 
    echo "Unable to connected to database";
}

?>
