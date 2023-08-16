
<!-- $localserver="localhost";
$username="root";
$password="";
$database="users";

$connect=mysqli_connect($localserver,$username,$password,$database);
if(!$connect){
    die("Error " . mysqli_connect_error());
} -->



<?php
$host = 'localhost';
$dbname = 'users';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>
