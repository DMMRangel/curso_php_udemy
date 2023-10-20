<?php

  class Pessoa {

    function falar() {
      echo "Olá, eu sou um ser humano! <br>";
    }

    function soma($x, $y) {
      echo $x + $y . "<br>";
    }

  }

  $daniel = new Pessoa;

  $daniel->falar();

  $ada = new Pessoa;

  $ada->falar();

  $daniel->soma(5, 3);
  $ada->soma(6, 6);

?>