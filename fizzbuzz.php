<?php
for ($i=1; $i < 101 ; $i++) {
  if($i % 3 == 0 && $i % 5 == 0) {
    echo "FizzBuzz<br>";
    continue;
  }elseif($i % 3 == 0){
    echo "Fizz<br>";
    continue;
  }elseif($i % 5 == 0){
    echo "Buzz<br>";
    continue;
  }else{
    echo $i."<br>";
  }
}
?>

<?php 

for($i=1; $i < 101; $i++) {
 if($i % 3 == 0 && $i % 5 == 0) {
   echo "FizzBuzz<br>";
   continue;
 }elseif($i % 3 == 0) {
   echo "Fizz<br>";
   continue;
 }elseif($i % 5 == 0) {
   echo "Buzz<br>";
   continue;
 }else{
   echo $i."<br>";
 }
}

?>