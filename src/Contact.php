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
                  <h1 class="probootstrap-heading">Nous Contacter</h1>
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
            <form action="#" method="post" class="probootstrap-form">
              <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="form-group">
                <label for="subject">Prenom</label>
                <input type="text" class="form-control" id="subject" name="subject">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
             <div class="form-group">
                <label for="message">Message</label>
                <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Envoyé">
              </div>
            </form>
          </div>
          <div class="col-md-6 col-md-push-1 probootstrap-animate">
            
          <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3396.00658230333!2d-8.02797877199147!3d31.661039664895135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafec177297f089%3A0x1279f4ff0da2f518!2sSharp+Info+SARL!5e0!3m2!1sfr!2sfr!4v1478260163581" width="600" height="450" frameborder="0"></iframe>

            <h4>Maroc</h4>
            <ul class="probootstrap-contact-info">
              <li><i class="icon-pin"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
              <li><i class="icon-email"></i><span>info@domain.com</span></li>
              <li><i class="icon-phone"></i><span>+123 456 7890</span></li>
            </ul>
            
          </div>
        </div>
      </div>
    </section>   


    <?php include("page/footer_front.php");?>

<script src="../assets/fronts/js/scripts.min.js"></script>
<script src="../assets/fronts/js/custom.min.js"></script>

  </body>
</html>