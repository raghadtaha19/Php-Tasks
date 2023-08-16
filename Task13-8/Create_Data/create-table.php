<?php
include('dbh-inc.php');
$table="CREATE TABLE `students`(
    fname TEXT(255) NOT NULL,
    lname TEXT(255),
    age int(2),
    city TEXT(255)
)";

if(mysqli_query($connect,$table)){
    echo"Table student created successfuly";
}
else echo"Error create table:" . mysqli_error($connect);

?>