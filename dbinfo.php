<?php 
session_start();


$hostname = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "onlineshop";

$con = mysqli_connect($hostname, $dbusername, $dbpassword, $dbname);
mysqli_select_db($con, $dbname);

if($con){
    //echo "connection successfully";
}else{
    echo "something went wrong";
}


?>