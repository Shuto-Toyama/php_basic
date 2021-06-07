<?php

//勇者の名前
$brave = "よしひこ";
//勇者のhp
$brave_hp = 70;
//勇者の攻撃力
$brave_attack = 40;
//勇者の防御力
$brave_defense = 5;

//敵の名前
$enemy = "スライム";
//敵のhp
$enemy_hp = 50;
//敵の攻撃力
$enemy_attack = 15;
//敵の防御力
$enemy_defense = 10;
//攻撃にランダム要素を入れる
//mt_rand(0,3)にすると0~3のうちランダムに数字を発生させる
$select_attack = mt_rand(0,3);


//敵に与えるダメージと残りHPの表示

if($select_attack == 0){
  echo $brave."のかいしんの一撃！";
  //mt_randの範囲を20~30と大きな値にする
  $enemy_damage = $brave_attack - $enemy_defense + mt_rand(20,30);
  $enemy_hp = $enemy_hp - $enemy_damage;
}else{
  echo $brave."のつうじょうこうげき！";
  $enemy_damage = $brave_attack - $enemy_defense + mt_rand(3,5);
  $enemy_hp = $enemy_hp - $enemy_damage;
}

echo "<br>";
echo $enemy."に".$enemy_damage."のダメージを与えた。";
echo "<br>";
echo $enemy."の残りHPは".$enemy_hp."だ。";
echo "<br>";

//残りHPによってリアクションを変える
if($enemy_hp > 20){
  echo $enemy."は元気だ。";
}elseif($enemy_hp > 10){
  echo $enemy."はちょっと弱っている。";
}elseif($enemy_hp > 5){
  echo $enemy."はかなり弱っている。";
}elseif($enemy_hp > 0){
  echo $enemy."は瀕死だ。";
}else{
  echo $enemy."はしんだ。";
}

echo "<br>";

if($select_attack == 0){
  echo $enemy."のかいしんのいちげき！";
  //mt_randの範囲を10~20と大きな値にする
  $brave_damage = $enemy_attack - $brave_defense + mt_rand(10,20);
  $brave_hp = $brave_hp - $brave_damage;
}else{
  echo $enemy."のつうじょうこうげき！";
  $brave_damage = $enemy_attack - $brave_defense + mt_rand(3,5);
  $brave_hp = $brave_hp - $brave_damage;
}

//敵に与えるダメージと残りHPの表示
echo "<br>";
echo $brave."に".$brave_damage."のダメージを与えた。";
echo "<br>";
echo $brave."の残りHPは".$brave_hp."だ。";
echo "<br>";

//残りHPによってリアクションを変える
if($brave_hp > 20){
  echo $brave."は元気だ。";
}elseif($brave_hp > 10){
  echo $brave."はちょっと弱っている。";
}elseif($brave_hp > 5){
  echo $brave."はかなり弱っている。";
}elseif($brave_hp > 0){
  echo $brave."は瀕死だ。";
}else{
  echo $brave."はしんだ。";
}

?>