<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 02</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <h3>Exercício 02 - Faça um programa que tenha um vetor de 10 números reais e mostre-os na ordem inversa.</h3>

  <?php

  $vetor = array(0,1,2,3,4,5,6,7,8,9);

  echo "Números do vetor na ordem normal: <br>";
  foreach ($vetor as $numero) {
    echo "$numero <br>";
  }

  echo "<br>Números do vetor na ordem inversa: <br>";
  $vetorInvertido = array_reverse($vetor);
  foreach ($vetorInvertido as $numero) {
    echo "$numero <br>";
  }



  ?>
  
</body>
</html>