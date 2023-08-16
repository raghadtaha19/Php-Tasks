<?php  
include_once('../insert_data/database.php');

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM students1 WHERE fname=:fname";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':fname', $_GET['fname'], PDO::PARAM_STR);

    if ($stmt->execute()) {
        echo "Record deleted successfully";
        header('location:../retrieve_data/retrieve.php');
    } else {
        echo "Error deleting record";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
