<?php

$localhost="localhost";
$username="root";
$password="";

$conn=mysqli_connect($localhost,$username,$password);
if($conn){
    echo"connection sucess";
}
else{
    die("error" . mysqli_connect_error());
}



$createDB="CREATE DATABASE IF NOT EXISTS group_1";
if(mysqli_query($conn,$createDB)){
    echo"Database created sucessfully";
}
else{
    echo"mysql error" . mysqli_error($conn);
}
echo"<br>";
?>




<?php
// $servername = "localhost";
// $username = "root";
// $password = "";



// $conn = mysqli_connect($servername, $username, $password);


// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
//     echo "Connected successfully";

//     echo "<br>";
//     echo "<br>";


// Create database
// $database = "group_one";
// $sqldb = "CREATE DATABASE IF NOT EXISTS $database";


// if (mysqli_query($conn, $sqldb)) {
//     echo "Database created successfully";

    // Select the created database
    // mysqli_select_db($conn, $database);

    // echo "<br>";
    // echo "<br>";


    //Create table

    // $sqlt = "CREATE TABLE IF NOT EXISTS students (
    //     id INT(3) AUTO_INCREMENT PRIMARY KEY,
    //     firstname VARCHAR(10) NOT NULL,
    //     lastname VARCHAR(10) NOT NULL,
    //     email VARCHAR(20)
    //     )";

        // if (mysqli_query($conn, $sqlt)) {
        //     echo "Table students created successfully";
        // } else {
        //     echo "Error creating table: " . mysqli_error($conn);
        // }


// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }


//mysqli_close($conn);


////////////////////////////////////////////////////////////////////

// $conn = mysqli_connect("localhost", "root", "","students");

// Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";

// $sql = "CREATE TABLE IF NOT EXISTS studentsData (
//     id int(11) NOT NULL primary key , 
//     names varchar(255) ,
//     age int(11) 
// )";
// if (mysqli_query($conn, $sql)) {
// echo "Table studentsData created successfully";
// } else {  echo "Error creating table: " . mysqli_error($conn);
// };

// $column = "ALTER TABLE if not exists studentsdata ADD email VARCHAR(255)";

// if (mysqli_query($conn, $column)) {
//     echo "column added successfully";
//     } else {  echo "Error creating table: " . mysqli_error($conn);
//     };


