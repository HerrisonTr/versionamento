<?php
$email = "Anderson";
$senha = "MinhaSenhaDificil";
echo "sha";
echo "<br>";
echo sha1($senha);
echo "<br>";
?>

<?php
  $str = 'This is an encoded string';
  echo "base64";
  echo "<br>";
  echo base64_encode($str);
  echo "<br>";
?>


<?php
$password = crypt('123dffdllkdfk');
echo "<br>";
echo "crypt";
   echo $password;
   echo "<br>";
?>

<?php
$email = "Anderson";
$senha = "MinhaSenhaDificil";
echo "<br>";
echo "md5";
echo "<br>";
echo md5($senha);
echo "<br>";
?>