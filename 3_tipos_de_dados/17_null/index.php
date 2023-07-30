<?php

  echo NULL;

  $nome = NULL;

  if (is_null($nome)) {
    echo "Nome não cadastrado";
  }

  echo "<br>";

  $nome = "Daniel";

  if (is_null($nome)) {
    echo "Nome não cadastrado";
  } else {
    echo "$nome";
  }
?>