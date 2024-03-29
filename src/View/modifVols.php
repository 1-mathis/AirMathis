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
  <title>Page de modification de vols</title>
</head>

<body>
  <main>

    <h1>Je modifie mon vol et je réserve !</h1>

    <form>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">date :</label>
        <input type="date" class="form-control" id="inputDate" aria-describedby="date">
      </div>
    </form>

    <label for="exampleInputEmail1" class="form-label">type :</label>
    <select class="form-select form-select-lg mb-3" aria-label="Large select example">
      <option disabled>séléctionnz un champs</option>
      <option value="1">aller simple</option>
      <option value="2">retour simple</option>
      <option value="3">aller-retour</option>
    </select>

    <label for="exampleInputEmail1" class="form-label">mode de paiement :</label>
    <select class="form-select form-select-lg mb-3" aria-label="Large select example">
      <option disabled>séléctionnz un champs</option>
      <option value="1">carte</option>
      <option value="2">billet</option>
      <option value="3">en borne</option>
    </select>

    <label for="exampleInputEmail1" class="form-label">Je voyage </label>
    <select class="form-select form-select-lg mb-3" aria-label="Large select example">
      <option disabled>Ville de départ</option>
      <option value="1">Paris</option>
      <option value="2">Grenoble</option>
      <option value="3">Lyon</option>
    </select>

    <select class="form-select form-select-lg mb-3" aria-label="Large select example">
      <option disabled>Ville d'aarivée</option>
      <option value="1">Sans-Fransisco</option>
      <option value="2">Montral</option>
      <option value="3">Beijing</option>
    </select>

    <div class="buttonDanger">
      <button type="submit" class="btn btn-primary">réserver mon vol</button>
      <button type="submit" class="btn btn-danger">supprimer ma réservation</button>
    </div>

  </main>

  <style>
    h1 {
      text-align: center;
      margin-bottom: 70px;
    }

    #btnSend {
      margin-left: 100px;
    }

    .buttonDanger {
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      align-items: center;
      margin-top: 30px;
    }

    main {
      margin: 70px 500px;
    }

    footer {
      margin-top: 80px;
    }
  </style>

</body>
<?php
include("../src/includes/footer.php");
?>
</footer>

</html>