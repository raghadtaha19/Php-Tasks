<?php  
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    //  from form
$url = 'https://64db3368593f57e435b09eb6.mockapi.io/tasks';
$data = array(
    'TaskName' => "$name",

);
$options = array(
    'http' => array(
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",//*of the request to indicate that you're sending form data.
        'method' => 'POST',
        'content' => http_build_query($data)//*URL-encoded query string    convert arry to str
    )
); 
// fixed for post, put

$context = stream_context_create($options);//*information about how the HTTP request should be executed
// send change to url
$result = file_get_contents($url, false, $context);

//  echo $result; //*{"TaskName":"New Task","id":"6"}
header('Location:get.php');
}
?>
