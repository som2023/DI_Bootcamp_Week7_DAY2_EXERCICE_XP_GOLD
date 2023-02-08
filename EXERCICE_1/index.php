<?php
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($name)) {
      echo "Le nom est requis <br>";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "L'email est invalide <br>";
    }

    if (strlen($password) < 8) {
      echo "Le mot de passe doit comporter au moins 8 caractères <br>";
    }

    if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($password) >= 8) {
      echo "Formulaire soumis avec succès";
    }
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
<form action="" method="post">
  <label for="name">Nom :</label>
  <input type="text" id="name" name="name" required>
  <br><br>
  <label for="email">Email :</label>
  <input type="email" id="email" name="email" required>
  <br><br>
  <label for="password">Mot de passe :</label>
  <input type="password" id="password" name="password" required>
  <br><br>
  <input type="submit" name="submit" value="Soumettre">
</form>
</body>
</html>