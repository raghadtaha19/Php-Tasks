<?php

$id = $_GET['upid'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
$url = "https://64db3368593f57e435b09eb6.mockapi.io/tasks/$id";
$data = array(
    'TaskName' => "$name",
);
// new data 
$options = array(
    'http' => array(
        'header' => "Content-type: application/x-www-form-urlencoded\r\n", //*of the request to indicate that you're sending form data.
        'method' => 'PUT',
        'content' => http_build_query($data) //*URL-encoded query string 
    )
);

$context = stream_context_create($options); //*information about how the HTTP request should be executed
$result = file_get_contents($url, false, $context);
header('Location:get.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form method="post" >

        <div class="form-group">
            <label for="name">Taskname</label>
            <input type="text" class="form-control" id="name" placeholder="name" name="name">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">UPDATE</button>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>