<?php

  class Pessoa {

    public $nome = "Daniel";
    public $idade = "38";

    function andar($passos) {

      echo "Andou $passos passos <br>";

    }

  }

  $daniel = new Pessoa;

  $daniel->andar(10);

?>