<?php
include("../src/includes/header_site.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="style.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <script type="module" src="" defer></script>
  <title>Page du panier</title>
</head>

<body>
  <main>

    <h1>Voici toutes vos réservations :</h1>

    <ul class="list-group">
      <li class="list-group-item">Vol 1
        <input type="button" value="Voir le vol" class="btn btn-info" onclick="location.href='modifVols.php'" id="vol" />

      </li>

      <li class="list-group-item">Vol 2
        <input type="button" value="Voir le vol" class="btn btn-info" onclick="location.href='modifVols.php'" id="vol" />

      </li>

      <li class="list-group-item">Vol 3
        <input type="button" value="Voir le vol" class="btn btn-info" onclick="location.href='modifVols.php'" id="vol" />
      </li>

      <li class="list-group-item">Vol 4
        <input type="button" value="Voir le vol" class="btn btn-info" onclick="location.href='modifVols.php'" id="vol" />

      </li>

      <li class="list-group-item">Vol 5
        <input type="button" value="Voir le vol" class="btn btn-info" onclick="location.href='modifVols.php'" id="vol" />

      </li>

      <li class="list-group-item">Vol 6
        <input type="button" value="Voir le vol" class="btn btn-info" onclick="location.href='modifVols.php'" id="vol" />
      </li>

    </ul>

  </main>
  <footer>
    <?php
    include("../src/includes/footer.php");
    ?>
  </footer>

  <style>
    header {
      margin-bottom: 100px;
    }

    h1 {
      text-align: center;
    }

    .list-group {
      display: flex;
      flex-direction: column;
      justify-content: center;
      margin-top: 40px;
    }

    #vol {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;

      margin: 10px;
      padding: 10px;
    }

    .list-group-item {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 100px;
    }

    main {
      margin: 0px 400px;
    }
  </style>

</body>

</html>