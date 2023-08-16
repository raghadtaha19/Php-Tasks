<?php

include('./dbh-inc.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$birthDate = $_POST['birthDate'];


$city = $_POST['city'];
$postalCode = $_POST['postalCode'];

$sql = "INSERT INTO Person (FirstName, LastName, BirthDate) VALUES ('$firstName', '$lastName', '$birthDate')";

if($db_connection -> query($sql) === true) {
    $personID = $db_connection->insert_id;
    echo "Data inserted successfully" . "<br>";

    $sql = "INSERT INTO Address (City, PostalCode, PersonID) VALUES ('$city', '$postalCode', '$personID')";

    if($db_connection -> query($sql) === true) {
        echo "Data inserted successfully" . "<br>";
    } else {
        echo "Error | Reason: ", $db_connection->error . "<br>";
    }
}

else {
    echo "Data has not been inserted!<br>";
    echo "Error | Reason: ", $db_connection->error . "<br>";
}


$db_connection->close();
}