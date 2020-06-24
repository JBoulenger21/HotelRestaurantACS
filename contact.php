<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://use.typekit.net/ntb6ydg.css">
    <link rel="stylesheet" href="https://use.typekit.net/ntb6ydg.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
    <div class="contact-parent">
      <header>
        <div class="contact-header">
          <img class="contact-logo" src="img/Logo.png" alt="">
          <a href="#"><img class="contact-home"src="img/Home.png" alt=""></a>
          <div class="contact-navbar">
            <a id="contact-loupe" href="#"><img src="img/Search.png" alt=""></a>
            <a class="contact-colorwhite contact-fontmontserrat contact-bold"href="#">SEARCH</a>
            <a class="contact-colorwhite contact-fontmontserrat contact-bold"href="#">CONTACT</a>
            <a class="contact-colorwhite contact-fontmontserrat contact-bold"href="#">SEJOURS</a>
            <a class="contact-colorwhite contact-fontmontserrat contact-bold"href="#">SERVICES</a>
            <a class="contact-colorwhite contact-fontmontserrat contact-bold"href="#">RESTAURANT</a>
            <a id="contact-ahotel" class="contact-colorwhite contact-fontmontserrat contact-bold"href="#">HÔTEL</a>
          </div>
          <div class="contact-navbarMobile">
            <a href="#home" class="active"></a>
              <div id="myLinks">
                <a class="contact-anavbarmsearch" href="#search">SEARCH</a></br>
                <a class="contact-anavbarmcontact" href="#contact">CONTACT</a></br>
                <a class="contact-anavbarmsejours" href="#sejours">SEJOURS</a></br>
                <a class="contact-anavbarmservices" href="#services">SERVICES</a></br>
                <a class="contact-anavbarmrestaurant" href="#restaurant">RESTAURANT</a></br>
              </div>
              <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
              </a>
              <div class="contact-navinfosmobile" id="contact-infonav">
                <img class="contact-telnav" src="img/tel.png" alt="">
                <span class="contact-numnav">03 84 60 83 03</span>
                <img class="contact-icinav" src="img/ici.png" alt="">
                <span class="contact-lieunav"> Lieu-dit, RN 5, 39150 Fort-du-Plasne</span>
              </div>
          </div>
        </div>
      </header>
      <div class="contact-bdr contact-absolutepos">
        <p class="contact-hbdr contact-txtaligncenter contact-fontmontserrat contact-bold contact-colorwhite">NOUS CONTACTER</p>
        <div class="contact-lineNC contact-absolutepos">
          <img src="img/line.png" alt="">
        </div>
        <div class="contact-box">
            <div class="contact-elementsBdr contact-darriver">
              <p class="contact-colorblue contact-fontmontserrat contact-bold">DATE D'ARRIVER</p>
              <form action="" method="">
                <input type="date" name="" value="">
              </form>
            </div>
            <div class="contact-elementsBdr contact-ddepart">
              <p class="contact-colorblue contact-fontmontserrat contact-bold">DATE DE DEPART</p>
              <form action="index.html" method="post">
                <input type="date" name="" value="">
              </form>
            </div>
            <div class="contact-elementsBdr contact-adulte">
              <p class="contact-colorblue contact-fontmontserrat contact-bold">ADULTE(S)</p>
              <form action="index.html" method="post">
                <select name="lsadulte">
                  <option>1 adulte</option>
                  <option>2 adultes</option>
                  <option>3 adultes</option>
                </select>
              </form>
            </div>
            <div class="contact-elementsBdr contact-enfant">
              <p class="contact-colorblue contact-fontmontserrat contact-bold">ENFANT(S)</p>
              <form action="index.html" method="post">
                <select name="lsadulte">
                  <option>1 enfant</option>
                  <option>2 enfants</option>
                  <option>3 enfants</option>
                </select>
              </form>
            </div>
        </div>
        <div class="contact-button">
          <form>
            <input class="contact-colorwhite" type="button" name="" value="RESERVER">
          </form>

        </div>
      </div>
      <div class="contact-contact">
        <h2 class="contact-fontmontserrat contact-colorblue contact-bold" id="contact-h2c">CONTACT</h2>
        <div class="contact-txtContact contact-shadow">
          <p class="contact-fontopensans contact-colorgrey">Tout proche de <span class="contact-bold">Champagnole</span> et de <span class="contact-bold">Saint Claude</span>, séjournez à <span class="contact-bold">l’hôtel restaurant des Truites Bleues dans le Jura.</span> Idéal pour un séjour en famille, découvrez ce lieu magique en bord de cascade, proche de la région des lacs du Jura.</br>
          </br>Pour avoir des renseignements sur nos chambres d’hôtel, connaître la carte du restaurant ou demander nos </br></br>possibilités de réservation, <span class="contact-bold">contactez-nous !</span></p>
        </div>
        <div class="contact-map">
          <div class="contact-informations contact-shadow contact-colorgrey contact-absolutepos">
            <h2 class="contact-fontmontserrat contact-colorblue contact-fontweightnormal">INFORMATION</h2>
            <div id="contact-adresse">
              <img src="img/ici.png" alt="">
              <p class="contact-fontopensans"><span class="contact-bold">ADRESSE</span></br>
              LIEU DIT LE SAUT (RN)</br>39150 FORT DU PLASNE</br>GPS : N46° 37’5.948’’ /E 5° 59’19.471’’</p>
            </div>
            <div id="contact-tel">
              <img src="img/tel.png" alt="">
              <p class="contact-fontopensans"><span class="contact-bold">TÉLÉPHONE / FAX</span></br>
              03 84 60 83 03/ 03 84 60 83 91</p>
            </div>
            <div id="contact-mail">
              <img src="img/mail.png" alt="">
              <p class="contact-fontopensans"><span class="contact-bold">EMAIL</span></br>
              HOTEL@TRUITES-BLEUS.COM</p>
            </div> 
          </div>
        </div>
        <div class="contact-txtquestion contact-colorblue contact-bold contact-absolutepos contact-fontmontserrat">
          <p id="contact-questionsDesktop">Si vous</br>avez des</br>questions</br>n'hésitez</br>pas à nous</br>contacter.</p>
          <p id="contact-questionsMobile">Si vous avez des questions n'hésitez pas à nous contacter.</p>
        </div>
        <div class="contact-absolutepos contact-vertLine">
          <img src="img/vertLine.png" alt="">
        </div>
        <div class="contact-absolutepos contact-vertLine2">
          <img src="img/vertLine2.png" alt="">
        </div>
        <div class="contact-form contact-shadow">
          <h2 class="contact-fontmontserrat contact-colorblue contact-fontweightnormal">CONTACTEZ-NOUS</h2>
          <form class="contact-colorred" action="index.html" method="post">
            <label class="contact-fontopensans" for="fname"><span class="contact-colorgrey contact-bold">Votre nom </span>*</label><br>
            <input class="contact-fontopensans contact-colorgrey" type="text" id="fname" name="fname" value="     entrer votre nom"><br>
            <label class="contact-fontopensans" for="lname"><span class="contact-colorgrey contact-bold">Votre prenom </span>*</label><br>
            <input class="contact-fontopensans contact-colorgrey" type="text" id="lname" name="lname" value="     entrer votre prenom"><br>
            <label class="contact-fontopensans" for="fmail"><span class="contact-colorgrey contact-bold">Votre email </span>*</label><br>
            <input class="contact-fontopensans contact-colorgrey" type="text" id="fmail" name="fmail" value="     entrer votre email"><br>
            <label class="contact-fontopensans" for="ftel"><span class="contact-colorgrey contact-bold">Votre téléphone </span>*</label><br>
            <input class="contact-fontopensans contact-colorgrey" type="text" id="ftel" name="ftel" value="     06xxxxxxxx"><br>
            <label class="contact-fontopensans" for="sujet"><span class="contact-colorgrey contact-bold">Sujet </span>*</label><br>
            <input class="contact-fontopensans contact-colorgrey" type="text" id="sujet" name="sujet" value="     voter sujet"><br>
            <label class="contact-fontopensans" for="message"><span class="contact-colorgrey contact-bold">Message </span>*</label><br>
            <input class="contact-fontopensans contact-colorgrey" type="text" id="contact-message" name="message" value="     votre sujet"><br>
            <p class="contact-touchampsform contact-txtaligncenter"><span class="red* contact-fontopensans">* </span><span class="contact-colorgrey contact-fontopensans">Tous les champs sont obligatoires.</span></p>
            <input class="contact-fontopensans" id="contact-submite" type="submit" value="ENVOYER">
          </form>
        </div>
      </div><!--FIN contact-->
      <div class="contact-venir contact-txtaligncenter">
        <h2 class="contact-colorblue contact-fontmontserrat contact-fontweightnormal">VENIR A L'HOTEL DE JURA</h2>
        <img class="contact-undervenir contact-absolutepos" src="img/Forme-1.jpg" alt="">
        <img class="contact-venirIcon" src="img/im-train.png" alt="">
        <img class="contact-undertitle contact-absolutepos" src="img/border.jpg" alt="">
        <h3 class="contact-bold contact-fontmontserrat contact-txtaligncenter contact-colorgrey">EN TRAIN</h3>
        <p class="contact-colorgrey contact-fontopensans contact-txtaligncenter">Gare de Lyon à 10 minutes en transports en commun ou en voiture</br>Gare de l'Est à 15 minutes en transports en commun ou en voiture</p>
        <img class="contact-venirIcon" src="img/im-metro.png" alt="">
        <img class="contact-undertitle2 contact-absolutepos" src="img/border.jpg" alt="">
        <h3 class="contact-bold contact-fontmontserrat contact-txtaligncenter contact-colorgrey">EN METRO</h3>
        <p class="contact-colorgrey contact-fontopensans contact-txtaligncenter">Ligne 8 : Station Chemin Vert à 3 min à pied</p>
        <img class="contact-venirIcon" src="img/im-bus.png" alt="">
        <img class="contact-undertitle3 contact-absolutepos" src="img/border.jpg" alt="">
        <h3 class="contact-bold contact-fontmontserrat contact-txtaligncenter contact-colorgrey">EN BUS</h3>
        <p class="contact-colorgrey contact-fontopensans contact-txtaligncenter">Lignes 20 et 65 : Arrêt Saint-Claude à 150 mètres</p>
      </div>
      <footer></footer>
      <script>
        function myFunction() {
          var x = document.getElementById("myLinks");
          var y = document.getElementById("contact-infonav");
          if (x.style.display === "block") {
            x.style.display = "none";
            y.style.display = "block";
          } else {
            x.style.display = "block";
            y.style.display = "none";
          }
        }
</script>
    </body>
  </div>
</html>
