<?php
include "../entities/utilisateur.php";
include "../core/utilisateurCore.php";


global $erreur;
if(isset($_POST['forminscription']))
{
  
    if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp'] AND !empty($_POST['mdp2']))) 
    {

      $pseudo =htmlspecialchars($_POST['pseudo']);
      $mail =htmlspecialchars($_POST['mail']);
      $mail2 =htmlspecialchars($_POST['mail2']);
      $mdp = sha1($_POST['mdp']);
      $mdp2 = sha1($_POST['mdp2']);

      $pseudolength =strlen($pseudo);
      if($pseudolength<=255)
        { 
            if($mail == $mail2)
            {   

        if(filter_var($mail,FILTER_VALIDATE_EMAIL))
           {
                     $utilisateur2C = new utilisateurCore();
                     $mailexist=$utilisateur2C->VerifierEmail($mail);
                if($mailexist==0)
                {
                if($mdp == $mdp2)
                {    
                    $longueurKey = 12;
                    $key = "";
                    for ($i=1; $i<$longueurKey; $i++) { 
                        $key .= mt_rand(0,9);
                    }
                        $utilisateur1 = new utilisateur($pseudo,$mail,$mdp);
                        $utilisateur1C = new utilisateurCore();
                        $utilisateur1C->inscritption($utilisateur1,$key);
                        $utilisateur1C->EnvoyerMail($mail,$pseudo,$key);

                        $erreur="votre comptre à était bien crée";

                }
                else{
                    $erreur="vos mot de passes ne correspond pas";
                }
                }
                else{
                    $erreur="email déja utilisé , veuillez utiliser une autre adresse !";
                }
             }
             else{
                $erreur="votre adresse mail n est pas valide !";
             }

            }
            else{
                $erreur="votre mail ne corresond pas";
            }

        }
      else{
        $erreur ="votre pseudo a depasser 255 erreurs";
      }
    
    }
    else
    {
        $erreur = "tous les champs doivent etre complétes";

    }
}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/04-contact-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:48:01 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FASHION MAKEUP</title>
    <meta name="keywords" content="HTML5,CSS3,HTML,Template,Multi-Purpose,M_Adnan,Corporate Theme,SEBIAN Multi Purpose Care,eCommerce,SEBIAN - Multi Purpose eCommerce HTML5 Template">
    <meta name="description" content="SEBIAN - Multi Purpose eCommerce HTML5 Template">
    <meta name="author" content="M_Adnan">

    <!-- FONTS ONLINE -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!--MAIN STYLE-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- ADD YOUR OWN STYLING HERE. AVOID TO USE STYLE.CSS AND MAIN.CSS. IT WILL BE HELPFUL FOR YOU IN FUTURE UPDATES -->
    <link href="css/custom.css" rel="stylesheet" type="text/css">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

    <!-- JavaScripts -->
    <script src="js/modernizr.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- LOADER ===========================================-->
    <div id="loader">
        <div class="loader">
            <div class="position-center-center"> <img src="images/logo-dark.png" alt="">

                <p class="font-playfair text-center">Please Wait...</p>
                <div class="loading">
                    <div class="ball"></div>
                    <div class="ball"></div>
                    <div class="ball"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Wrap -->
    <div id="wrap">

        <!-- Header -->
        <header class="header-style-2">
            <!-- Top Bar -->
            <div class="top-bar">
                <div class="container">
                    <!-- Language -->
                    <div class="top-links">
                        <ul>
                            <li><a href="#."></a></li>
                            <li>

                                <!-- Button to open the modal login form -->
                                <a onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer;">LOGIN</a>
                                <!-- The Modal -->
                                <div id="id01" class="modal">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

                                    <!-- Modal Content -->
                                    <form class="modal-content animate" method="POST">
                                        <div class="imgcontainer">
                                        </div>

                                        <div class="fields">
                                            <label for="uname" style="font-size: 16px;"><b>USERNAME</b></label>
                                            <input type="email" placeholder="Enter Username" name="mailconnect" class="inputs" class="shakeInput" required>
                                            </br>
                                            <label for="psw" style="font-size: 16px;" style="font-family: montserrat"><b>PASSWORD</b></label>
                                            <input type="password" placeholder="Enter Password" name="mdpconnect" class="inputs" required>
                                        </div>

                                        <div class="continer" style="background-color:dimgrey">
                                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn">ANNULER</button>
                                            <input type="submit" class="btn" name="formconnexion" value="SE CONNECTER">
  
</input>

                                        </div>


                                    </form>
                                </div>
                               



                            </li>
                            <li class="font-montserrat">MY ACCOUNT

                            </li>
                        </ul>
                        <!-- Social Icons -->
                        <ul class="social_icons">
                            <li class="facebook"><a href="#."><i class="fa fa-facebook"></i> </a></li>
                            <li class="twitter"><a href="#."><i class="fa fa-twitter"></i> </a></li>
                            <li class="dribbble"><a href="#."><i class="fa fa-dribbble"></i> </a></li>
                            <li class="googleplus"><a href="#."><i class="fa fa-google-plus"></i> </a></li>
                            <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Logo -->
            <div class="container">
                <div class="logo"> <a href="#."><img src="images/fashionmakeup.png" alt=""></a> </div>
            </div>

            <!-- Nav -->
            <!-- Nav -->
            <div class="sticky">
                <div class="container">
                    <nav>
                        <ul id="ownmenu" class="ownmenu">
                            <li class="active"><a href="index.html">HOME</a>
                                <ul class="dropdown">
                                </ul>
                            </li>
                            <li><a href="12-contact.html"></a>
                                <li><a href="02-shop-sidebar-right.html">PRODUITS</a>
                                    <!--======= MEGA MENU =========-->
                                    <div class="megamenu full-width">
                                        <div class="row nav-post">
                                            <div class="col-sm-3">
                                                <h6>VISAGE</h6>
                                                <ul>
                                                    <li><a href="02-shop-sidebar-right.html">categorie 1</a></li>
                                                    <li><a href="02-shop-sidebar-left.html">categorie 2</a></li>
                                                    <li><a href="02-shop-sidebar.html">categorie 3</a></li>
                                                    <li><a href="02-shop-list-view.html">categorie 4</a></li>
                                                    <li><a href="02-shop-full_width-03.html">categorie 5</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6>YEUX</h6>
                                                <ul>
                                                    <li><a href="08-01-blog-mansory.html">categorie 1</a></li>
                                                    <li><a href="08-02-blog-left-side-bar.html">categorie 2</a></li>
                                                    <li><a href="08-02-blog-right-side-bar.html">categorie 3</a></li>
                                                    <li><a href="08-04-blog-medium-image.html">categorie 4</a></li>
                                                    <li><a href="08-05-blog-large-images.html">categorie 5</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6>LEVRES</h6>
                                                <ul>
                                                    <li><a href="09-01-portfolio-grid.html">categorie 1</a></li>
                                                    <li><a href="09-02-portfolio-grid.html">categorie 2</a></li>
                                                    <li><a href="09-03-portfolio-grid.html">categorie 4</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6>ONGLES</h6>
                                                <ul>
                                                    <li><a href="09-01-portfolio-grid.html">categorie 1</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6>ACCESSOIRES</h6>

                                            </div>
                                </li>
                                <li><a href="index.html">PROMOTION</a>
                                    <li><a href="08-01-blog-mansory.html">A PROPOS</a>
                                        <li><a href="04-contact-01.html">CONTACT</a>

                                            <!--======= Shopping Cart =========-->
                                            <li class="shop-cart"><a href="#."><i class="fa fa-shopping-cart"></i></a> <span class="numb">2</span>
                                                <ul class="dropdown">

                                                    <li class="no-padding no-border">
                                                        <div class="row">
                                                            <div class="col-xs-6"> <a href="#." class="btn btn-small">VIEW CART</a></div>
                                                            <div class="col-xs-6 "> <a href="#." class="btn btn-1 btn-small">CHECK OUT</a></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!--======= SEARCH ICON =========-->
                                            <li class="search-nav"><a href="#."><i class="fa fa-search"></i></a>
                                                <ul class="dropdown">
                                                    <li class="row">
                                                        <div class="col-sm-4 no-padding">
                                                            <select class="selectpicker">
                      <option>VISAGE</option>
                      <option>YEUX</option>
                      <option>LEVRES</option>
                      <option>ONGLES</option>
                      <option>ACCESSOIRES</option>
                     
                    </select>
                                                        </div>
                                                        <div class="col-sm-8 no-padding">
                                                            <input type="search" class="form-control" placeholder="Search Here">
                                                            <button type="submit"> <i class="fa fa-search"></i> </button>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                        </ul>
                    </nav>
                    </div>
                    </div>
        </header>
        <!-- Header End -->
        <!--======= SUB BANNER =========-->

        <!-- CONTENT START -->
        <div class="content">

            <!-- Map -->

            <!--======= Contact Us =========-->
            <section class="section-p-30px conact-us no-padding-b animate fadeInUp" data-wow-delay="0.4s">
                <!--======= CONTACT FORM =========-->

                <div class="contact section-p-30px no-padding-b">
                    <div class="contact-form">
                        <!--======= FORM  =========-->
                        <form role="form" id="contact_form" class="contact-form" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="row">
                                        <li class="col-sm-12">
                                            <label>
                        <input type="text" class="form-control" placeholder="*PSEUDO" name="pseudo" id="pseudo" value="<?php if(isset($pseudo)){ echo($pseudo);}?>">
                      </label>
                                        </li>
                                        <li class="col-sm-12">
                                            <label>
                        <input type="email" class="form-control"  placeholder="*ADRESSE MAIL" name="mail" id="mail" value="<?php if(isset($mail)){ echo($mail);}?>">
                      </label>
                                        </li>
                                        <li class="col-sm-12">
                                            <label>
                        <input type="email" class="form-control" placeholder="*CONFIRMER VOTRE MAIL" name="mail2" id="mail2" value="<?php if(isset($mail2)){ echo($mail2);}?>">
                      </label>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="row">
                                        <li class="col-sm-12">
                                            <label>
                        <input type="password" class="form-control" name="mdp" id="mdp" placeholder="*MOT DE PASSE">
                      </label>
                                        </li>
                                        <li class="col-sm-12">
                                            <label>
                        <input type="password" class="form-control" name="mdp2" id="mdp2" placeholder="*CONFIRMER MOT DE PASSE">
                      </label>
                                        </li>
                                        <li class="col-sm-12">
                                            <label>
                        <input type="text" class="form-control" name="website" id="website" placeholder="*AGE">
                      </label>
                                        </li>
                                        <!-- captcha -->
                                          <li class="col-sm-12">
                   
    <img src="captcha.php">
    <input type="text" name="captcha">
    <input type="submit" name="">

                                        </li>
                                        <!-- captcha -->
                                        <li class="col-sm-12 no-margin">
                                        <input type="submit" value="submit" class="btn" id="btn_submit" onClick="proceed();" name="forminscription">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        </section>
        
         <?php 
         
         if(isset($erreur))
             {
                echo '<font color="red">'.$erreur."</font>";
             }

         ?>


        <!--======= BOXES =========-->
        <section class="section-p-60px contact-box animate fadeInUp " data-wow-delay="0.4s ">
            <div class="container ">
                <div class="row ">

                    <!-- Shop Location -->
                    <div class="col-md-4 animate fadeInLeft " data-wow-delay="0.4s ">
                        <div class="boxes-in ">
                            <h6>SHOP LOCATION</h6>
                            <ul class="location ">
                                <li> <i class="fa fa-location-arrow "></i>
                                    <p>
                                        5 RUE WINDERMER LA COUPOLE MEZZANINE LAC 1 1053 Tunis</p>
                                </li>
                                <li> <i class="fa fa-phone "></i>
                                    <p>Phone: (+216) 52 973 213</p>
                                </li>
                                <li> <i class="fa fa-envelope "></i>
                                    <p>MANEL.AMARA72@democompany.com</p>
                                </li>
                                <li> <i class="fa fa-clock-o "></i>
                                    <p>OPEN: 9AM - 8PM</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- NEWSLETTER -->
                    <div class="col-md-4 animate fadeInUp " data-wow-delay="0.4s ">
                        <div class="boxes-in ">
                            <h6>NETWORKS</h6>

                            <!--======= FOOTER ICONS =========-->
                            <ul class="social_icons ">
                                <li class="facebook "><a href="#. "> <i class="fa fa-facebook "></i></a></li>
                                <li class="twitter "><a href="#. "> <i class="fa fa-twitter "></i></a></li>
                                <li class="googleplus "><a href="#. "> <i class="fa fa-google "></i></a></li>
                                <li class="skype "><a href="#. "> <i class="fa fa-skype "></i></a></li>
                                <li class="pinterest "><a href="#. "> <i class="fa fa-pinterest "></i></a></li>
                                <li class="dribbble "><a href="#. "> <i class="fa fa-dribbble "></i></a></li>
                                <li class="flickr "><a href="#. "> <i class="fa fa-flickr "></i></a></li>
                                <li class="behance "><a href="#. "> <i class="fa fa-behance "></i></a></li>
                                <li class="linkedin "><a href="#. "> <i class="fa fa-linkedin "></i></a></li>
                                <li class="youtube "><a href="#. "> <i class="fa fa-youtube "></i></a></li>
                                <li class="instagram "><a href="#. "> <i class="fa fa-instagram "></i></a></li>
                                <li class="stumbleupon "><a href="#. "> <i class="fa fa-stumbleupon "></i></a></li>
                                <li class="soundcloud "><a href="#. "> <i class="fa fa-soundcloud "></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- TESTIMONIAL -->
                    <div class="col-md-4 animate fadeInRight " data-wow-delay="0.4s ">
                        <div class="boxes-in ">
                            <h6>SUPPORT PEPOLE</h6>
                            <div class="media ">
                                <div class="media-left ">
                                    <!--  Image -->
                                    <div class="avatar "> <a href="# "> <img class="media-object " src="images/avatar-11.jpg " alt=" "> </a> </div>
                                </div>
                                <!--  Details -->
                                <div class="media-body ">
                                    <h5>YASIN_GHR</h5>
                                    <p>Marketing Manager</p>
                                    <span><i class="fa fa-skype "></i> yasine.ghr</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>

        <!--======= Footer =========-->
        <footer>
            <div class="container ">
                <div class="text-center "> <a href="#. "><img src="images/fashionmakeup_dark.png " alt=" "></a><br>
                    <p class="intro-small margin-t-40 ">La marque Française de cosmétique FASHION MAKE-UP est née en 2005 Présente depuis bientôt 10 ans, nous avons su nous imposer comme un des leader du secteur avec une gamme contemporaine et des produits de grande qualité , le tout allié a des prix compétitifs Fort d’un réseau de plus de 1000 points de ventes en Europe, dont de grandes enseignes en France .

                    </p>
                </div>

                <!--  Footer Links -->
                <div class="footer-link row ">
                    <div class="col-md-6 ">
                        <ul>

                            <!--  INFOMATION -->
                            <li class="col-sm-6 ">
                                <h5>INFOMATION</h5>
                                <ul class="f-links ">
                                    <li><a href="#. ">ABOUT US</a></li>
                                    <li><a href="#. "> DELIVERY INFOMATION</a></li>
                                    <li><a href="#. "> PRIVACY & POLICY</a></li>
                                    <li><a href="#. "> TEMRS & CONDITIONS</a></li>
                                    <li><a href="#. "> MANUFACTURES</a></li>
                                </ul>
                            </li>

                            <!-- MY ACCOUNT -->
                            <li class="col-sm-6 ">
                                <h5>MY ACCOUNT</h5>
                                <ul class="f-links ">
                                    <li><a href="#. ">MY ACCOUNT</a></li>
                                    <li><a href="#. "> LOGIN</a></li>
                                    <li><a href="#. "> MY CART</a></li>
                                    <li><a href="#. "> WISHLIST</a></li>
                                    <li><a href="#. "> CHECKOUT</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <!-- Second Row -->
                    <div class="col-md-6 ">
                        <ul class="row ">

                            <!-- TWITTER -->
                            <li class="col-sm-6 ">
                                <h5>TWITTER</h5>
                                <p>Check out new work on my @Behance portfolio: "BCreative_Multipurpose Theme " http://on.be.net/1zOOfBQ </p>
                            </li>

                            <!-- FLICKR PHOTO -->
                            <li class="col-sm-6 ">
                                <h5>FLICKR PHOTO</h5>
                                <ul class="flicker ">
                                    <li><a href="#. "><img src="images/flicker-1.jpg " alt=" "></a></li>
                                    <li><a href="#. "><img src="images/flicker-2.jpg " alt=" "></a></li>
                                    <li><a href="#. "><img src="images/flicker-3.jpg " alt=" "></a></li>
                                    <li><a href="#. "><img src="images/flicker-4.jpg " alt=" "></a></li>
                                    <li><a href="#. "><img src="images/flicker-5.jpg " alt=" "></a></li>
                                    <li><a href="#. "><img src="images/flicker-6.jpg " alt=" "></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Rights -->
                <div class="rights ">
                    <p>© 2018 ARTVISION</p>
                </div>
            </div>
        </footer>
        <!-- GO TO TOP -->
        <a href="# " class="cd-top "><i class="fa fa-angle-up "></i></a>
        <!-- GO TO TOP End -->
        </div>
        <!-- Wrap End -->
        <script src="js/jquery-1.11.3.js "></script>
        <script src="js/wow.min.js "></script>
        <script src="js/bootstrap.min.js "></script>
        <script src="js/own-menu.js "></script>
        <script src="js/owl.carousel.min.js "></script>
        <script src="js/jquery.magnific-popup.min.js "></script>
        <script src="js/jquery.isotope.min.js "></script>
        <script src="js/jquery.flexslider-min.js "></script>


        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script type="text/javascript " src="rs-plugin/js/jquery.themepunch.tools.min.js "></script>
        <script type="text/javascript " src="rs-plugin/js/jquery.themepunch.revolution.min.js "></script>
        <script src="js/main.js "></script>
        <!-- begin map script-->
        <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
        <script type="text/javascript ">
            /*==========  Map  ==========*/
            var map;

            function initialize_map() {
                if ($('#map').length) {
                    var myLatLng = new google.maps.LatLng(-37.814199, 144.961560);
                    var mapOptions = {
                        zoom: 17,
                        center: myLatLng,
                        scrollwheel: false,
                        panControl: false,
                        zoomControl: true,
                        scaleControl: false,
                        mapTypeControl: false,
                        streetViewControl: false
                    };
                    map = new google.maps.Map(document.getElementById('map'), mapOptions);
                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map,
                        tittle: 'Envato',
                        icon: './images/map-locator.png'
                    });
                } else {
                    return false;
                }
            }
            google.maps.event.addDomListener(window, 'load', initialize_map);

        </script>
</body>

<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/04-contact-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:48:02 GMT -->

</html>
