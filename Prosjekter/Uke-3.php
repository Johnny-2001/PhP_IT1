<!DOCTYPE html>
<html>
  <head>
    <!-- Mulig å bruke æ, ø og å-->
    <meta charset="utf-8">
    <title>Mitt første PHP-skript: Johnny</title>
   <link rel="stylesheet" href="Stilark/uke3.css">
  </head>
  <body>
  <h1>Mitt første PHP skript: Yazty - Johnny</h1>
    <?php
function getImage($num){
  $image = "/Bilder/$num.png";
  return $image;
}
function isYatzy(){
  global $result;
  $firstValue = current($result);
  foreach($result as $value){
    if ($firstValue !== $value){
      return false;
    }
  }
  return true;
}

$result = array();
for ($i = 0; $i < 5; $i++){
  $terningkast = rand(1,6); 
  array_push($result, $terningkast);
}
  
echo "<div class=\"rad\">";
  foreach($result as $res){
    echo "<div class=\"kast\">Du fikk $res på terningen. <br> Det er ";

     if($res == 1) {
        echo "ikke bra nok.";
      } else  if ($res >= 2 && $res <= 4){
        echo "ikke noe å skryte av.";
      }else if($res == 5) {
        echo "nok så bra!";
      }else {
        echo  "topp!";
      }
    echo "<br><img src=\"" . getImage($res) . "\" alt=\"bilde av terning\"></div>"; 
    }
    echo "</div><p>";
   if (isYatzy()){
      echo "Gratulerer, du fikk Yatzy!!";
    }
    else{
      echo "Det ble ikke Yatzy denne gangen..";
    }
    echo "</p>"
  ?>
   <p><a href="<?php $_SERVER['PHP_SELF']; ?>">Prøv igjen</a></p>
  </body>
</html>
