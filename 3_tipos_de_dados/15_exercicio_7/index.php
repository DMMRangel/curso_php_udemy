<?php

  $arrAssocPerson = [
    'nome' => 'Daniel',
    'idade' => 37,
    'altura' => 1.68,
    'peso' => 73,
    'profissao' => 'Programador',
    'hobby' => 'Jogar e tocar guitarra/violão'
  ];

  print_r($arrAssocPerson);
  echo "<br>";

  if ($arrAssocPerson["idade"] >= 18) {
    echo "$arrAssocPerson[nome] já é maior de idade há 12 anos";
  } else {
    echo "$arrAssocPerson[nome] é de menor";
  }
?>