<?php for($i = 1; $i < 11; $i++) : ?>
<?php echo $i."の2倍は".($i*2)."です。"; ?>
<?php echo "<br>"; ?>
<?php endfor; ?>

<?php
for ($i=1; $i<11; $i++) {
  echo $i."の2倍は".($i*2)."です。";
  echo "<br>";
};
?> 

<?php $i = 1;?>
<?php while($i < 11): ?>
<?php echo $i."の2倍は".($i*2)."です。"; $i++ ?>
<?php echo "<br>"; ?>
<?php endwhile; ?>

<?php
$i = 1;
while ($i < 11) {
  echo $i."の2倍は".($i*2)."です。";
  echo "<br>";
  $i++;
};
?>