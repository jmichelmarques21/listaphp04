<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 03</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <h3>Exercício 03 - Faça um programa que receba 4 notas, mostre as notas e a média na tela. </h3>


  <form action="" method="GET">
    <label for="">Informe a primeira nota: </label><br>
    <input type="text" name="nota1"><br>
    <label for="">Informe a segunda nota: </label><br>
    <input type="text" name="nota2"><br>
    <label for="">Informe a terceira nota: </label><br>
    <input type="text" name="nota3"><br>
    <label for="">Informe a quarta nota: </label><br>
    <input type="text" name="nota4"><br>
    <input type="submit"><br><br>
  </form>

  <?php

  // $nota1 = $_GET['nota1'];
  // $nota2 = $_GET['nota1'];
  // $nota3 = $_GET['nota1'];
  // $nota4 = $_GET['nota1'];

  $vetor = array($nota1 = $_GET['nota1'], $nota2 = $_GET['nota2'], $nota3 = $_GET['nota3'], $nota4 = $_GET['nota4']);
  
  for($i = 0; $i < count($vetor); $i++){
    echo "Nota " . $i + 1 . ": " . number_format($vetor[$i],2) . "<br>";
  }

  echo "<br>Média: ";
  $media = 0;
  for($i = 0; $i < count($vetor); $i++){
    $media += $vetor[$i];
  }

  $media = $media / count( $vetor );
  echo number_format($media, 2);
  ?>
  
</body>
</html>