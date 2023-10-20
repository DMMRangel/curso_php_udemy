<?php

  class Car {

    public $rodas = 4;
    public $aro = 20;
    public $nome;

    function ligar() {
      echo "Vruuummmm... <br>";
    }

  }

  $ferrari = new Car;
  $ferrari->nome = "Ferrari";
  
  echo $ferrari->nome . "<br>";
  echo $ferrari->rodas . "<br>";
  echo $ferrari->aro . "<br>";

  $ferrari->ligar();

?>