<?php
$localserver="localhost";
$username="root";
$password="";
$database="users1";

$connect=mysqli_connect($localserver,$username,$password,$database);
if(!$connect){
    die("Error " . mysqli_connect_error());
}



?>