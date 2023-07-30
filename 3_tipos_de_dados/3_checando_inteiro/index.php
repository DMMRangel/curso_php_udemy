<?php

  if(is_int(5)) { // true
    echo "1 ";
    echo "É inteiro <br>";
  }


  if(is_int("Não é um inteiro")) { // false
    echo "2 ";
    echo "É inteiro <br>";
  }


  $a = 10;

  if (is_int($a)) { // true
    echo "3 ";
    echo "É um inteiro <br>";
  }
?>