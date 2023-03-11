<!DOCTYPE html>
<html lang="en">

<head>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"></script>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Accueil</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
   <!-- font awesome -->
   <link rel="stylesheet" type="text/css"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <!--  -->
   <!-- owl stylesheets -->
   <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext"
      rel="stylesheet">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesoeet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
</head>

<body>
   <!-- banner bg main start -->
   <div class="banner_bg_main">

      <!-- header section start -->
      <div class="header_section">
         <div class="container" style="margin-top: 100px;">
            <div class="containt_main">
               <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="inscription2.php">ajouter admin</a>
                  <a href="connexion.php">Connexion</a>
                  <a href="afficheclient.php">afficher client</a>
                  <a href="deconnexion.php">deconnexion</a>


               </div>
               <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>

               <div class="main">
                  <!-- Another variation with a button -->
                  <div class="input-group">
                     <input type="text" class="form-control" placeholder="rechercher">
                     <div class="input-group-append">
                        <button class="btn btn-secondary" type="button"
                           style="background-color: #000000; border-color:#000000 ">
                           <i class="fa fa-search"></i>
                        </button>
                     </div>
                  </div>
               </div>
               <div class="header_box">

                  <div class="login_menu">
                     <ul>
                        <li><a href="#">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span class="padding_10">panier</span></a>
                        </li>

                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- header section end -->
      <!-- banner section start -->
      <div class="container" style="margin-bottom: 200px;">
         <div class="row">
            <div class="col-sm-12">
               <h1 class="banner_taital" style="margin-top: 200px;">Pharma Shop</h1>
            </div>


         </div>
         <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
         </a>
         <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
         </a>
      </div>
      <!-- banner section end -->
   </div>

   <!-- footer section start -->
   <div class="footer_section layout_padding">
      <div class="container">
         <div class="input_bt">
            <input type="email" class="mail_bt" placeholder="votre Email" name="Your Email">
            <span class="subscribe_bt" id="basic-addon2"><a href="inscription.php" style="color: antiquewhite;"
                  href="#">Inscription</a></span>
         </div>

         <div class="location_main">Notre numéro : <a href="#">+216********</a></div>
      </div>
   </div>
   <!-- footer section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <script>
      function openNav() {
         document.getElementById("mySidenav").style.width = "250px";
      }

      function closeNav() {
         document.getElementById("mySidenav").style.width = "0";
      }
   </script>
</body>

</html>