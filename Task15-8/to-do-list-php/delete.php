<?php  
$id = $_GET['deid'];
$url = "https://64db3368593f57e435b09eb6.mockapi.io/tasks/$id";
$options = array(
    'http' => array(
        // 'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'DELETE',
    )
);
$context = stream_context_create($options); 
// save the change in api
$result = file_get_contents($url, false, $context);
//  save the change in api in the result
header('Location:get.php');
?>

