<?php
  require "../Model/User.php";
  session_start();
  $m=new User();
  $con=$m->ConnectToDB();
  $m->GoToLogin();
  //$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
  $id=$_SESSION["ID"];
  $query="SELECT * FROM `user` WHERE ID = '".$id."' ";
  $res=mysqli_query($con,$query);


?>



<!doctype html>
<html lang="en">
  <head>
    <title>Banking System </title>
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

    <style>
        /* Style inputs with type="text", select elements and textareas */
        input[type=text], input[type=number], input[type=email], input[type=password]{
        width: 455px; /* Full width */
        padding: 12px; /* Some padding */ 
        border: 1px solid #ccc; /* Gray border */
        border-radius: 4px; /* Rounded borders */
        box-sizing: border-box; /* Make sure that padding and width stays in place */
        margin-top: 6px; /* Add a top margin */
        margin-bottom: 16px; /* Bottom margin */
        resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
        }
        .input-group{
            width: 535px; /* Full width */
            padding: 12px; /* Some padding */ 
            border-radius: 4px; /* Rounded borders */
            box-sizing: border-box; /* Make sure that padding and width stays in place */
            margin-top: 16px; /* Add a top margin */
            margin-bottom: 16px; /* Bottom margin */
            margin-left: 376px;
            resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
        }

        /* Style the submit button with a specific background color etc */
        input[type=submit] {
        background: #FFC312;
        color:black;
        width: 407px;
        height: 45px;
        margin-left: -160px;
        margin-top: 20px;
        border-color: black;
        border-radius: 6px;
        cursor: pointer;
        }

        /* When moving the mouse over the submit button, add a darker green color */
        input[type=submit]:hover {
        background-color: #ffbe00;
        width: 412px ;
        height: 50px;
        font-size: 14px;
        transition: 0.6s;
        }

        /* Add a background color and some padding around the form */
        .containerEditInfo {
        border-radius: 15px;
        margin: 35px;
        width: auto;
        height: auto;
        background-color: #f7f7f7;
        padding: 20px;
        }
        .title{
            text-align: center;
            color: black;
            font-family:Arial, Helvetica, sans-serif ;
            font-weight: bold;
        }
    </style>

    <!-- EditInfo form -->
    <div id="next" class="containerEditInfo">
        <div class="title">
            <strong>
                <h1>Edit Info</h1>
            </strong>
        </div>
        <form method="post" action="../Controller/Update.php">
            <?php
                while ($row=mysqli_fetch_assoc($res)) {
            ?>
            <div style="text-align: center;">
                <label for="FullName">FullName</label>
                <input type="text" id="FullName" name="FullName" Value="<?=$row["FullName"]?>" required="">
            </div>
            <div style="text-align: center;margin-left: 10px;">
                <label for="Address">Address</label>
                <input type="text" id="Address" name="Address" Value="<?=$row["Address"]?>" required="">
            </div>
            <div style="text-align: center;margin-left: 40px;">
                <label for="Age">Age</label>
                <input type="text" id="Age" name="Age" Value="<?=$row["Age"]?>" required="">
            </div>
            <div style="text-align: center;margin-left: 40px;">
                <label for="Balance">Your Balance:       </label>
                <label for="Balance"><strong> <?= $row["Balance"] ?>  </strong> </label>
            </div>
            <div class="input-group" style="text-align: center;">
                <label for="Gender">Gender</label>
				        <select  name="Gender" id="Gender" class="custom-select" style="margin-top: -15px;margin-bottom: -15px; height: 53px;border-radius: 4px;">
                    <?php
                      $val="";
                      if ($row["Gender"]=="Male") {
                        $val='Female';
                        //$row["Gender"]=$val;
                      }
                      else {
                        $val='Male';
                        $row["Gender"]="Female";
                      }
                    ?>
                    <option Value="<?= $val ?>" > <?= $row["Gender"] ?> </option>
                    <option Value="<?= $val ?>"> <?= $val ?> </option>
                </select>
			</div>   
            <div style="text-align: center;margin-left: 30px;">
                <label for="Email">Email</label>
                <input type="email" id="Email" name="Email" Value="<?=$row["Email"]?>" required="">
            </div> 
            <div style="text-align: center;">
                <label for="Password">Password</label>
                <input type="password" id="Password" name="Password" Value="<?=$row["Password"]?>" required="">
            </div> 
            <?php }?>
            <div style="text-align: center;margin-left: 215px;" >
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
 <!-- EditInfo form -->


 

    

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