<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="hotelstyle.css">
    <title>Hôtel</title>
  </head>
  <body>
      <div class="container-fluid hotel-accueil">
        <h1 class="hotel-titre hotel-titre-1 text-center">HÔTEL</h1>
          <div class="container">
            <form>
                <div class="form-row">
                    <div class="col-lg-3">
                      <label for="start">DATE D'ARRIVEE</label>

                      <input type="date" id="start" name="trip-start"
                             value="2020-06-19"
                             min="2020-01-01" max="2099-12-31">
                    </div>
                    <div class="col-lg-3">
                      <label for="start">DATE DE DEPART</label>

                      <input type="date" id="stop" name="trip-start"
                             value="2020-07-19"
                             min="2020-01-01" max="2099-12-31">
                    </div>
                    <div class="col-lg-3">
                      <label for="sel1">ADULTE(S)</label>
                        <select class="form-control" id="sel1">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                      <label for="sel1">ENFANT(S)</label>
                        <select class="form-control" id="sel1">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                    </div>
                </div>
            </form>
          </div>
      </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="hotel-titre">NOTRE HÔTEL</h2>
          <p class="hotel-text text-center">Séjour vacances en famille ou week-end à deux, profitez du cadre exceptionnel de  l’Hôtel restaurant des Truites Bleues dans le Jura. Proche de Champagnole et de Saint Claude, notre hôtel se situe au coeur de la région des lacs du Jura. Placé aux portes du Parc Naturel du Haut Jura, il saura vous offrir tous les ingrédients d’un séjour nature réussi !</p>
        </div>
      </div>
    <h2 class="hotel-titre">NOS <span class="titre-bold">CHAMBRES</span></h2>
    <div class="row mt-5 mb-5">
      <div class="col-lg-6 col-sm-12 p-1">
          <img src="ressources/hotel-chambre.jpg" alt="Chambre 1"/>
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
    <!--Caroussel-->
    <section id="carousel" class="carousel slide thumbnail col-xs-12 col-sm-12 col-md-12 col-lg-12" data-ride="carousel">

          <div class="carousel-inner">
            <div class="carousel-item active p-0">
              <a href="#"><img src="ressources/chambre1.jpg" class="hotel-img-carousel col-xs-offset-1 col-xs-2 col-lg-4 p-2"></a>
              <p class="hotel-text-hover-1">
              <span class="hotel-text-hover-titre">CHAMBRE FAMILIALE</span>
              <span class="hotel-text-hover-corps">Parfait pour les familles, pouvant vous accueillir jusqu’à 5 personnes.
              Côté parc ou route ou cascade,
               lit double ou twin et canapé lit .
              Salle de bain privative avec bain.</span>
              <span class="hotel-text-hover-apartir">à partir de</span>
              <span class="hotel-text-hover-prix">104.00</span>
              <span class="hotel-text-hover-unite">€</span>
              </p>
              <a href="#"><img src="ressources/chambre2.jfif" class="hotel-img-carousel col-xs-2 col-lg-4 p-2"></a>
              <p class="hotel-text-hover-1">
              <span class="hotel-text-hover-titre">CHAMBRE FAMILIALE</span>
              <span class="hotel-text-hover-corps">Parfait pour les familles, pouvant vous accueillir jusqu’à 5 personnes.
              Côté parc ou route ou cascade,
               lit double ou twin et canapé lit .
              Salle de bain privative avec bain.</span>
              <span class="hotel-text-hover-apartir">à partir de</span>
              <span class="hotel-text-hover-prix">104.00</span>
              <span class="hotel-text-hover-unite">€</span>
              </p>
              <a href="#"><img src="ressources/chambre3.jfif" class="hotel-img-carousel col-xs-2 col-lg-4 p-2"></a>
              <p class="hotel-text-hover-1">
              <span class="hotel-text-hover-titre">CHAMBRE FAMILIALE</span>
              <span class="hotel-text-hover-corps">Parfait pour les familles, pouvant vous accueillir jusqu’à 5 personnes.
              Côté parc ou route ou cascade,
               lit double ou twin et canapé lit .
              Salle de bain privative avec bain.</span>
              <span class="hotel-text-hover-apartir">à partir de</span>
              <span class="hotel-text-hover-prix">104.00</span>
              <span class="hotel-text-hover-unite">€</span>
              </p>
            </div>
            <div class="carousel-item p-0">
              <a href="#"><img src="ressources/chambre1.jpg" class="hotel-img-carousel col-xs-offset-1 col-xs-2 col-lg-4 p-2"></a>
              <p class="hotel-text-hover-1">
              <span class="hotel-text-hover-titre">CHAMBRE FAMILIALE</span>
              <span class="hotel-text-hover-corps">Parfait pour les familles, pouvant vous accueillir jusqu’à 5 personnes.
              Côté parc ou route ou cascade,
               lit double ou twin et canapé lit .
              Salle de bain privative avec bain.</span>
              <span class="hotel-text-hover-apartir">à partir de</span>
              <span class="hotel-text-hover-prix">104.00</span>
              <span class="hotel-text-hover-unite">€</span>
              </p>
              <a href="#"><img src="ressources/chambre2.jfif" class="hotel-img-carousel col-xs-2 col-lg-4 p-2"></a>
              <p class="hotel-text-hover-1">
              <span class="hotel-text-hover-titre">CHAMBRE FAMILIALE</span>
              <span class="hotel-text-hover-corps">Parfait pour les familles, pouvant vous accueillir jusqu’à 5 personnes.
              Côté parc ou route ou cascade,
               lit double ou twin et canapé lit .
              Salle de bain privative avec bain.</span>
              <span class="hotel-text-hover-apartir">à partir de</span>
              <span class="hotel-text-hover-prix">104.00</span>
              <span class="hotel-text-hover-unite">€</span>
              </p>
              <a href="#"><img src="ressources/chambre3.jfif" class="hotel-img-carousel col-xs-2 col-lg-4 p-2"></a>
              <p class="hotel-text-hover-1">
              <span class="hotel-text-hover-corps">Parfait pour les familles, pouvant vous accueillir jusqu’à 5 personnes.
              Côté parc ou route ou cascade,
               lit double ou twin et canapé lit .
              Salle de bain privative avec bain.</span>
              <span class="hotel-text-hover-apartir">à partir de</span>
              <span class="hotel-text-hover-prix">104.00</span>
              <span class="hotel-text-hover-unite">€</span>
              </p>
            </div>
            <a class="left carousel-control-prev" href="#carousel" data-slide="prev">
                 <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control-next" href="#carousel" data-slide="next">
                 <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>
        </section>
    <p class="hotel-text">Découvez notre offre de séjours Tout Compris !</p>
    <div class="hotel-button-details">
    <button type="button" class="btn"><span class="hotel-text-button-detail">TARIFS</span></button>
  </div>
    </div>
    </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</html>
