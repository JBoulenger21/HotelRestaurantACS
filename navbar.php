<!--HEADER-->
<img class="contact-logo" src="img/Logo.png" alt="">
<a href="index.php"><img class="contact-home"src="img/Home.png" alt=""></a>
<div class="contact-navbar">
  <a id="contact-loupe" href="#"><img src="img/Search.png" alt=""></a>
  <a class="contact-colorwhite contact-fontmontserrat contact-bold"href="#">SEARCH</a>
  <a class="contact-colorwhite contact-fontmontserrat contact-bold"href="contact.php">CONTACT</a>
  <a class="contact-colorwhite contact-fontmontserrat contact-bold"href="#">SEJOURS</a>
  <a class="contact-colorwhite contact-fontmontserrat contact-bold"href="services.php">SERVICES</a>
  <a class="contact-colorwhite contact-fontmontserrat contact-bold"href="#">RESTAURANT</a>
  <a id="contact-ahotel" class="contact-colorwhite contact-fontmontserrat contact-bold"href="hotel.php">HÔTEL</a>
</div>
<div class="contact-navbarMobile">
  <a href="index.php" class="active"></a>
    <div id="myLinks">
      <a class="contact-anavbarmsearch" href="#search">SEARCH</a></br>
      <a class="contact-anavbarmcontact" href="contact.php">CONTACT</a></br>
      <a class="contact-anavbarmsejours" href="#sejours">SEJOURS</a></br>
      <a class="contact-anavbarmservices" href="services.php">SERVICES</a></br>
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
<!--FIN HEADER-->
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
