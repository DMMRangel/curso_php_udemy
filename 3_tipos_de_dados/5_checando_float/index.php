<?php 

  $a = "teste";
  $b = 12.8;
  $c = 12;

  if (is_float($a)) {
    echo "É float 1! <br>";
  }

  if (is_float($b)) {
    echo "É float 2! <br>";
  }

  if (is_float($c)) {
    echo "É float aaa! <br>";
  } else {
    echo "$c não é float <br>";
  }

  if (is_float(6565.63)) {
    echo "É float 3! <br>";
  }

  if (is_float("Teste")) {
    echo "É float 4! <br>";
  }

?>