<?php

  $implodeArray = boranessa();
  
  function boranessa() {
    $arr = ["guitarra", "jogos retro", "praia"];
    echo implode(", ", $arr) . "<br>";
    echo "<br>";
  };


  $implodeArray;

  // Outro jeito de fazer
  // $arr = ["carro", "prata", "quatro portas"];

  // $teste = implode(", " . "<br>", $arr) . "<br>";

  // echo $teste;
?>

<?php
  
  // Outro jeito de fazer
  $arr = ["carro", "prata", "quatro portas"];

  $teste = implode(", " . "<br>", $arr);

  echo $teste;

?>
