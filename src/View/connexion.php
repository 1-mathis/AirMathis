<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="style.css" />
  <script type="module" src="" defer></script>
  <title>Page de connexion</title>
</head>

<body>
  <header></header>
  <main>

    <style>
      body {
        font-family: Arial, sans-serif;
      }

      form {
        width: 300px;
        margin: 0 auto;
      }

      label {
        display: block;
        margin-top: 20px;
      }

      input[type="email"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        font-size: 16px;
      }

      input[type="submit"] {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        background-color: #333;
        color: #fff;
        border: none;
        margin-top: 20px;
      }
    </style>

    <body>
      <form action="connexion.php" method="post">
        <label for="email">Adresse e-mail :</label>
        <input type="email" name="email" required>
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required>
        <input type="submit" value="Se connecter">
      </form>

  </main>
  <footer></footer>
</body>

</html>