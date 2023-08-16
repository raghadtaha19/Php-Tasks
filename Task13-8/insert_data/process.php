<?php
include('database.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $age=$_POST['age'];
    $city=$_POST['city'];
}
$insert="INSERT INTO `students1`(`fname`,`lname`,`age`,`city`) VALUES('$fname','$lname','$age','$city')";
$query=mysqli_query($connect,$insert);

if($query){
    // echo"New insert is done";
    header('location:../retrieve_data/retrieve.php');
}
else{
    echo"Erorr: " .$insert . "". mysqli_error($connect);
}

mysqli_close($connect);
?>
