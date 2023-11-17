<?php

  $pessoa = new Class() {
    public $nome = "Daniel";

    public function dizerNome() {
      echo "Olá, meu nome é $this->nome <br>";
    }
  };

  echo $pessoa->nome . "<br>";

  $pessoa->dizerNome();

?>