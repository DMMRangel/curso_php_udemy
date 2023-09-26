<?php

  // caracteres de escape, em php, precisam responder ao php
  // por isso, chama-se a função header() neste exemplo
  header("Content-type: text/plain");

  // pular linha
  echo "Isso aqui vai ficar na primeira linha \nE isso na segunda linha \n\n";

  // Tab
  echo "Testando o tab \t aqui \n";

  // Barra invertida
  echo "Barra invertida \\ \n";

  // Dólar
  echo "Imprimindo o dólar \$teste";