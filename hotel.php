
<div class="container-fluid hotel-accueil">

  <?php
  include('header.php');
  ?>


        <h1 class="hotel-titre hotel-titre-1 text-center">HÔTEL</h1>
          <div class="container">
            <form>
                <div class="form-row hotel-formulaire d-flex justify-content-between">
                    <div class="col-lg-3 hotel-form-bloc hotel-arrivee">
                      <p class="hotel-form">DATE D'ARRIVE</p>
                      <form action="" method="">
                        <input type="date" name="" value="">
                      </form>
                    </div>
                    <div class="col-lg-3 hotel-form-bloc hotel-depart">
                      <p class="hotel-form">DATE DE DEPART</p>
                      <form action="index.html" method="post">
                        <input type="date" name="" value="">
                      </form>
                    </div>
                    <div class="col-lg-3 hotel-form-bloc hotel-adulte">
                      <p class="hotel-form">ADULTE(S)</p>
                      <form action="index.html" method="post">
                        <select name="lsadulte">
                          <option>1 adulte</option>
                          <option>2 adultes</option>
                          <option>3 adultes</option>
                        </select>
                      </form>
                    </div>
                    <div class="col-lg-3 hotel-form-bloc hotel-enfant">
                      <p class="hotel-form">ENFANT(S)</p>
                      <form action="index.html" method="post">
                        <select name="lsadulte">
                          <option>1 enfant</option>
                          <option>2 enfants</option>
                          <option>3 enfants</option>
                        </select>
                      </form>
                    </div>
                </div>
            </form>
            <div class="hotel-button-reserver">
                <button type="button hotel-button-reserver" class="btn"><span class="hotel-text-button-detail">RESERVER</span></button>
            </div>
          </div>
      </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-12">
          <h2 class="hotel-titre">NOTRE HÔTEL</h2>
          <p class="hotel-text text-center">Séjour vacances en famille ou week-end à deux, profitez du cadre exceptionnel de  l’Hôtel restaurant des Truites Bleues dans le Jura. Proche de Champagnole et de Saint Claude, notre hôtel se situe au coeur de la région des lacs du Jura. Placé aux portes du Parc Naturel du Haut Jura, il saura vous offrir tous les ingrédients d’un séjour nature réussi !</p>
        </div>
      </div>
    <h2 class="hotel-titre">NOS <span class="titre-bold">CHAMBRES</span></h2>
    <div class="row mt-5 mb-5">
      <div class="hotel-img-chambre col-lg-6 col-sm-12 p-1">
          <img class="hotel-img-chambre1" src="ressources/hotel-chambre.jpg" alt="Chambre 1"/>
      </div>
      <div class="col-lg-6 col-sm-12 p-5">
          <p class="hotel-text">Nos 17 chambres tout confort aux accents boisées et à la décoration raffinée sont pensées, décorées et équipées de façon chaleureuse et fonctionnelle. Toutes nos chambres sont composées d’une salle de bain privative (bain ou/et douche) et d’une télévision à écran plat . Elles sont spacieuses et offrent une superbe vue, notamment côté Rivière.</p>
      </div>
    </div>
    <div class="container">
    <h2 class="hotel-titre">NOS <span class="titre-bold">PRESTATIONS</span></h2>
    <p class="hotel-text hotel-text-presta text-center">Notre Hotel de Charme 3 étoiles au bord de la Rivière et de sa Cascade est ouvert sur la Nature environnante. Situé aux portes du Parc Naturel du haut Jura, il ravira les randonneurs et amateurs de nature, tout comme les passionnés de sport et de pêche avec de nombreuses activités à proximité ! <br />
      Les horaires d’ouverture du Lundi 14h00 au samedi 21h00. Fermeture le dimanche.<br />
      Toutes nos chambres sont équipées de linge de toilette, sèche cheveux, TV écran plat, accès Wifi, Plateau de courtoisie...<br />
      <br />
      Nous vous informons que notre hôtel ne dispose pas de chambre à mobilité réduite.<br />
      La réception vous accueille en français, anglais, allemand ou espagnol* de 14h00 à 21h00. En cas d’arrivée tardive merci de nous contacter.<br />
      Le bar est ouvert de 8h00 à 21h00. Le restaurant est ouvert tous les jours sauf le dimanche soir et lundi midi hors saison.<br />
      Les repas sont servis de 12h00 à 13h30 et de 19h00 à 21h00.</p>
      <div class="hotel-button-details">
      <button type="button" class="btn"><span class="hotel-text-button-detail">DETAILS</span></button>
    </div>
    </div>
    <h2 class="hotel-titre">NOS <span class="titre-bold">TARIFS</span></h2>
    <!--Caroussel desktop-->
    <div class="hotel-carousel-desktop">
    <section id="carousel" class="carousel slide thumbnail col-xs-12 col-sm-12 col-md-12 col-lg-12" data-ride="carousel">
          <div class="carousel-inner">
            <!--Première slide, trois images alignées-->
            <div class="carousel-item active p-0">
              <!--Lien de la chambre-->
              <a class="hotel-lien-carousel-1" href="#">
              <!--Image de la chambre-->
              <img src="ressources/chambre1.jpg" class="hotel-img-carousel hotel-img-carousel-1 col-xs-offset-1 col-xs-2 col-lg-4 p-2" alt="image chambres hotel">
              <!--Image de la chambre-->
              <span class="hotel-overlay">
              <p class="hotel-text-hover-1">
                <!--Texte de l'image-->
              <span class="hotel-text-hover-titre">CHAMBRE FAMILIALE</span>
              <span class="hotel-text-hover-corps">Parfait pour les familles, pouvant vous accueillir jusqu’à 5 personnes.
              Côté parc ou route ou cascade,
               lit double ou twin et canapé lit .
              Salle de bain privative avec bain.</span>
              <span class="hotel-text-hover-apartir">à partir de</span>
              <span class="hotel-text-hover-prix">104.00</span>
              <span class="hotel-text-hover-unite">€</span>
              </p>
              </span>
              </a>
              <!--Lien de la chambre-->
              <a class="hotel-lien-carousel-1" href="#">
              <!--Image de la chambre-->
              <img src="ressources/chambre2.jfif" class="hotel-img-carousel hotel-img-carousel-1 col-xs-offset-1 col-xs-2 col-lg-4 p-2" alt="image chambres hotel">
              <!--Image de la chambre-->
              <span class="hotel-overlay">
              <p class="hotel-text-hover-1">
                <!--Texte de l'image-->
              <span class="hotel-text-hover-titre">CHAMBRE FAMILIALE</span>
              <span class="hotel-text-hover-corps">Parfait pour les familles, pouvant vous accueillir jusqu’à 5 personnes.
              Côté parc ou route ou cascade,
               lit double ou twin et canapé lit .
              Salle de bain privative avec bain.</span>
              <span class="hotel-text-hover-apartir">à partir de</span>
              <span class="hotel-text-hover-prix">104.00</span>
              <span class="hotel-text-hover-unite">€</span>
              </p>
              </span>
              </a>
              <!--Lien de la chambre-->
              <a class="hotel-lien-carousel-1" href="#">
              <!--Image de la chambre-->
              <img src="ressources/chambre3.jfif" class="hotel-img-carousel hotel-img-carousel-1 col-xs-offset-1 col-xs-2 col-lg-4 p-2" alt="image chambres hotel">
              <!--Image de la chambre-->
              <span class="hotel-overlay">
              <p class="hotel-text-hover-1">
                <!--Texte de l'image-->
              <span class="hotel-text-hover-titre">CHAMBRE FAMILIALE</span>
              <span class="hotel-text-hover-corps">Parfait pour les familles, pouvant vous accueillir jusqu’à 5 personnes.
              Côté parc ou route ou cascade,
               lit double ou twin et canapé lit .
              Salle de bain privative avec bain.</span>
              <span class="hotel-text-hover-apartir">à partir de</span>
              <span class="hotel-text-hover-prix">104.00</span>
              <span class="hotel-text-hover-unite">€</span>
              </p>
              </span>
              </a>
            </div>
            <!--Deuxième slide, trois images alignées-->
            <div class="carousel-item active p-0">
              <!--Lien de la chambre-->
              <a class="hotel-lien-carousel-1" href="#">
              <!--Image de la chambre-->
              <img src="ressources/chambre1.jpg" class="hotel-img-carousel hotel-img-carousel-1 col-xs-offset-1 col-xs-2 col-lg-4 p-2" alt="image chambres hotel">
              <!--Image de la chambre-->
              <span class="hotel-overlay">
              <p class="hotel-text-hover-1">
                <!--Texte de l'image-->
              <span class="hotel-text-hover-titre">CHAMBRE FAMILIALE</span>
              <span class="hotel-text-hover-corps">Parfait pour les familles, pouvant vous accueillir jusqu’à 5 personnes.
              Côté parc ou route ou cascade,
               lit double ou twin et canapé lit .
              Salle de bain privative avec bain.</span>
              <span class="hotel-text-hover-apartir">à partir de</span>
              <span class="hotel-text-hover-prix">104.00</span>
              <span class="hotel-text-hover-unite">€</span>
              </p>
              </span>
              </a>
              <!--Lien de la chambre-->
              <a class="hotel-lien-carousel-1" href="#">
              <!--Image de la chambre-->
              <img src="ressources/chambre2.jfif" class="hotel-img-carousel hotel-img-carousel-1 col-xs-offset-1 col-xs-2 col-lg-4 p-2" alt="image chambres hotel">
              <!--Image de la chambre-->
              <span class="hotel-overlay">
              <p class="hotel-text-hover-1">
                <!--Texte de l'image-->
              <span class="hotel-text-hover-titre">CHAMBRE FAMILIALE</span>
              <span class="hotel-text-hover-corps">Parfait pour les familles, pouvant vous accueillir jusqu’à 5 personnes.
              Côté parc ou route ou cascade,
               lit double ou twin et canapé lit .
              Salle de bain privative avec bain.</span>
              <span class="hotel-text-hover-apartir">à partir de</span>
              <span class="hotel-text-hover-prix">104.00</span>
              <span class="hotel-text-hover-unite">€</span>
              </p>
              </span>
              </a>
              <!--Lien de la chambre-->
              <a class="hotel-lien-carousel-1" href="#">
              <!--Image de la chambre-->
              <img src="ressources/chambre3.jfif" class="hotel-img-carousel hotel-img-carousel-1 col-xs-offset-1 col-xs-2 col-lg-4 p-2" alt="image chambres hotel">
              <!--Image de la chambre-->
              <span class="hotel-overlay">
              <p class="hotel-text-hover-1">
                <!--Texte de l'image-->
              <span class="hotel-text-hover-titre">CHAMBRE FAMILIALE</span>
              <span class="hotel-text-hover-corps">Parfait pour les familles, pouvant vous accueillir jusqu’à 5 personnes.
              Côté parc ou route ou cascade,
               lit double ou twin et canapé lit .
              Salle de bain privative avec bain.</span>
              <span class="hotel-text-hover-apartir">à partir de</span>
              <span class="hotel-text-hover-prix">104.00</span>
              <span class="hotel-text-hover-unite">€</span>
              </p>
              </span>
              </a>
            </div>
          </div>
          <a class="left carousel-control-prev hotel-carousel-control-prev" href="#carousel" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left"><img class="hotel-chevron-gauche" src="ressources/hotel-chevron-gauche.png" alt="chevron gauche"></span>
          </a>
          <a class="right carousel-control-next hotel-carousel-control-next" href="#carousel" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right"><img class="hotel-chevron-droite" src="ressources/hotel-chevron-droite.png" alt="chevron droite"></span>
          </a>
        </section>
      </div>
      <div class="hotel-carousel-mobile">
        <section id="carousel" class="carousel slide thumbnail col-xs-12 col-sm-12 col-md-12 col-lg-12" data-ride="carousel">
          <ul class="carousel-indicators hotel-carousel-ind">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
          <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="#"><img src="ressources/chambre1.jpg" class="hotel-img-carousel col-xs-offset-1 col-xs-2 col-lg-4 p-2"></a>
                <span class="hotel-text-hover-apartir">à partir de</span>
                <span class="hotel-text-hover-prix">104.00</span>
                <span class="hotel-text-hover-unite">€</span>
            </div>
            <div class="carousel-item">
              <a href="#"><img src="ressources/chambre2.jfif" class="hotel-img-carousel col-xs-2 col-lg-4 p-2"></a>
              <span class="hotel-text-hover-apartir">à partir de</span>
              <span class="hotel-text-hover-prix">104.00</span>
              <span class="hotel-text-hover-unite">€</span>
            </div>
            <div class="carousel-item">
              <a href="#"><img src="ressources/chambre3.jfif" class="hotel-img-carousel col-xs-2 col-lg-4 p-2"></a>
              <span class="hotel-text-hover-apartir">à partir de</span>
              <span class="hotel-text-hover-prix">104.00</span>
              <span class="hotel-text-hover-unite">€</span>
            </div>
          </div>
        </section>
      </div>
    <p class="hotel-text hotel-text-offre">Découvez notre offre de séjours Tout Compris !</p>
    <div class="hotel-button-details">
    <button type="button" class="btn"><span class="hotel-text-button-detail">TARIFS</span></button>
  </div>
    </div>
    </div>
    <?php
    include('footer.php');
    ?>
