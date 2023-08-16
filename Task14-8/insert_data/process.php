<?php
include('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $city = $_POST['city'];

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $insert = "INSERT INTO students1 (fname, lname, age, city) VALUES (:fname, :lname, :age, :city)";
        $stmt = $pdo->prepare($insert);
        $stmt->bindParam(':fname', $fname);
        $stmt->bindParam(':lname', $lname);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':city', $city);

        if ($stmt->execute()) {
            // echo "New insert is done";
            header('location:../retrieve_data/retrieve.php');
        } else {
            echo "Error: " . $stmt->errorInfo()[2];
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
