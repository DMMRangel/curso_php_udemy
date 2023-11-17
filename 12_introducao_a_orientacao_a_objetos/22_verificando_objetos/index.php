<?php

  class Humano {

    public function falar() {
      echo "E aê pessoal";
    }

  }

  $daniel = new Humano;

  $teste = 10;

  if (is_object($daniel)) {
    echo "É um obj <br>";
  } else {
    echo "Não é um obj <br>";
  }

  if (is_object($teste)) {
    echo "É um obj <br>";
  } else {
    echo "Não é um obj <br>";
  }

  echo get_class($daniel) . "<br>";

  if (method_exists($daniel, "falar")) {
    echo "Método existe <br>";
  } else {
    echo "Método não existe <br>";
  }

  if (method_exists($daniel, "asd")) {
    echo "Método existe <br>";
  } else {
    echo "Método não existe <br>";
  }

?>