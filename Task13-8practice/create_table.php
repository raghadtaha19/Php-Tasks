<?php

$conn= mysqli_connect("localhost","root","","group_1");
if($conn){
    echo"connection sucess";
}
else{
    die("error" . mysqli_connect_error());
}
echo"<br>";



 $sql="CREATE TABLE IF NOT EXISTS users(id int(3), name varchar(11) , email varchar(15))";

 if(mysqli_query($conn,$sql)){
    echo"Table users creation sucess";
 }
 else{
    echo"my sql error" . mysqli_error($conn);
 }
echo"<br>";

$addcolumn = "ALTER TABLE  users ADD age int(2)";

if (mysqli_query($conn, $addcolumn))
    {
    echo " add column success";
    }
else
     {  echo "error create column: " . mysqli_error($conn); 
     }








?>



