<?php

  function parOuImpar($x) {

    $resultado = $x % 2 === 0;
    if ($resultado) {
      echo "$x é par";

    } else {
      echo "$x não é par";
    }
  }

  parOuImpar(11);

?>