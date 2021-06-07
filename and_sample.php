<?php

$ages = [22, 34, 12, 45];

//0番目の要素：22を取り出す
echo $ages[0];
echo "<br>";

//1番目の要素：34を取り出す
echo $ages[1];
echo "<br>";
//2番目の要素：12を取り出す
echo $ages[2];
echo "<br>";
//3番目の要素：45を取り出す
echo $ages[3];


$fruits = [
  "banana" => "バナナ",
  "apple" => "りんご",
  "orange" => "みかん",
  "grape" => "ぶどう"
];

echo "<br>";
echo $fruits["banana"];

//key="apple"："りんご"を取り出す
echo $fruits["apple"];

//key="orange"："みかん"を取り出す
echo $fruits["orange"];

//key="grape"："ぶどう"を取り出す
echo $fruits["grape"];

$ages = [
  "父" => 55,
  "母" => 52,
  "兄" => 33,
  "妹" => 28  
];

?>