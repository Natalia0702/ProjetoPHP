<?php
$_nome = "Hoje ierei programar em PHP";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Fundamental</title>
</head>

<body>
  <?php

  //strlen - Retorna a quantidade de letras
  echo strlen($_nome) . '<br>';
  //stripos - Retorna a primeira ocorrência
  echo stripos($_nome, "P") . '<br>';
  //strripos - Retorna última ocorrência 
  echo strripos($_nome, "P") . '<br>';
  //strtolower - Converte para letras minusculas
  echo strtolower($_nome) . '<br>';
  //strtoupper - Converte para letras min.
  echo strtoupper($_nome) . '<br>';
  //SUBSTR_COUNT - Conta quantas vezes a ocorrencia ocorreu
  echo SUBSTR_COUNT($_nome, "a") . '<br>';
  ?>

</body>

</html>