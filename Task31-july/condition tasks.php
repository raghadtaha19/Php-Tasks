<?php

$year = 2005;
function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return $year  ;
    } else {
      
    }
}

if (isLeapYear($year)) {
    echo "$year is a leap year.";
} else {
    echo "$year is not a leap year.";
}



 echo"<br><br>";

$temp="20 degree";
if($temp < 20)
  echo " $temp We are in winter";
else
  echo " $temp The season is summer ";

echo"<br><br>";

$num1=2;
$num2=2;
if($num1 == $num2)
  echo  ($num1 + $num2)*3;
else
  echo $num1 + $num2;

echo"<br><br>";

$num1=15;
$num2=15;
$sum=$num1+$num2;
if($sum ==30)
  echo  "true";
else
  echo "false";

echo"<br><br>";

$number=20;
if($number %3 == 0)
  echo" $number is a multiple of three";
else
  echo"$number is  not a multiple of three ";

echo"<br><br>";

$x=1;
$y=5;
$z=9;

if($x > $y && $x > $z) echo $x;
else if($y > $x && $y > $z) echo $y;
else echo $z;
echo"<br><br>";


$units = 300; 
$bill = 0;

if ($units <= 50) {
    $bill = $units * 2.50;
} elseif ($units <= 150) {
    $bill = 50 * 2.50 + ($units - 50) * 5.00;
} elseif ($units <= 250) {
    $bill = 50 * 2.50 + 100 * 5.00 + ($units - 150) * 6.20;
} else {
    $bill = 50 * 2.50 + 100 * 5.00 + 100 * 6.20 + ($units - 250) * 7.50;
}

echo "Total Electricity Bill: " . $bill . " JOD";

echo"<br><br>";

$val=-20;
if($val >0){
  echo "positive";
}
else echo "negative";

 echo"<br><br>";

$operator = "/";
$x1 = 2;
$x2 = 3;
$result;

switch ($operator) {
    case "+":
        $result = $x1 + $x2;
        echo $result;
        break;
    case "-":
        $result = $x1 - $x2;
        echo $result;
        break;
    case "*":
        $result = $x1 * $x2;
        echo $result;
        break;
    case "/":
        if ($x2 != 0) {
            $result = $x1 / $x2;
            echo $result;
        } else {
            echo "Can't divide by zero";
        }
        break;
    default:
        echo "Invalid operator";
        break;
}



echo"<br><br>";

$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
$scores_count = count($scores);
$sum = 0;

for ($i = 0; $i < $scores_count; $i++) {
    $sum += $scores[$i];
}

$average = $sum / $scores_count;

if ($average < 60) {
    echo 'F';
} elseif ($average < 70) {
    echo 'D';
} elseif ($average < 80) {
    echo 'C';
} elseif ($average < 90) {
    echo 'B';
} else {
    echo 'A';
}


