<?php
session_start();//لازم احطها اول وحدة دايما
//فنكشن الازسيت بتاكد اذا الي داخل الاقواس انعمله انيشليزيد يعني فاليو ولا لا
//مشان اتاكد انه الكود الي وصلني في داتا ولا لا
//بحط جوا الاقواس السوبر جلوبل الي عرفتهم 
//بفوت عالشرط اذا كان كلهم ترو انه معرفين والهم قيم
//مع انه هون انا مش معرفهم بهاي الصفحة بس عشانهم جلوبل فاريبلز قدرت استخدمهم باي مكان
if( isset($_SESSION['username']) && isset($_SESSION['password']) && isset($_SESSION['is_logged_in'])){
    $username=$_SESSION['username'];//هون عرفتهم
    $password=$_SESSION['password'];
    $is_logged_in=$_SESSION['is_logged_in'];

    echo"Username::$username <br>";// وهون طبعتهم
    echo"password::$password <br>";
    echo"is_logged_in::" . ($is_logged_in ?"yes" : "no");
}

else{
    "No data found in the session";
}
//فهاي هي الفائدة من السيشن ستورج بعرفهم بصفحة وبقدر استخدمهم بصفحة ثانية
//لهون هاي الاساسيات