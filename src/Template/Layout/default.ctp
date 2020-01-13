<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Resto</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
  <?= $this->Html->css('style.css') ?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
  <nav class="navbar justify-content-end" style="background-color: white;">
    <div class="row">
    <!-- Navbar content -->
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <?= $this->Html->link('Home', array('controller' => 'Pages', 'action' => 'index'), array('class' => 'nav-link')) ?>
        </li>
        <li class="nav-item">
            <?= $this->Html->link('Restaurants', array('controller' => 'Pages', 'action' => 'index'), array('class' => 'nav-link')) ?>
          </li>
        <li class="nav-item">
            <a class="nav-link"href="">Contact</a>
          </li>
        <li class="nav-item">
            <a class="nav-link"href="">|</a>
        </li>
        <li class="nav-item">
            <a class="nav-link"href="">Login</a>
          </li>
      <button type="button" class="btn btn-primary" style="background-color: #ff6000; width: 150px; border: none;">
        Sign Up
      </button>

      
</nav>
        <?= $this->fetch('content') ?>
   <!-- Footer -->
<footer class="page-footer font-small bg-dark pt-4" style="margin-top: none;">

<!-- Footer Links -->
<div class="container text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-4 " style="color: white; text-align: left;">

      <!-- Content -->
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact Us</h5>

      <p class="lighter-text">T: +250 788 000 000</p>
      <p class="lighter-text">E: yveshonore14@gmail.com</p>
      <p class="lighter-text">A: Kimihurura, Kigali.</p>
        <i class="material-icons">
          play_circle_filled
          </i>

          <i class="material-icons">
            play_circle_filled
            </i>

            <i class="material-icons">
              play_circle_filled
              </i>

    </div>
    <!-- Grid column -->
    <div class="vl"></div>
    <hr class="clearfix w-100 d-md-none">
    <!-- Grid column -->
    
    <div class="col-md-6 mx-auto" style="color: white;">

      <form>
        <div class="form-row">
          <div class="col">
            <input type="text" class="form-control lighter-text" placeholder="Name">
          </div>
          <div class="col">
            <input type="text" class="form-control lighter-text" placeholder="Email">
          </div>
        </div>
        <br>
        <div class="form-group">
          <textarea class="form-control lighter-text" id="exampleFormControlTextarea1" rows="3" placeholder="Message" ></textarea>
        </div>
        <button type="button" class="btn btn-primary-broken" style="background-color: tomato; height: 33px;">
          <h4 class="text" style="font-weight: normal; font-size: small;" > <b></b>SUBMIT</b></h4> 
        </button>
      </form>
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<div class="footer-copyright text-left py-4 " style="background-color: black; color: white;">
  <div class="row">
    <div class="col-md-4 light-text " style="color: white; text-align: center;">
      <p>Challenge by Awesomity</p>
    </div>
    <div class="col-md-7 light-text " style="color: white; text-align: right; align-content: flex-end;">
      <p>Developed by <b style="color: orangered;"> INSERT YOUR NAME HERE </b></p>
    </div>
  </div>
</div>
</footer>
<!-- Footer -->

<!-- Scripts links -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="/node_modules/jquery/dist/jquery.js"></script>
  <script src="owl.carousel.min.js"></script>
  <script src="js/index.js"></script>
  <script>
      $('.owl-carousel').owlCarousel();
  </script>
</body>
</html>