<?php
//الموقع هاد للادمن داشبورد بس الادمن بقدر يفوت عليه
session_start();

$valid_username="raghad";
$valid_password="raghad12345";
//يعني لازم يدخلي هدول حتى يقدر يفوت عليه
//كنا نخزن بالسيشن مباشرة اما هسا  بنخزن وبنبعت ب اشتتب ريكويست جديد اما جيت او بوست
//اذا استخدمت الجيت والبوست كميثود لازم استخدمهم لتخزين الداتا كمان
//نتاكد انه اساسا انبعثوا ولا لا
//$_GET or $POST
//بستخدمهم لما استخدم اشتتبي ركوست جيت او بوست او ابعث داتا داخل الفورم
if(isset($_GET['username']) && isset($_GET['password'])){//بستخدم جيت لانه الميثود الي وديته جيت وبستخدم جواته النيم الي حطيته بالانبوت
    $submitted_username=$_GET['username'];
    $submitted_password=$_GET['password'];

    if($submitted_username ==$valid_username && $submitted_password ==$valid_password){
        $_SESSION['is_logged_in']=true;
        $_SESSION['username']=$submitted_username;

        header('location:welcome.php');//هون عملتله ريديركت على صفحة جديدة
        exit;
    }
    else{
        echo"Invalid username or password .<a href=http://localhost/Php-Tasks/important-pra1-aug/login/login.php>please try again</a>";
    }
}
