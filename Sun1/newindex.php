<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DHANUSH</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/newmain.css" rel="stylesheet">

</head>

<body>

    <?php 
    $que1E = $que2E = $que3E = $que4E = $que5E= $que6E = $que7E = $que8E = $que9E = $que10E ="";
    $que1 = $que2 = $que3 = $que4 = $que5= $que6 = $que7 = $que8 = $que9 = $que10 =  "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
      if (empty($_POST["question"])) {
        $que1E = "answer is required";
      } else {
        $que1 = test_input($_POST["question"]);
      }

      if (empty($_POST["question"])) {
        $que2E = "answer is required";
      } else {
        $que2 = test_input($_POST["question"]);
      }

      if (empty($_POST["question"])) {
        $que3E = "answer is required";
      } else {
        $que3 = test_input($_POST["question"]);
      }

      if (empty($_POST["question"])) {
        $que4E = "answer is required";
      } else {
        $que4 = test_input($_POST["question"]);
      }

      if (empty($_POST["question"])) {
        $que5E = "answer is required";
      } else {
        $que5 = test_input($_POST["question"]);
      }

      if (empty($_POST["question"])) {
        $que6E = "answer is required";
      } else {
        $que6 = test_input($_POST["question"]);
      }

      if (empty($_POST["question"])) {
        $que7E = "answer is required";
      } else {
        $que7 = test_input($_POST["question"]);
      }

      if (empty($_POST["question"])) {
        $que8E = "answer is required";
      } else {
        $que8 = test_input($_POST["question"]);
      }

      if (empty($_POST["question"])) {
        $que9E = "answer is required";
      } else {
        $que9 = test_input($_POST["question"]);
      }

      if (empty($_POST["question"])) {
        $que10E = "answer is required";
      } else {
        $que10 = test_input($_POST["question"]);
      }
    }
    

    ?>
















  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>DHANUSH<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="about.html">About</a></li>
          
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Welcome to <span>DHANUSH</span></h2>
            <p data-aos="fade-up">FOLLOWING ARROW WHERE IT POINTS</p>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/hero-carousel-1.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-2.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-3.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-4.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-5.jpg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started section-bg">
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
              <h3>WELCOME TO HAPPINESS</h3>
              <h2>WHERE THERE IS HOPE THERE IS A WAY WHERE THIS IS NO WAY THERE IS DHANUSH</h2>
              
            </div>
          </div>

        

        </div>

      </div>
    </section><!-- End Get Started Section -->

    <form>
        <h1>QUESTION 1. RATE YOUR LIFE SATIFACTION....</h1><br>
        <label class="container">
            <input type="radio" name="1" <?php if (isset($que1) && $que1 == "1") echo "checked";?>value='1'>1
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio"<?php if (isset($que1) && $que1 == "2") echo "checked";?> value='2'>2 
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio" <?php if (isset($que1) && $que1 == "3") echo "checked";?> value='3'>3
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio"<?php if (isset($que1) && $que1 == "4") echo "checked";?> value='4'>4
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio" <?php if (isset($que1) && $que1 == "5") echo "checked";?> value='5'>5
            <span class="check"></span>
          </label>
        <br>
        

        <h1>QUESTION 2. RATE YOUR MENTAL HEALTH....</h1><br>
        <label class="container">
            <input type="radio" name="1" <?php if (isset($que1) && $que2 == "1") echo "checked";?>value='1'>1
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio"<?php if (isset($que1) && $que2 == "2") echo "checked";?> value='2'>2 
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio" <?php if (isset($que1) && $que2 == "3") echo "checked";?> value='3'>3
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio"<?php if (isset($que1) && $que2 == "4") echo "checked";?> value='4'>4
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio" <?php if (isset($que1) && $que2 == "5") echo "checked";?> value='5'>5
            <span class="check"></span>
          </label>
        <br> 
        
        <h1>QUESTION 3. RATE YOUR TIME MANAGEMENT SKILLS....</h1><br>
        <label class="container">
            <input type="radio" name="1" <?php if (isset($que1) && $que3 == "1") echo "checked";?>value='1'>1
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio"<?php if (isset($que1) && $que3 == "2") echo "checked";?> value='2'>2 
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio" <?php if (isset($que1) && $que3 == "3") echo "checked";?> value='3'>3
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio"<?php if (isset($que1) && $que3 == "4") echo "checked";?> value='4'>4
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio" <?php if (isset($que1) && $que3 == "5") echo "checked";?> value='5'>5
            <span class="check"></span>
          </label>
        <br> 
        
        <h1>QUESTION 4. RATE YOUR PHYSICAL HEALTH....</h1><br>
        <label class="container">
            <input type="radio" name="1" <?php if (isset($que1) && $que4 == "1") echo "checked";?>value='1'>1
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio"<?php if (isset($que1) && $que4 == "2") echo "checked";?> value='2'>2 
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio" <?php if (isset($que1) && $que4 == "3") echo "checked";?> value='3'>3
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio"<?php if (isset($que1) && $que4 == "4") echo "checked";?> value='4'>4
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio" <?php if (isset($que1) && $que4 == "5") echo "checked";?> value='5'>5
            <span class="check"></span>
          </label>
        <br> 
        
        <h1>QUESTION 5. WHAT DO YOU THINK ABOUT LIFELONG LEARNING ?</h1><br>
        <label class="container">
            <input type="radio" name="1" <?php if (isset($que1) && $que5 == "1") echo "checked";?>value='1'>1
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio"<?php if (isset($que1) && $que5 == "2") echo "checked";?> value='2'>2 
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio" <?php if (isset($que1) && $que5 == "3") echo "checked";?> value='3'>3
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio"<?php if (isset($que1) && $que5 == "4") echo "checked";?> value='4'>4
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio" <?php if (isset($que1) && $que5 == "5") echo "checked";?> value='5'>5
            <span class="check"></span>
          </label>
        <br> 
        
        <h1>QUESTION 6. RATE YOUR CONNECTION WITH YOUR FAMILY AND FRIENDS?</h1><br>
        <label class="container">
            <input type="radio" name="1" <?php if (isset($que1) && $que6 == "1") echo "checked";?>value='1'>1
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio"<?php if (isset($que1) && $que6 == "2") echo "checked";?> value='2'>2 
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio" <?php if (isset($que1) && $que6 == "3") echo "checked";?> value='3'>3
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio"<?php if (isset($que1) && $que6 == "4") echo "checked";?> value='4'>4
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio" <?php if (isset($que1) && $que6 == "5") echo "checked";?> value='5'>5
            <span class="check"></span>
          </label>
        <br> 
        
        <h1>QUESTION 7. RATE YOUR SOCIAL SUPPORT....</h1><br>
        <label class="container">
            <input type="radio" name="1" <?php if (isset($que1) && $que7 == "1") echo "checked";?>value='1'>1
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio"<?php if (isset($que1) && $que7 == "2") echo "checked";?> value='2'>2 
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio" <?php if (isset($que1) && $que7 == "3") echo "checked";?> value='3'>3
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio"<?php if (isset($que1) && $que7 == "4") echo "checked";?> value='4'>4
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio" <?php if (isset($que1) && $que7 == "5") echo "checked";?> value='5'>5
            <span class="check"></span>
          </label>
        <br> 
        
        <h1>QUESTION 8. RATE YOUR LIFE ENVIORNMENT....</h1><br>
        <label class="container">
            <input type="radio" name="1" <?php if (isset($que1) && $que8 == "1") echo "checked";?>value='1'>1
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio"<?php if (isset($que1) && $que8 == "2") echo "checked";?> value='2'>2 
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio" <?php if (isset($que1) && $que8 == "3") echo "checked";?> value='3'>3
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio"<?php if (isset($que1) && $que8 == "4") echo "checked";?> value='4'>4
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio" <?php if (isset($que1) && $que8 == "5") echo "checked";?> value='5'>5
            <span class="check"></span>
          </label>
        <br> 
        
        <h1>QUESTION 9. RATE THE COMFORT WITH GOVERNMENT....</h1><br>
        <label class="container">
            <input type="radio" name="1" <?php if (isset($que1) && $que9 == "1") echo "checked";?>value='1'>1
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio"<?php if (isset($que1) && $que9 == "2") echo "checked";?> value='2'>2 
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio" <?php if (isset($que1) && $que9 == "3") echo "checked";?> value='3'>3
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio"<?php if (isset($que1) && $que9 == "4") echo "checked";?> value='4'>4
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio" <?php if (isset($que1) && $que9 == "5") echo "checked";?> value='5'>5
            <span class="check"></span>
          </label>
        <br> 
        
        <h1>QUESTION 10. RATE YOUR STANDARD OF LIVING....</h1><br>
        <label class="container">
            <input type="radio" name="1" <?php if (isset($que1) && $que10 == "1") echo "checked";?>value='1'>1
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio"<?php if (isset($que1) && $que10 == "2") echo "checked";?> value='2'>2 
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio" <?php if (isset($que1) && $que10 == "3") echo "checked";?> value='3'>3
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio"<?php if (isset($que1) && $que10 == "4") echo "checked";?> value='4'>4
            <span class="check"></span>
          </label>
          <label class="container">
            <input type="radio" name="radio" <?php if (isset($que1) && $que10 == "5") echo "checked";?> value='5'>5
            <span class="check"></span>
          </label>
        <br>
        <div class="button">
          <input type="submit" name="submit" value="Submit">
        </div>


  </form>




 
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

 
  <div class="footer-legal text-center position-relative">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>DHANUSH</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        
        Designed by Team DHANUSH</a>
      </div>
    </div>
  </div>

</footer>
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>


<?php
echo "<h2>Your Inputs:</h2>";
echo $que1;
echo "<br>";
echo $que2;
echo "<br>";
echo $que3;
echo "<br>";
echo $que4;
echo "<br>";
echo $que5;
echo "<br>";
echo $que6;
echo "<br>";
echo $que7;
echo "<br>";
echo $que8;
echo "<br>";
echo $que9;
echo "<br>";
echo $que10;
echo "<br>";

?>

</body>

</html>