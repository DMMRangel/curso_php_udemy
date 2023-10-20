<?php

  class Cachorro {

    function latir() {
      echo "au au <br>";
    }

    function andar() {
      echo "andando <br>";
    }
  }

  $frank = new Cachorro;
  $caramelo = new Cachorro;

  $frank->latir();
  $caramelo->andar();

?>