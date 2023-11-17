<?php

  class Cachorro {

    public $nome;
    public $cor;
    public $patas;

    function __construct($nome, $cor, $patas)
    {
        $this->nome = $nome;
        $this->cor = $cor;
        $this->patas = $patas;
    }

    public function exibirAnimal() {

      echo "O nome do cachorro é $this->nome, ele tem a cor $this->cor e tem $this->patas patas <br>";

    }

  }

  $frank = new Cachorro("Frank", "Branco e marrom", 4);

  $frank->exibirAnimal();

  $nome = "Laica";
  $cor = "Marrom";
  $patas = 4;

  $laica = new Cachorro($nome, $cor, $patas);

  $laica->exibirAnimal();

?>