<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 01</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <h3>Exercício 01 - Faça um programa que tenha um vetor de 5 números inteiros e mostre-os.</h3>

  <?php

  $vetor = array(1, 2, 3, 4, 5);

  echo "Números do vetor: <br>";
  foreach ($vetor as $numero) {
    echo $numero . "<br>";
  }



  ?>
  
</body>
</html>