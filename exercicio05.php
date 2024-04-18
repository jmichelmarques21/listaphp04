<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 05</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <h3>Exercício 05 - Faça um programa que tenha 20 números inteiros em um vetor. Armazene os números pares no vetor PAR e os números 
    ímpares no vetor ÍMPAR. No final imprima os três vetores.</h3>

  <?php

  $vetor = [];
  $par = [];
  $impar = [];

  for($i = 0; $i < 20; $i++){
    $vetor[$i] = $i;
  }

  for($i = 0; $i < 20; $i++){
    if ($vetor[$i] % 2 == 0) {
      $par[] = $vetor[$i];
    } else {
      $impar[] = $vetor[$i];
    }
  }

  echo "Vetor normal: <br>";
  for($i = 0; $i < 20; $i++){
    echo $vetor[$i] . "<br>";
  }

  echo "<br>Vetor de números pares: <br>";
  for($i = 0; $i < count($par); $i++){
    echo $par[$i] . "<br>";
  }

  echo "<br>Vetor de números ímpares: <br>";
  for($i = 0; $i < count($impar); $i++){
    echo $impar[$i] . "<br>";
  }


  ?>
  
</body>
</html>