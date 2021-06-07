<?php

foreach(range(1,30) as $num) {
 if($num % 15 == 0) {
   echo "FizzBuzz<br>";
 }elseif($num % 3 == 0) {
   echo "Fizz<br>";
 }elseif($num % 5 == 0) {
   echo "Buzz<br>";
 }elseif($num % 4 == 0) {
   continue;
 }else{
   echo $num."<br>";
 }
}

?>