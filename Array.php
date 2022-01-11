<?php

echo "<h1>Task1</h1>";
$colorsArray=["red","green","white"];
$string1="The memory of that scene for me is like a frame of film forever frozen at that moment: the $colorsArray[0] carpet, the $colorsArray[1] lawn, the $colorsArray[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
echo $string1;
echo "<br>";
echo "---------------------------------------------------------------------------------------";




echo "<h1>Task2</h1>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$color=array("green","red","white");

foreach($color as $element){
    echo "<ul> <li> $element</li></ul>";
}
echo "<br>";
echo "---------------------------------------------------------------------------------------";

?>
</body>
</html>


<?php
echo "<h1>Task3</h1>";

$cities = array( "Italy" => "Rome", "france" => "Paris", "Germany" => "Berlin", " Greece" => "Athens");

foreach($cities as $key=>$element){
    echo "<h3>the capital of $key is $element</h3>";
}

echo "<br>";
echo "---------------------------------------------------------------------------------------";

echo "<h1>Task4</h1>";
$color= array('Green' , 'Red','White');
echo $color[0];
echo "<br>";
echo "---------------------------------------------------------------------------------------";

echo "<h1>Task5</h1>";

$Array= array('1' ,'2','3','4','5' );

$Array1='$' ;
array_splice( $Array, 3, 0, $Array1 ); 

foreach($Array as $element){
    echo $element."\t";
}

echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task6</h1>";
$fruits=array("d" => "lemon","a" =>"orange" ,"b"=>"banana" ,"c"=>"apple");
krsort ($fruits);
foreach($fruits as $key=>$element)
echo $key."=".$element."<br>";
echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task7</h1>";
$avg=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73);
$total=0;

foreach($avg as $element){
    $total =$total+$element;
}
echo "The average is :".$total/count($avg)."<br>";
sort($avg);

foreach($avg as $element){
    // echo $element."\t";
}

echo "list of seven lowest : ";
for($i=0;$i<7 ;$i++){
echo $avg[$i]."\t";
}

rsort($avg);
echo "list of seven highest : ";

for($i=0;$i<7 ;$i++){
 echo $avg[$i]."\t";
}

echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task8</h1>";
$array1=array("color"=>"red",2,4);
$array2=array("a","b","color"=>"green","shap"=>"trapezoid");
print_r(array_merge($array1,$array2));

echo "<br>";
echo "---------------------------------------------------------------------------------------";

echo "<h1>Task9</h1>";
$colors = array("RED", "BLUE", "WHITE", "YELLOW");

foreach($colors as $element){
    echo(strtolower($element))."<br>";
}


echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task10</h1>";
$colors = array("red", "blue", "white", "yellow");

foreach($colors as $element){
    echo(strtoupper($element))."<br>";
}
echo "<br>";
echo "---------------------------------------------------------------------------------------";

echo "<h1>Task11</h1>";
for ($i=200;$i <= 250;$i++){
  if($i % 4===0){
      echo $i."\t";
  }
}
echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task12</h1>";
$words = array("abcd","abc","de","hjjj","g","wer");

for($i=0; $i < count ($words);$i++){
    if($i<4){
        if(strlen($words[$i]) > strlen($words[$i+1])){
            $result= $words[$i+1];
       }
    
       else{
        $result= $words[$i];
       }
    }

}
echo "The shortest array length is :";
echo strlen($result)."\t";
echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task13</h1>";
$words = array("abcd","abc","de","hjjj","g","wer");
for($i=0; $i < count($words);$i++){
    if($i<4){
        if(strlen($words[$i]) <= strlen($words[$i+1])){
            $result= $words[$i+1];
       }
       else{
        $result= $words[$i];
       }
    }
}
echo "The longest array length is :";
echo strlen($result)."\t";
echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task14</h1>";
$randomnumber= range(11,20);
shuffle($randomnumber);
foreach($randomnumber as $element){
    echo $element."\t";
}
echo "<br>";
echo "---------------------------------------------------------------------------------------";



echo "<h1>Task15</h1>";
$arr1=array(2,0,10,12,6);
unset($arr1[1]); 
echo min($arr1);
echo "<br>";
echo "---------------------------------------------------------------------------------------";
?>









