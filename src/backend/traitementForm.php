<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Vérifier si tous les champs sont remplis
  if (!empty($_POST['exampleInputEmail1']) && !empty($_POST['exampleInputPassword1']) && !empty($_POST['exampleInputName1']) && !empty($_POST['exampleInputSurname1'])) {
    // Redirection vers la page vols.php
    header("Location: vols.php");
    exit;
  } else {
    // Afficher un message d'erreur si tous les champs ne sont pas remplis
    echo "Veuillez remplir tous les champs.";
  }
}
