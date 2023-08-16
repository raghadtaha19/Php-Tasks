<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "group2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) { //This checks if there was an error while connecting to the database.
    die("Connection failed: " . $conn->connect_error);  //If there was a connection error, this line stops the script and displays an error message.
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $age = $_POST["age"];
    $birthdate = $_POST["birthdate"];

    $stmt = "INSERT INTO `users` (`name`, `email`, `password`, `phone`, `birthdate`, `age`) VALUES ('$name', '$email', '$password', '$phone', '$birthdate', '$age')";

    $result = mysqli_query($conn, $stmt);

    if ($result) { //This executes the prepared statement with the bound parameters.
        echo "<h1>Record inserted successfully!</h1>";
    } else {
        echo "Error: " ;//. $stmt->error
    }

    // $stmt = $conn->prepare("INSERT INTO users (name, email, password, phone, birthdate, age) VALUES (?, ?, ?, ?, ?, ?)");   //This prepares an SQL statement for execution.     
    // (?) is a placeholder that is commonly used with prepared statements to represent values that will be supplied later.
    //When you execute a prepared statement, the actual values are substituted for these placeholders.
    //Why we user it -> Security (prevent SQL injection), Data Separation, Efficiency

    // $stmt->bind_param("sssssi", $name, $email, $password, $phone, $birthdate, $age);   //This binds the parameters (values) to the prepared statement.  //"sssss" to indicate that you're providing five string values.

    // if ($stmt->execute()) { //This executes the prepared statement with the bound parameters.
    //     echo "<h1>Record inserted successfully!</h1><br>";
    // } else {
    //     echo "Error: " . $stmt->error;
    // }

    // $stmt->close(); //This line closes the prepared statement to free up resources.
    
}

$conn->close(); //Finally, this line closes the database connection.

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Example 13-AUG</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/nicecss@2.1.0/dist/nice.css">
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f5f5f5;
    }
    h1{
        position: absolute;
        top: 0px;
    }

    .form-container {
        width: 230px;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-input {
        margin-bottom: 15px;
    }

    .form-label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    .form-input input[type="text"],
    .form-input input[type="email"],
    .form-input input[type="password"],
    .form-input input[type="tel"],
    .form-input input[type="number"],
    .form-input input[type="date"] {
        width: 90%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form-input input[type="text"]:focus,
    .form-input input[type="email"]:focus,
    .form-input input[type="password"]:focus,
    .form-input input[type="tel"]:focus,
    .form-input input[type="date"]:focus {
        outline: none;
        border-color: #6c63ff;
    }

    .form-button {
        text-align: center;
    }

    .form-button button {
        background-color: #6c63ff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-button button:hover {
        background-color: #544ddd;
    }
</style>
</head>
<body>
<div class="form-container">
    <form method="post">
        <div class="form-input">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-input">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-input">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-input">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="form-input">
            <label for="birthdate" class="form-label">Birthdate</label>
            <input type="date" id="birthdate" name="birthdate" required>
        </div>
        <div class="form-input">
            <label for="age" class="form-label">Age</label>
            <input type="number" id="age" name="age" required>
        </div>
        <div class="form-button">
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
</body>
</html>

