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
  <title>Page de l'utilisateur</title>
</head>

<body>
  <main>

    <div class="bloc">

      <div class="infos">
        <div class="name-surname">
          <h2>Prénom Nom</h2>
        </div>

        <div class="texts-infos">
          <div class="phone">
            <div class="logo-phone">
              <img src="/src/img/appel-telephonique.png" alt="phone">
            </div>
            <p>numéro de téléphone</p>
          </div>

          <div class="mail">
            <div class="logo-mail">
              <img src="/src/img/enveloppe.png" alt="enveloppe">
            </div>
            <p>adresse mail</p>
          </div>

          <div class="password">
            <div class="logo-oeil">
              <img src="/src/img/oeil.png" alt="oeil" id="icon">
            </div>
            <p>voir mon mot de passe</p>
          </div>
        </div>

        <input type="button" value="modifier mes informations" id="editInfos" onclick="">

      </div>

    </div>

    <div class="buttonDanger">
      <button type="button" class="btn btn-danger" id="logout">Se déconnecter</button>
      <button type="button" class="btn btn-danger">Supprimer mon compte</button>
    </div>
  </main>

  <style>
    /* body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;

      margin: 20px;
      margin-top: 100px;
    } */

    #btnSend {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
    }

    .bloc {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;

      background-color: #051039;
      padding: 50px;
      color: white;
      height: auto;
      width: 500px;
      border-radius: 15px;

      margin: 70px 700px 20px 700px;
      width: auto;
    }

    .phone,
    .mail,
    .password {
      display: flex;
      flex-direction: row;
      justify-content: start;
      align-items: center;
    }

    .texts-infos {
      margin-top: 30px;
    }

    img {
      width: 50px;
      height: 50px;
      margin: 25px;
    }

    #editInfos {
      border: none;
      border-radius: 10px;
      padding: 7px;
      margin-left: 50px;
      margin-top: 50px;
    }

    #editInfos:hover {
      background-color: grey;
      padding: 5px;
      border: 1px black solid;
    }

    .buttonDanger {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    #logout {
      margin-bottom: 20px;

    }

    footer {
      margin-top: 80px;
    }
  </style>

  <script>
    // const icon = document.getElementById("icon")


    // icon.onclick = function() {
    //   if (mySong.paused) {
    //     mySong.play();
    //     icon.src = "/src/img/oeil.png";
    //   } else {
    //     mySong.pause();
    //     icon.src = "/src/img/cacher.png";
    //   }
    // }
  </script>

</body>
<footer>
  <?php
  include("../src/includes/footer.php");
  ?>
</footer>

</html>