<?php
if(isset($_POST['num1']) && isset($_POST['num2'])){
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $result = $num1 + $num2;
  echo "Le résultat de l'addition est: " . $result;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
  <label for="num1">Entrez le premier nombre:</label>
  <input type="text" name="num1" id="num1">

  <label for="num2">Entrez le second nombre:</label>
  <input type="text" name="num2" id="num2">

  <input type="submit" value="Soumettre">
</form>
</body>
</html>