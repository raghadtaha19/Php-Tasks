<?php
include_once('../insert_data/database.php');

$message = ""; // Initialize the message variable

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $city = $_POST['city'];

        // Update the record in the database
        $query = "UPDATE students1 SET fname=?, lname=?, age=?, city=? WHERE fname=?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$fname, $lname, $age, $city, $fname]);

        $message = "Record modified successfully";
        header('location:../retrieve_data/retrieve.php');
    }

    $stmt = $pdo->prepare("SELECT * FROM students1 WHERE fname=?");
    $stmt->execute([$_GET['fname']]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
</head>
<body>
    <form method="post" action="">
        <div><?php echo $message; ?></div>
        <a href="../retrieve_data/retrieve.php">Students List</a><br><br>
        <input type="hidden" name="fname" value="<?php echo $row['fname']; ?>">
        <label>Last Name:</label>
        <input type="text" name="lname" value="<?php echo $row['lname']; ?>"><br>
        <label>Age:</label>
        <input type="text" name="age" value="<?php echo $row['age']; ?>"><br>
        <label>City:</label>
        <input type="text
