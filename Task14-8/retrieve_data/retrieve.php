<?php
include_once('../insert_data/database.php');

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM students1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $retrive_data = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrieve Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    if (count($retrive_data) > 0) {
    ?>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>City</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
            <?php
            foreach ($retrive_data as $row) {
            ?>
                <tr>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['lname']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><a href="../update_data/update-process.php?fname=<?php echo $row['fname']; ?>" class="btn btn-success">update</a></td>
                    <td><a href="../delete_data/delete-process.php?fname=<?php echo $row['fname']; ?>">delete</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
        <a href="../insert_data/insert.php">Add</a>
        <?php
    } else {
        echo "No results found.";
        echo '<a href="../insert_data/insert.php">Add</a>';
    }
    ?>
</body>
</html>
