<?php  
include_once('../insert_data/database.php');
$sql="DELETE FROM students1 WHERE id='" . $_GET['idde'] . "'";
if(mysqli_query($connect,$sql)){
    echo"Record deleted sucessfully";
    header('location:../retrieve_data/retrieve.php');
}
else{
    echo"Error deleting record: " . mysqli_error($connect);
}
mysqli_close($connect);
?>