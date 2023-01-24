<?php
  session_start();
  require "../Model/User.php";
  $model=new User();
  $model->GoToLogin();
  


?>




<!doctype html>
<html lang="en">
  <head>
    <title>Banking System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../assets/cssHomePage/fonts/icomoon/style.css">
    <link href="../assets/css/Icon.png" rel="shortcut icon" />
    <link rel="stylesheet" href="../assets/cssHomePage/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/cssHomePage/css/jquery-ui.css">
    <link rel="stylesheet" href="../assets/cssHomePage/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/cssHomePage/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/cssHomePage/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../assets/cssHomePage/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="../assets/cssHomePage/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../assets/cssHomePage/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="../assets/cssHomePage/css/aos.css">

    <link rel="stylesheet" href="../assets/cssHomePage/css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar js-sticky-header site-navbar-target"  role="banner">

      <div class="container" >
        <div class="row align-items-center" >
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a style="color: #FFC312;" href="../Views/HomePage.php" class="h2 mb-0">Banking<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a  href="../Views/HomePage.php" class="nav-link">Home</a></li>
                <li><a  href="../Views/ContactUs.php" class="nav-link">Contact us</a></li>
                <li><a  href="../Views/EditInfo.php" class="nav-link">Edit information</a></li>
                <li><a  href="../Views/LogOut.php" class="nav-link">Log out</a></li>

                

          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
     
    <div class="site-blocks-cover overlay" style="background-image: url(../assets/images/hero_2.jpg);" data-aos="fade" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">

          
          <div class="col-md-10 mt-lg-5 text-center">
            <div class="single-text owl-carousel">
              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">Banking Solutions</h1>
                <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae minima delectus accusamus accusantium deleniti libero excepturi porro illo.</p>
                <div data-aos="fade-up" data-aos-delay="100">
                  <a style="background: #FFC312;color:black;border-color: black;" href="../Views/ContactUs.php" target="_blank" class="btn  btn-primary mr-2 mb-2">Get In Touch</a>
                </div>
              </div>

              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">Financing Solutions</h1>
                <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Repudiandae minima delectus accusamus accusantium deleniti libero excepturi porro illo.</p>
                <div data-aos="fade-up" data-aos-delay="100">
                  <a style="background: #FFC312;color:black;border-color: black;" href="../Views/ContactUs.php" target="_blank" class="btn  btn-primary mr-2 mb-2">Get In Touch</a>
                </div>
              </div>

              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">Savings Accounts</h1>
                <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Repudiandae minima delectus accusamus accusantium deleniti libero excepturi porro illo.</p>
                <div  data-aos="fade-up" data-aos-delay="100">
                  <a style="background: #FFC312;color:black;border-color: black;" href="../Views/ContactUs.php" target="_blank" class="btn  btn-primary mr-2 mb-2">Get In Touch</a>
                </div>
              </div>

            </div>
          </div>
            
        </div>
      </div>

      <a href="#next" class="mouse smoothscroll">
        <span class="mouse-icon">
          <span class="mouse-wheel"></span>
        </span>
      </a>
    </div>  

    <!-- Options -->
    <section id="next" class="featured-services" style="margin-left:-7px;overflow: hidden;padding: 115px 0;padding-left: 238px;background-color: #f8f9fa!important;">
      <div  class="container aos-init aos-animate" data-aos="fade-up" >
          <style>
            #div1 :hover{
              background-color: #FFC312; 
              color: black;
              display: inline-block;
              font-size: 16px;
              padding-top: 2px;
              padding-left: 10px;
              border-radius: 25px;
              transition: 0.5s;
              cursor: pointer;
            }
          </style>
        <div id="div1" class="row" style="--bs-gutter-x: 1.5rem;--bs-gutter-y: 0;  display: flex;  flex-wrap: wrap;  margin-top: calc(-1 * var(--bs-gutter-y));  margin-right: calc(-.5 * var(--bs-gutter-x)); margin-left: calc(-.5 * var(--bs-gutter-x));" >
          
          
          <div  class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" style="height: 220px;border-radius: 20px; display: flex;width: 25%; background-color: white;margin-right: 25px;">
            <div  class="icon-box aos-init aos-animate" style=" margin-top: 20px;margin-left: 15px; "  data-aos="fade-up" data-aos-delay="200">
              <div class="icon">
                  <img src="../assets/images/flaticon-svg/svg/007-piggy-bank.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <h4 class="title"><a href="../Views/Deposit.php">Deposit</a></h4>
              <p class="description">you can deposit any balance from here</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" style="height: 220px;border-radius: 20px; display: flex;width: 25%; background-color: white;margin-right: 25px;" >
            <div class="icon-box aos-init aos-animate"  style=" margin-top: 20px;margin-left: 15px; " data-aos="fade-up" data-aos-delay="300">
              <div class="icon">
                  <img src="../assets/images/flaticon-svg/svg/money-withdrawal.png" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <h4 class="title"><a href="../Views/Withdraw.php">Withdraw</a></h4>
              <p class="description">To withdraw money, please click here</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" style="height: 220px;border-radius: 20px; display: flex;width: 25%; background-color: white;margin-right: 25px;" >
            <div class="icon-box aos-init aos-animate"  style=" margin-top: 20px;margin-left: 15px; " data-aos="fade-up" data-aos-delay="400">
              <div class="icon">
                  <img src="../assets/images/flaticon-svg/svg/edit.png" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <h4 class="title"><a href="../Views/Transfer.php">Tranfer money</a></h4>
              <p class="description">you can Tranfer your balance to others</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- Options -->


 

    

<!-- Footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="../assets/cssHomePage/#about-section" class="smoothscroll">Terms</a></li>
                  <li><a href="../assets/cssHomePage/#about-section" class="smoothscroll">Policy</a></li>
                  <li><a href="../assets/cssHomePage/#about-section" class="smoothscroll">About Us</a></li>
                  <li><a href="../assets/cssHomePage/#services-section" class="smoothscroll">Services</a></li>
                  <li><a href="../assets/cssHomePage/#testimonials-section" class="smoothscroll">Testimonials</a></li>
                  <li><a href="../assets/cssHomePage/#contact-section" class="smoothscroll">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3 footer-social">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="../assets/cssHomePage/#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="../assets/cssHomePage/#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="../assets/cssHomePage/#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="../assets/cssHomePage/#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              <p>Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
                with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              </p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        
            </div>
          </div>
          
        </div>
      </div>
    </footer>
<!-- Footer -->

  </div> <!-- .site-wrap -->

  <script src="../assets/cssHomePage/js/jquery-3.3.1.min.js"></script>
  <script src="../assets/cssHomePage/js/jquery-ui.js"></script>
  <script src="../assets/cssHomePage/js/popper.min.js"></script>
  <script src="../assets/cssHomePage/js/bootstrap.min.js"></script>
  <script src="../assets/cssHomePage/js/owl.carousel.min.js"></script>
  <script src="../assets/cssHomePage/js/jquery.countdown.min.js"></script>
  <script src="../assets/cssHomePage/js/jquery.easing.1.3.js"></script>
  <script src="../assets/cssHomePage/js/aos.js"></script>
  <script src="../assets/cssHomePage/js/jquery.fancybox.min.js"></script>
  <script src="../assets/cssHomePage/js/jquery.sticky.js"></script>
  <script src="../assets/cssHomePage/js/isotope.pkgd.min.js"></script>

  
  <script src="../assets/cssHomePage/js/main.js"></script>

  
  </body>
</html>