<?php 

$users = ["satou", "tanaka", "yamada", "shimizu"];
foreach($users as $user){
  echo "Hello!! ".$user."<br>";
}
?>


<?php 
$ages = [20, 60, 27, 23];

foreach($ages as $age) {
  echo "I`m ".$age. "years old.<br>";
}

$items = ["book", "food", "movie", "music"];

foreach($items as $item) {
  echo "I bought ".$item."<br>";
}

$prefectures = ["Hokkaido", "Okinawa", "Saitama", "Ibaraki"];

foreach($prefectures as $prefecture) {
  echo $prefecture." is awesome!!<br>";
}

?>

<?php

$users = [
    1 => "satou",
    2 => "tanaka",
    3 => "yamada",
    4 => "shimizu"];

foreach($users as $key => $value){
  echo "No.".$key."は".$value."です<br>";
}

?>

<?php

$fruitesPrices = [
    'apple' => 150,
    'banana' => 100,
    'orange' => 200,
    'peach' => 300
];

foreach($fruitesPrices as $frute => $price){
    echo $frute."の値段：".$price."円<br>";
}

?>