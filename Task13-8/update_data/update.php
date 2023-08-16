<?PHP
include_once('../insert_data/database.php');

if (isset($_POST)) { // from update form
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $city = $_POST['city'];
print_r($_POST);
    // Update the record in the database
    $query = "UPDATE students1 SET fname='$fname', lname='$lname', age='$age', city='$city' WHERE id='$_POST[id]'";
    $result = mysqli_query($connect, $query);
    
    header('location:../retrieve_data/retrieve.php');
}
?>