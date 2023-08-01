<?php
$colors = array('white', 'green', 'red') ;
$colors_sorting=sort($colors);
echo"<ul>
<li>$colors[0]</li>
<li>$colors[1]</li>
<li>$colors[2]</li>
</ul>
";
echo "<br>";

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
 "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
  "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", 
  "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

  foreach($cities as  $key=>$value){
    echo "The capital of $key is $value <br>";

  }
   
echo "<br>";

  $color = array (4 => 'white', 6 => 'green', 11=> 'red'); 
  
    echo $color['4'];

echo "<br>";

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach($fruits as  $key => $value){
   echo ("$key = $value<br>");
}

echo "<br>";

$words =  array("abcd","abc","de","hjjj","g","wer");
$x = strlen($words[0]);

   foreach($words as  $word){
    if(strlen($word)<$x){
        $x = strlen($word);

    }
}
echo "The shortest array length is $x";
   foreach($words as  $word){
    if(strlen($word)>$x){
        $x = strlen($word);

    }
}

echo "<br>";
echo"The longest array length is $x";
