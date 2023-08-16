<?php
//مثال بسيط على السيشن
session_start();

$_SESSION['username']='raghad';
$_SESSION['password']=123;
$_SESSION['is_logged_in']=true;


$username=$_SESSION['username'];
$password=$_SESSION['password'];
$is_logged_in=$_SESSION['is_logged_in'];


echo "Username:$username <br>";
echo "password:$password <br>";
echo "is_logged_in:".($is_logged_in ? "yes" :"no");