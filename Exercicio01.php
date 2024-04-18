<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 01</title>
</head>
<body>
  <a href="index.php">Voltar</a>
  <p><h3>Exercício 01 - Faça um programa, com uma função que necessite de três argumentos, e que forneça a soma desses três argumentos: </h3></p>


  <form action="" method="GET">
    <label for="">Informe o primeiro número: </label><br>
    <input type="text" name="num1"><br>
    <label for="">Informe o segundo número: </label><br>
    <input type="text" name="num2"><br>
    <label for="">Informe o terceiro número: </label><br>
    <input type="text" name="num3"><br>
    <button type="submit">Enviar</button><br>
  </form>

  <?php

  $num1 = $_GET['num1']; 
  $num2 = $_GET['num2'];
  $num3 = $_GET['num3'];

  function soma($n1, $n2, $n3){
    $soma = $n1 + $n2 + $n3;
    echo "A soma dos números $n1, $n2 e $n3 é: $soma";
  }

  soma($num1, $num2, $num3);



  ?>
  
</body>
</html>