<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 04</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <h3>Exercício 04 - Faça um programa que tenha um vetor de 10 caracteres, e diga quantas consoantes foram lidas. Imprima as consoantes. </h3>

  <form action="" method="GET">
    <label for="">Digite a primeira letra: </label>
    <input type="text" name="letra1"><br>
    <label for="">Digite a segunda letra: </label>
    <input type="text" name="letra2"><br>
    <label for="">Digite a terceira letra: </label>
    <input type="text" name="letra3"><br>
    <label for="">Digite a qaurta letra: </label>
    <input type="text" name="letra4"><br>
    <label for="">Digite a quinta letra: </label>
    <input type="text" name="letra5"><br>
    <label for="">Digite a sexta letra: </label>
    <input type="text" name="letra6"><br>
    <label for="">Digite a sétima letra: </label>
    <input type="text" name="letra7"><br>
    <label for="">Digite a oitava letra: </label>
    <input type="text" name="letra8"><br>
    <label for="">Digite a nona letra: </label>
    <input type="text" name="letra9"><br>
    <label for="">Digite a décima letra: </label>
    <input type="text" name="letra10"><br>
    <button type="submit">Enviar</button><br><br>
  </form>

  <?php

  //$vetor = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j');
  $vetor = array(
    $letra1 = $_GET['letra1'],
    $letra2 = $_GET['letra2'],
    $letra3 = $_GET['letra3'],
    $letra4 = $_GET['letra4'],
    $letra5 = $_GET['letra5'],
    $letra6 = $_GET['letra6'],
    $letra7 = $_GET['letra7'],
    $letra8 = $_GET['letra8'],
    $letra9 = $_GET['letra9'],
    $letra10 = $_GET['letra10']
  );
  $soma = 0;

  for($i = 0; $i < count($vetor); $i++){
    if ($vetor[$i] != 'a' && $vetor[$i] != 'e' && $vetor[$i] != 'i' && $vetor[$i] != 'o' && $vetor[$i] != 'u'){
      $soma++;
      echo $vetor[$i] . "<br>";
    }
  }

  echo "<br>Foram lidas $soma consoantes.";



  ?>
  
</body>
</html>