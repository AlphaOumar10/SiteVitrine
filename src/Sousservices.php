<!DOCTYPE html>
<html lang="en">
<?php include("page/header_front.php");?>
<?php 
include("entite/Connexion.php");

$requete = "SELECT * FROM sousservice";

$statement = $connexion->prepare($requete);
$statement->execute(); 




?>
  <body>
    
  <?php include("page/nav_bar_front.php");?>
  <body>
    


    <section class="flexslider">
      <ul class="slides">
        <li style="background-image: url(img/slider_1.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading">Nos Sous-Services</h1>
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
          <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate" data-animate-effect="fadeIn">
            <h2>Ce que nous offrons</h2>
          </div>
        </div>
        <!-- END row -->
        <div class="row">
            <?php while($liste = $statement->fetch(PDO::FETCH_OBJ))
                                    {?>
          <div class="col-md-6">

            <div class="probootstrap-service-2 probootstrap-animate">
              <div class="image">
                <div class="image-bg">
                  <img src="../uploads/sousservice/<?php echo $liste->photoSS;?>" alt="Free Bootstrap Template by uicookies.com">
                </div>
              </div>
              <div class="text">
                <h3><?php echo $liste->nomSS;?></h3>
                <p><?php echo $liste->descriptionSS;?></p>

              </div>
            </div>
            <?php } ?>
        </div>
        
      </div>
    </section>

    

    <section class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
            <h2>Why Choose Us</h2>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
              <div class="icon"><i class="icon-mobile3"></i></div>
              <div class="text">
                <h3>Consectetur Adipisicing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              </div>  
            </div>
            <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
              <div class="icon"><i class="icon-presentation"></i></div>
              <div class="text">
                <h3>Aliquid Dolorum Saepe</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              </div>
            </div>
            <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
              <div class="icon"><i class="icon-circle-compass"></i></div>
              <div class="text">
                <h3>Eveniet Tempora Anisi</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
              <div class="icon"><i class="icon-lightbulb"></i></div>
              <div class="text">
                <h3>Laboriosam Quod Dignissimos</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              </div>  
            </div>
            
            <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
              <div class="icon"><i class="icon-magnifying-glass2"></i></div>
              <div class="text">
                <h3>Asperiores Maxime Modi</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              </div>
            </div>
            
            <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
              <div class="icon"><i class="icon-browser2"></i></div>
              <div class="text">
                <h3>Libero Maxime Molestiae</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              </div>
            </div>

          </div>
        </div>
        <!-- END row -->
      </div>
    </section>
    <?php include("page/footer_front.php");?>

<script src="../assets/fronts/js/scripts.min.js"></script>
<script src="../assets/fronts/js/custom.min.js"></script>

  </body>
</html>