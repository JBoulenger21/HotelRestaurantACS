<?php
include('header.php');
?>

<body id="page-accueil">
  <!-- SECTION A PROPOS -->
<header>
  <?php
  include('navbar.php');
  ?>
  <section id="resa">
<br><h1>AUX TRUITES BLEUES</h1>
<div id="resa2"><span>________________</span>  Hôtel - Restaurant dans le jura <span>________________</span></div>
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
</section>
</header>


  <section id="bienvenue">
    <div id="container-bienvenue">
      <h3>Bienvenue aux truites bleues</h3>
      <div class="underline"></div>
      <img src="propos.jpg" alt="hotel jura" id="img_desk">
      <img src="propos_mob.jpg" alt="hotel jura" id="img_mob">
      <div id="tx-propos">
        <h2>à <span>propos</span></h2>
        <p>Aux portes du Parc Naturel du Haut Jura idéalement<br>situé entre Champagnole et Saint Laurent en<br>Grandvaux non loin de la <em>station des Rousses,<br>notre établissement Aux Truites Bleues vous<br>accueille tout au long de l’année et saura vous<br>faire découvrir les trésors de la Nature Jurassienne.</em></p>
        <a href="#"><button>en savoir plus</button></a>
      </div>
    </div>
  </section>
  <div class="underline" id="extra_under"></div>

  <!-- SECTION PRESTATIONS -->

  <section id="prestations">

    <div id="hotel">
      <img src="hotel.jpg" alt="réception" class="presta-img">
      <div id="tx-hotel">
        <h3>Notre hôtel</h3>
        <div class="underline"></div>
        <p class="presta-p">Notre Hôtel de charme dans le jura vous accueille pour vos séjours vacances :<br>Chambres doubles, suite parentales, petits déjeuners, service de restauration…<br>Situé dans le cadre somptueux de la région dtes lacs du Jura, entouré de verdure et<br>au bord d’une rivière, notre hôtel placé aux portes du Parc Naturel du Haut Jura<br>saura vous offrir tous les ingrédients d’un séjour nature réussi, qu’il soit en famille,<br>entre amis ou même à deux !</p>
        <a href="hotel.php"><button class="presta-btn">Découvrir</button></a>
      </div>
    </div>

    <div id="resto">
      <img src="resto.jpg" alt="restaurant" id="resto_mob">
      <div id="tx-resto">
        <h3>Notre restaurant</h3>
        <div class="underline"></div>
        <p class="presta-p">Au restaurant des Truites Bleues, les plaisirs de la table <br>sont à la fois spectacle et gourmandise ! <br>Dans notre restaurant,vin jaune, vin d’Arbois et autres délices du pays <br>sont les vedettes d’une cuisine de caractère. <br>Découvrez la gastronomie et les produits typiques de la région du Jura !</p>
        <a href="#"><button class="presta-btn">Découvrir</button></a>
      </div>
      <img src="resto.jpg" alt="restaurant" id="resto_desk">
    </div>

    <div id="services">
      <img src="services.jpg" alt="réception" class="presta-img">
      <div id="tx-services">
        <h3>Nos services</h3>
        <div class="underline"></div>
        <p class="presta-p">Nous sommes là pour vous ! <br>Notre équipe vous propose ses services pour vos grandes occasions : <br>anniversaire, mariage, communion, déjeuner d’entreprise.<br><br>C’est avec un réel plaisir que notre équipe <br>vous accompagnera dans votre projet suivant vos envies et votre budget.</p>
        <a href="services.php"><button class="presta-btn">Découvrir</button></a>
      </div>
    </div>

    <div id="sejours">
      <img src="sejours.jpg" alt="lac" id="sejours_mob">
      <div id="tx-sejours">
        <h3>Nos séjours</h3>
        <div class="underline"></div>
        <p class="presta-p">Venez vous ressourcer dans le Haut Jura et partez à <br>la découverte des trésors de la nature en toute simplicité. <br><br>Des séjours conçus selon vos envie, vos attentes et votre budget. <br>Une escapade d’une nuit ou plus à vous de choisir ! <br>Notre Hôtel*** authentique vous accueille tout <br>au long de l’année et au fil des saisons. <br>Une multitude d’activités s’offrent à vous …</p>
        <a href="#"><button class="presta-btn">Découvrir</button></a>
      </div>
      <img src="sejours.jpg" alt="lac" id="sejours_desk">
    </div>

  </section>

  <!-- SECTION ACTU -->

  <section id="actu">
    <h2>Nos <span>actualités</span></h2>
    <div class="underline"></div>
    <div id="row-actu">

      <div id="actu1">
        <img src="actu1.jpg" alt="buffet">
        <div class="actu-head">
          <div class="date">
            <p class="day">20</p><p class="month">décembre</p>
          </div>
          <h4>Fêtes de fin d'année ?<br>Partagez un bon repas !</h4>
        </div>
        <p class="com"><img src="com_icon.png" alt="icone commentaire"> 5 commentaires</p>
        <p class="para-actu">Cette période de fin d'année est propice au moment de partage.<br>Alors pourquoi ne pas s'offrir un déjeuner <em>entre amis, collègues... ?<br>A vous les pros, qui souhaitez remercier vos collaborateurs, vos<br>partenaires, pensez au repas de fin d'année.</em></p>
        <a href="#">Lire plus <img src="arrow_icon.png" alt="flèche"></a>
      </div>

      <div id="actu2">
        <img src="actu2.jpg" alt="menu restaurant">
        <div class="actu-head">
          <div class="date">
            <p class="day">30</p><p class="month">décembre</p>
          </div>
          <h4>Restaurant : la carte du moment</h4>
        </div>
        <p class="com"><img src="com_icon.png" alt="icone commentaire"> 7 commentaires</p>
        <p class="para-actu">Notre carte hivernale en fonction de vous. De longues soirées<br>d'hiver nous attendent... Laissez - vous séduire par un bon repas<br>auprès de la cheminée de notre restaurant. Dans une ambiance</br>chaleureuse et douce c'est avec plaisir que notre chef vous propose<br>une cuisine conviviale dans sa nouvelle carte hivernale.</p>
        <a href="#">Lire plus <img src="arrow_icon.png" alt="flèche"></a>
      </div>

      <div id="actu3">
        <img src="actu3.jpg" alt="couloir">
        <div class="actu-head">
          <div class="date">
            <p class="day">10</p><p class="month"> mars</p>
          </div>
          <h4>Les infos pratiques :<br>Horaires, contact, actus</h4>
        </div>
        <p class="com"><img src="com_icon.png" alt="icone commentaire"> 2 commentaires</p>
        <p class="para-actu">Horaires, infos, actus, promo</p>
        <a href="#">Lire plus <img src="arrow_icon.png" alt="flèche"></a>
      </div>
    </div>
    <div id="nav-actu">
      <p id="dot1"></p><p class="dot"></p><p class="dot"></p>
    </div>
  </section>

  <!-- SECTION AVIS -->

  <section id="avis">
    <div id="tx-avis">
      <h3>Avis <span>clients</span></h3>
      <div id="pourcentage_mob">
        <p><br><br>90%</p>
      </div>
      <p id="avis_desk"><img src="opening_quote.png" alt="opening quote"> Un établissement agréable avec un hôtel de bon confort<br>et un restaurant avec de bons produits locaux.<br>Une salle à manger chaleureuse avec sa cheminée<br>centrale et un service professionnel et souriant. <img src="closing_quote.png" alt="closing quote"></p>
      <p id="auteur">____ <span>Pascal.P, le 27/02/2020</span></p>
    </div>
    <p id="avis_mob"><img src="opening_quote.png" alt="opening quote"> Un établissement agréable<br>avec un hôtel de bon confort<br>et un restaurant avec de bons<br>produits locaux. Une salle à manger<br>chaleureuse avec sa cheminée<br>centrale et un service professionnel et souriant. <img src="closing_quote.png" alt="closing quote"></p>
    <div id="pourcentage_desk">
      <p><br><br>90%</p>
    </div>
    <div id="nav-avis">
      <p><span>___</span> ___ ___</p>
    </div>
  </section>
</body>

<?php
include('footer.php');
?>
