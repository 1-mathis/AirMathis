<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Footer AirMathis</title>
</head>

<body>
  <footer>
    <div class="container-footer">
      <div class="row-footer">

        <div class="footer-col">
          <h4>Services client</h4>
          <ul>
            <li><a href="#">Nous contacter</a></li>
            <li><a href="#">Remboursement</a></li>
            <li><a href="#">Réclamation</a></li>
            <li><a href="#">Demander une facture</a></li>
            <li><a href="#">Passage en situation de handicap</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Tout sur l'achat en ligne</h4>
          <ul>
            <li><a href="#">Frais d'émission - Frais de services</a></li>
            <li><a href="#">Moyens de paiements</a></li>
            <li><a href="#">AirMathis Shopping</a></li>
            <li><a href="#">Cartes AirMathis - AMERICAN EXPRESS</a></li>
            <li><a href="#">Pourquoi réserver son billet sur le site officiel de AirMathis</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>A propos de AirMathis</h4>
          <ul>
            <li><a href="#">Flying Blu</a></li>
            <li><a href="#">Transavia</a></li>
            <li><a href="#">KLM</a></li>
            <li><a href="#">SkyTeam</a></li>
            <li><a href="#">AirMathis Corporate</a></li>
            <li><a href="#">Tous les sites AirMathis.com</a></li>
            <li><a href="#">Destination - Voyages</a></li>
            <li><a href="#">Affiliation</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Prendre notre newsletter</h4>
          <div class="form-sub">
            <form>
              <input type="email" placeholder="écrire ici votre adresse mail" required>
              <button id="buttonSend">s'inscrire →</button>
            </form>
          </div>

          <div class="medias-socias">
            <a href="#"> <i class="fa fa-facebook"></i> </a>
            <a href="#"> <i class="fa fa-instagram"></i> </a>
            <a href="#"> <i class="fa fa-twitter"></i> </a>
            <a href="#"> <i class="fa fa-linkedin"></i> </a>
          </div>

        </div>

      </div>
    </div>
  </footer>
</body>

</html>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }

  footer {
    background-color: #415aca;
    padding: 50px 0;
  }

  .container-footer {
    max-width: 1400px;
    padding: 0 4%;
    margin: auto;
  }

  .row-footer {
    display: flex;
    flex-wrap: wrap;
  }

  .footer-col {
    width: 25%;
    padding: 0 15px;
  }

  .footer-col h4 {
    font-size: 22px;
    color: white;
    margin-bottom: 20px;
    font-weight: 500;
    position: relative;
    text-transform: uppercase;
  }

  .footer-col ul {
    list-style: none;
  }

  .footer-col ul li {
    margin: 10px 0;
  }

  .footer-col ul li a {
    font-size: 16px;
    text-transform: capitalize;
    color: white;
    text-decoration: none;
    font-weight: 300;
    display: block;
    transition: all 0.3s ease;
  }

  .footer-col ul li a:hover {
    color: #cecdcd;
    padding-left: 10px;
  }

  .footer-col .medias-socias {
    margin-top: 30px;
  }

  .footer-col .medias-socias a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    height: 40px;
    width: 40px;
    margin: 0 10px 10px 0;
    text-decoration: none;
    border-radius: 50%;
    color: white;
    border: 1px solid white;
    transition: all 0.5s ease;
  }

  .footer-col .medias-socias a i {
    font-size: 20px;
  }

  .footer-col .medias-socias a:hover {
    color: #415aca;
    background-color: white;
  }

  .footer-col .form-sub input {
    width: 100%;
    padding: 10px;
    font-size: 15px;
    outline: none;
    border: 1px solid white;
    color: white;
    background-color: #415aca;
  }

  .footer-col .form-sub input::placeholder {
    color: white;
  }

  .footer-col .form-sub button {
    width: 100%;
    margin-top: 10px;
    padding: 10px;
    font-size: 17px;
    outline: none;
    border: none;
    cursor: pointer;
    color: #415aca;
    border-radius: 3px;
    font-weight: bold;
    background-color: white;
  }

  /* Responsivo */
  @media (max-width: 800px) {
    .footer-col {
      width: 50%;
      margin-bottom: 30px;
    }
  }

  @media (max-width:600px) {
    .footer-col {
      width: 100%;
    }
  }
</style>