<?php
$url = 'https://64db3368593f57e435b09eb6.mockapi.io/tasks';
$result = file_get_contents($url); 
// print_r($result);
// var_dump($result);
// get me all the data in API
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

<body class="container">

    <!-- form add / post  -->
<form method="post" Action='post.php' class="my-5" >

<div class="form-group">
    <label for="name">Taskname</label>
    <input type="text" class="form-control" id="name" placeholder="name" name="name">
</div>
<button type="submit" class="btn btn-primary" name="submit">Add</button>
</form>
 <!-- form add / post  end-->

    <?php
    if ($result !== false) {
        $data = json_decode($result, true); //from string to array
        if ($data !== null) {
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Task Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

//array of objects
                    foreach ($data as $item) { ?>
                        <tr>
                            <td>
                                <?php echo $item['TaskName'] ?>
                            </td>
                            <td>
                                <a href="put.php?upid=<?php echo $item['id'] ?>" class="btn btn-info">
                                    Update </a>
                                    <a href="delete.php?deid=<?php echo $item['id'] ?>" class="btn btn-danger">
                                    Delete </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        <?php } else {
            echo "Error decoding JSON response.";
        }
    } else {
        echo "Error fetching data from the API.";
    } ?>

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