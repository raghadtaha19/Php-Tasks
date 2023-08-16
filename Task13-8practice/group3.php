<!-- بحث على الداتا الموجودة بقاعدة البيانات -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: rgb(238, 238, 238);
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin: 20px;
        }
        .container{
            background-color: rgb(255, 255, 255);
            border-radius: 10px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
            margin: 20px;
            padding: 20px;
        }
        .btn{
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
        table{
            border-collapse: collapse;
            width: 100%;
        }

    </style>
</head>
<body>
    <div class="container">
       <form action="" method="post">
        <input type="text" name="id" placeholder="Enter id" >
        <input type="submit" name="search" value="search by id" class="btn">
       </form><br>
    <table>
        <tr>
            <th>FName</th>
            <th>LName</th>
            <th>email</th>
            <th>Password</th>
            <th>major</th>
            <th>address</th>
            <th>phone</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "students");
        if (isset($_POST['search'])) {
            // السيرش تعود على زر السبمت
            $id = $_POST['id'];
            $query = "SELECT * FROM `data` WHERE id = '$id'";
            // حددنا السيرش انه من الاي دي
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result)) {
            echo <<<Here
               <tr>
               <td>$row[FName]</td>
               <td>$row[LName]</td>
               <td>$row[email]</td>
               <td>$row[Password]</td>
               <td>$row[major]</td>
               <td>$row[address]</td>
               <td>$row[phone]</td>
                </tr>
            Here;
            }
        }
        ?>
    </table> 
    </div>

</body>
</html>
