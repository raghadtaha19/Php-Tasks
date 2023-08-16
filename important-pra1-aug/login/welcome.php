<?php
session_start();
if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']===true){//بالاول لازم اتاكد انها موجودة بعدين بتاكد انه قيمتها ترو
    $username=$_SESSION['username'];
    echo "welcome,$username";
    echo "<br> <a href='logout.php'>Logout</a>";

}
else{
    header('location:login.php');
    exit;
}