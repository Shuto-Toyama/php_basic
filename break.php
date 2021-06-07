<?php

for($i =1 ; $i < 10 ; $i++){

    if( $i == 5 ){
        echo $i."なのでループから抜けます。";
        break;
    }

    echo $i;
    echo "<br>";

}

?>

<?php

$i = 1;
switch($i) {
  case 0:
      echo "iは0に等しい";
      break;
  case 1:
      echo "iは1に等しい";
      break;
  case 2:
      echo "iは2に等しい";
      break;
}
//case0〜2のどこかの条件でtrueになるとbreakによって後続の処理に続く
echo "breakの後に表示されます";
?>

<?php 

for( $i=0; $i<11; $i++) {
  if( $i===6 ) {
    echo "iが6なのでループをスキップ<br>";
    continue;
  }
  echo $i."<br>";
}

?>