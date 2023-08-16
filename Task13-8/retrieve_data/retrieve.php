<?php
include_once('../insert_data/database.php');
$sql = "SELECT * FROM students1";
$retrive_data = mysqli_query($connect, $sql);//خزنتهم بمتغير عشان رح الف عليهم واجيبهم
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
    if (mysqli_num_rows($retrive_data) > 0) {//هاي عشان اذا ما كان عندي داتا ما اطلعله الجدول بطلعله رسالة انه ما في داتا
    ?>
    <!-- هون اذا الاجابة ترو ادخل ونفذ -->
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>City</th>
                <th>action</th>
                <th>action</th>
            </tr>
            <?php
            //mysqli_fetch_array(result,resulttype)
            //بتستقبل اكتر من نوع يعني بامكاني ما احدد النوع / بقدر احط صفر بدل الفيرست نيم يعني
            //  هاد العمود الاول\ اما  من خلال اسم العمود او الاندكس
            while ($row = mysqli_fetch_array($retrive_data)) {
                // print_r($row);
                
            ?>
            
                <tr>
                    <!-- هدول اسماء الاعمدة -->
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['lname']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><a href="../update_data/update-process.php?idup=<?php echo $row['id']; ?>">update</a></td>
                    <td><a href="../delete_data/delete-process.php?idde=<?php echo $row['id']; ?>">delete</a></td>

                </tr>
            <?php
            // $i++;
            }
            ?>
        </table>
       <a href="../insert_data/insert.php">add</a>
        <?php
    } else {
        echo "No results found.";
       echo '<a href="../insert_data/insert.php">add</a>';
    }
    ?>
</body>
</html>
