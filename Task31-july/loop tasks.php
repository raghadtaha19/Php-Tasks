 <?php
// $acc=0;
// for($i=1 ; $i <=30 ; $i++ ){
//     $acc=$acc+$i;
// }
// echo "total =$acc";

// echo "<br>";

// $rows = 5;
// $columns = 5;
// for( $x=1 ; $x<=$rows ; $x++){
//     for( $y=1; $y<=$columns ; $y++){
//        if($x === $y){
//        echo $x . " " ;}

//         else {echo '0 ';}
//        }

//     }
// echo "<br>";



// $num=1;
// for($w=1 ;$w<=5;$w++){
//     $num=$num*$w;
// }

// echo "The factorial of :$num";

// echo "<br>";

// $total=10;
// $first=0;
// $second=1;
// for( $r=1; $r<=$total ;$r++ ){
//     echo $first ;
//     $next=$first+$second;
//     $first=$second;
//     $second=$next;
//     if($r<=$total){
//         echo" ,"; 
//     }
    
// }
// echo "<br>";


$n = 5;
$number = 1;



for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $number . " ";
        $number++;
    }
    echo PHP_EOL;
}





