 <!-- هسا بدي اطبق بمثال واقعي -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <!-- حددت الطريقة الي رح ينقل فيها البيانات من الميثود
    الاكشن بحط فيها اليورل للصفحة الي بدي يروح عليها بعد ما اكبس سبمت -->
    <h2>Login</h2>
    <form action="process_login.php" method="GET">
        <Label for="username">Username:</Label>
        <input type="text" name="username" required> 
        <!-- لازم كل انبت اعطيه نيم واحفظه باسم مفهوم لانه رح نرجع نستخدمه -->
        <!-- ببعث الي مكتوب بالنيم ببعثه باليورل بعد علامة الاستفهام  -->
        <br><br>
        <Label for="password">Password:</Label>
        <input type="password" name="password" required>
        <br><br>
        <input type="submit" value="Login">
        <!-- الفاليو هي الي مكتوب بالكبسة -->
    </form>
    
</body>
</html>