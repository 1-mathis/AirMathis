<?php
include("../src/includes/header_form.php");
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
  <title>Page de Formulaire</title>
</head>

<body>
  <main>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">adresse mail</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text text-primary">Cette information restera privée. Seul vous la connaîtrez.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
        <div id="password" class="form-text text-primary">Cette information restera privée. Seul vous la connaîtrez.</div>

      </div>
      <div class="mb-3">
        <label for="exampleInputName1" class="form-label">prénom</label>
        <input type="text" class="form-control" id="exampleInputPassword1">
        <div id="name" class="form-text text-primary">Cette information restera privée. Seul vous la connaîtrez.</div>

      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">nom</label>
        <input type="text" class="form-control" id="exampleInputPassword1">
        <div id="surname" class="form-text text-primary">Cette information restera privée. Seul vous la connaîtrez.</div>
      </div>

      </div>
      <button type="submit" class="btn btn-primary" id="btnSend">Envoyer</button>
    </form>

  </main>
</body>

<style>
  main {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    margin-top: 30px;

    margin: 70px 500px;
  }
</style>
<footer>
  <?php
  include("../src/includes/footer.php");
  ?>
</footer>

</html>