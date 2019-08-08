<!DOCTYPE html>
<html lang="en">
<?php include("page/header_front.php");?>
<?php 
include("entite/Connexion.php");

$requete = "SELECT * FROM service";

$statement = $connexion->prepare($requete); 
$statement->execute(); ?>
  <body>
    
  <?php include("page/nav_bar_front.php");?>

    <section class="flexslider">
      <ul class="slides">
        <li style="background-image: url(../assets/fronts/img/slider_1.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading probootstrap-animate">Bringing Style And Comfort For Customer Satisfaction</h1>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url(../assets/fronts/img/slider_2.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading probootstrap-animate">Affordable Solutions For Better Living</h1>
                </div>
              </div>
            </div>
          </div>
          
        </li>
        <li style="background-image: url(../assets/fronts/img/slider_3.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading probootstrap-animate">We Bring Ideas To Life</h1>
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
          <div class="col-md-6 probootstrap-animate">
            <h2 class="mb0">Welcome To Our Website</h2>
            <p class="lead mt0">Another website template by <a href="https://uicookies.com/">uicookies.com</a></p>
          </div>
          <div class="col-md-6 probootstrap-animate">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid dolorum saepe magnam natus perferendis corrupti tenetur quidem suscipit eaque blanditiis corporis veniam molestias qui culpa veritatis officiis eum. Doloribus quos minus quas reprehenderit! Ad provident sunt totam culpa tenetur? Libero maxime molestiae cumque excepturi. </p>
            <p>Eveniet tempora a nisi aut debitis! Recusandae dolores vero autem expedita nihil asperiores maxime modi ducimus nemo dicta nulla dolore? Inventore necessitatibus non laboriosam eos quod dignissimos soluta sunt id fugiat debitis nam omnis? A ullam minima excepturi nulla totam necessitatibus illum modi exercitationem blanditiis quaerat at fugit ad eveniet ipsum error quod sit cumque impedit!</p>
          </div>
        </div>
      </div>
    </section>
    <section class="probootstrap-section probootstrap-bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
            <h2>What We Offer</h2>
          </div>
        </div>
        <div class="row">
            <?php while($liste = $statement->fetch(PDO::FETCH_OBJ))
                                    {?>
          <div class="col-md-6">

            <div class="probootstrap-service-2 probootstrap-animate">
              <div class="image">
                <div class="image-bg">
                  <img src="../uploads/service/<?php echo $liste->photoS;?>" alt="Free Bootstrap Template by uicookies.com">
                </div>
              </div>
              <div class="text">
                <h3><?php echo $liste->nomS;?></h3>
                <p><?php echo $liste->descriptionS;?></p>

              </div>
            </div>
            <?php } ?>
          </div>
        
        </div>
      </div>
    </section>

    <section class="flexslider">
            <h2 style="text-align:center;">Nos realisations</h2>
      <ul class="slides">
        <li style="background-image: url(../assets/fronts/img/appart3.jpg)" class="overlay">
        </li>
      </ul>
      <ul class="slides">
        <li style="background-image: url(../assets/fronts/img/realisation.jpg)" class="overlay">
        </li>
      </ul>
      <ul class="slides">
        <li style="background-image: url(../assets/fronts/img/realisation1.jpg)" class="overlay">
        </li>
      </ul>
      <ul class="slides">
        <li style="background-image: url(../assets/fronts/img/route3.jpg)" class="overlay">
        </li>
      </ul>
      <ul class="slides">
        <li style="background-image: url(../assets/fronts/img/route7.jpg)" class="overlay">
        </li>
      </ul>
    </section>
   
    <section class="probootstrap-section proboostrap-clients probootstrap-bg-white probootstrap-zindex-above-showcase">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
            <h2>Nos Clients</h2>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
          </div>
        </div>
        <!-- END row -->
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-6 text-center client-logo probootstrap-animate">
            <img src="../assets/fronts/img/client_1.png" class="img-responsive" alt="Free Bootstrap Template by uicookies.com">
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 text-center client-logo probootstrap-animate">
            <img src="../assets/fronts/img/client_2.png" class="img-responsive" alt="Free Bootstrap Template by uicookies.com">
          </div>
          <div class="clearfix visible-sm-block visible-xs-block"></div>
          <div class="col-md-3 col-sm-6 col-xs-6 text-center client-logo probootstrap-animate">
            <img src="../assets/fronts/img/client_3.png" class="img-responsive" alt="Free Bootstrap Template by uicookies.com">
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 text-center client-logo probootstrap-animate">
            <img src="../assets/fronts/img/client_4.png" class="img-responsive" alt="Free Bootstrap Template by uicookies.com">
          </div>          
          
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
            <div class="service left-icon probootstrap-animate">
              <div class="icon"><i class="icon-mobile3"></i></div>
              <div class="text">
                <h3>Consectetur Adipisicing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              </div>  
            </div>
            <div class="service left-icon probootstrap-animate">
              <div class="icon"><i class="icon-presentation"></i></div>
              <div class="text">
                <h3>Aliquid Dolorum Saepe</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              </div>
            </div>
            <div class="service left-icon probootstrap-animate">
              <div class="icon"><i class="icon-circle-compass"></i></div>
              <div class="text">
                <h3>Eveniet Tempora Anisi</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service left-icon probootstrap-animate">
              <div class="icon"><i class="icon-lightbulb"></i></div>
              <div class="text">
                <h3>Laboriosam Quod Dignissimos</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              </div>  
            </div>
            
            <div class="service left-icon probootstrap-animate">
              <div class="icon"><i class="icon-magnifying-glass2"></i></div>
              <div class="text">
                <h3>Asperiores Maxime Modi</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              </div>
            </div>
            
            <div class="service left-icon probootstrap-animate">
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

    <section class="probootstrap-section probootstrap-border-top probootstrap-bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
            <h2>Testimonial</h2>
          </div>
        </div>
        <!-- END row -->
        <div class="row">
          <div class="col-md-12 probootstrap-animate">
            <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
              <div class="item">

                <div class="probootstrap-testimony-wrap text-center">
                  <figure>
                    <img src="../assets/fronts/img/person_1.jpg" alt="Free Bootstrap Template by uicookies.com">
                  </figure>
                  <blockquote class="quote">&ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained.&rdquo; <cite class="author">&mdash; Ferdinand A. Porsche <br> <span>Design Lead at AirBNB</span></cite></blockquote>
                </div>

              </div>
              <div class="item">
                <div class="probootstrap-testimony-wrap text-center">
                  <figure>
                    <img src="../assets/fronts/img/person_2.jpg" alt="Free Bootstrap Template by uicookies.com">
                  </figure>
                  <blockquote class="quote">&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.&rdquo; <cite class="author">&mdash; Steve Jobs <br> <span>Co-Founder Square</span></cite></blockquote>
                </div>
              </div>
              <div class="item">
                <div class="probootstrap-testimony-wrap text-center">
                  <figure>
                    <img src="../assets/fronts/img/person_3.jpg" alt="Free Bootstrap Template by uicookies.com">
                  </figure>
                  <blockquote class="quote">&ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly.&rdquo; <cite class="author">&mdash; Frank Chimero <br> <span>Creative Director at Twitter</span></cite></blockquote>
                </div>
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