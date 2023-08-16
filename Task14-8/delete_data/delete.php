<?php
include_once('../insert_data/database.php');

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM students1";
    $stmt = $pdo->query($sql);

    if ($stmt->rowCount() > 0) {
        echo '<table>';
        echo '<tr>';
        echo '<th>Action</th>';
        echo '<th>First Name</th>';
        echo '<th>Last Name</th>';
        echo '<th>Age</th>';
        echo '<th>City</th>';
        echo '</tr>';

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr>';
            echo '<td><a href="../delete-process.php?fname=' . $row['fname'] . '">Delete</a></td>';
            echo '<td>' . $row['fname'] . '</td>';
            echo '<td>' . $row['lname'] . '</td>';
            echo '<td>' . $row['age'] . '</td>';
            echo '<td>' . $row['city'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo "No results found.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
