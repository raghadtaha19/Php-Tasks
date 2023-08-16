<?php
include_once('../insert_data/database.php');

 // Initialize the message variable


if (isset($_GET['idup'])) {
    $idup = $_GET['idup'];
    // echo $idup;

    $result = mysqli_query($connect, "SELECT * FROM students1 WHERE id= $idup");
    $row = mysqli_fetch_array($result);
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Update</title>
</head>

<body>
    <form method="POST" action="update.php">
        
        <a href="../retrieve_data/retrieve.php">students list</a><br><br>
        <label>first Name:</label>
        <input type="text" name="fname" value="<?php echo $row['fname']; ?>"><br><br>
        <label>Last Name:</label>
        <input type="text" name="lname" value="<?php echo $row['lname']; ?>"><br>
        <label>Age:</label>
        <input type="text" name="age" value="<?php echo $row['age']; ?>"><br>
        <label>City:</label>
        <input type="text" name="city" value="<?php echo $row['city']; ?>"><br>
        <input type="text" name="id" value="<?php echo $idup; ?>" hidden><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>

</html>

<?php





// }
//  header('location:../retrieve_data/retrieve.php');
?>