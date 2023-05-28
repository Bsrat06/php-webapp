<?php
$server= "localhost";
$dbusername= "root";
$dbpassword= "";
$db= "project"; 
$errorMessage= "";
$successMessage= "";

//create a connection with the database
$connection= mysqli_connect($server, $dbusername, $dbpassword, $db);

if (!$connection){
$errorMessage= "Connection Failed!";
}



?>