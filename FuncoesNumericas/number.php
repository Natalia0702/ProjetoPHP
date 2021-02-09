<?php
$_salario = 2500;
$_meses = 5;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funções Numéricas</title>
</head>

<body>
  <?php
  //Multiplicação e divisão
  echo $_salario * $_meses . "<br>";
  echo $_salario / 2 . "<br>";
  //Exponencial
  echo "exponencial:" . pow(6, 2) . "<br>";
  //Raiz Quadrada
  echo "Raiz quadrada" . sqrt(36) . "<br>";
  //Randômico Genérica
  echo "Números genéricos" . rand() . "<br>";
  //Randômico entre um intervalo
  echo "Randomico intervalo" . rand(5, 10) . "<br>";
  //Valor Absoluto
  echo "Número absoluto" . abs(-100) . "<br>";

  ////-------------Testar se o tipo de variável----------------------///////////////////

  //Testar se é numérica
  echo "O $_salario é um número? " . is_numeric($_salario) . "<br>";

  //Testar se é inteiro
  echo "O $_salario é um número inteiro?" . is_int($_salario) . "<br>";

  //Testar se é um float
  echo "O $_salario é um número inteiro?" . is_float($_salario) . "<br>";

  ////-------------Arredondar variáveis----------------------///////////////////
  $_gasolina = 2.45;
  $_leite = 3.89;
  //arredondar para media
  echo round($_gasolina) . "<br>";
  echo round($_leite) . "<br>";
  //arredondar para cima
  echo ceil($_gasolina) . "<br>";
  echo ceil($_leite) . "<br>";
  //arredondar para baixo
  echo floor($_gasolina) . "<br>";
  echo floor($_leite) . "<br>";
  ?>


</body>

</html>