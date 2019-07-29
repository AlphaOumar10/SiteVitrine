<!DOCTYPE html>
<html lang="en">
<?php include("page/header_front.php");?>
  <body>
    
    
    <?php include("page/nav_bar_front.php");?>
    
   

    <section class="flexslider">
      <ul class="slides">
        <li style="background-image: url(img/slider_1.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading">Demande de service</h1>
                </div>
              </div>
            </div>
          </div>
        </li>
        
      </ul>
    </section>
    
    <section class="probootstrap-section probootstrap-bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-5 probootstrap-animate">
            <form action="../controler/Afficher_Demande.php" method="post" class="probootstrap-form">
              <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="form-group">
                <label for="lastname">Prenom</label>
                <input type="text" class="form-control" id="subject" name="lastname">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" id="subject" name="adresse">
              </div>
              <div class="form-group">
                <label for="telephone">Telephone</label>
                <input type="text" class="form-control" id="subject" name="tel">
              </div>
              <div class="form-group">
                <label for="societe">Societe</label>
                <input type="text" class="form-control" id="subject" name="societe">
              </div>
              <div class="form-group">
              Service : <br/>
              <input type="checkbox" name="service1" id="service1"/>
              <label for="Service1">Service1</label><br/>
              <input type="checkbox" name="service2" id="service2"/>
              <label for="Service2">Service2</label>
              <br/>
              Sous-Service :<br/>
              <input type="checkbox" name="sousservice1" id="sousservice1"/>
              <label for="SousService1">SousService1</label><br/>
              <input type="checkbox" name="sousservice2" id="sousservice2"/>
              <label for="SousService2">SousService2</label>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Envoyé">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>   
    

    <?php include("page/footer_front.php");?>

<script src="../assets/fronts/js/scripts.min.js"></script>
<script src="../assets/fronts/js/custom.min.js"></script>

  </body>
</html>