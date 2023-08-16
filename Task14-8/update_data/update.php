<?php
include_once('../insert_data/database.php');

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM students1";
    $retrive_data = $pdo->query($sql);
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
    if ($retrive_data->rowCount() > 0) {
    ?>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>City</th>
                <th>Action</th>
            </tr>
            <?php
            $i = 0;
            while ($row = $retrive_data->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <tr>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['lname']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><a href="update-process.php?fname=<?php echo $row['fname']; ?>">Update</a></td>
                </tr>
            <?php
            $i++;
            }
            ?>
        </table>
    <?php
    } else {
        echo "No results found.";
    }
    ?>
</body>
</html>
