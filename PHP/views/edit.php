<?PHP
include "../entities/utilisateur.php";
include "../core/utilisateurCore.php";
$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');
session_start();
if(isset($_SESSION['id'])) {

$requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
$requser->execute(array($_SESSION['id']));
$user = $requser->fetch();
}
$id=$_SESSION['id'];
if (isset($_POST['modifier']))
{
   
    if ($_POST['pseudo']!=$user['pseudo'] AND $_POST['mail']!=$user['mail'] AND $_POST['motdepasse1']==$_POST['motdepasse2']) {
        # code...
 $pseudo=$_POST['pseudo'];
    $mail=$_POST['mail'];
    $motdepasse=$_POST['motdepasse1'];
    $utilisateur1=new utilisateur($pseudo,$mail,$motdepasse);
    $utilisateurC=new utilisateurCore();
    $utilisateurC->modifierUser($utilisateur1,$id);
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/04-contact-03.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:48:06 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FASHION MAKEUP-EDITER MON PROFIL</title>
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
            <div class="position-center-center"> <img src="images/fashionmakeup.png" alt="">

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
                    <div class="language"> <a href="#." class="active">EN</a> <a href="#.">FR</a> <a href="#.">GE</a> </div>
                    <div class="top-links">
                        <ul>
                            <li><a href="#.">MON COMPTE</a></li>
                            <li><a href="disconnect.php">DÉCONNEXION</a></li>
                            <li class="font-montserrat">MON PANIER
                  
                            </li>
                        </ul>
                        <!-- Social Icons -->
                    </div>
                </div>
            </div>

            <!-- Logo -->
            <div class="container">
                <div class="logo"> <a href="#."><img src="images/fashionmakeup.PNG" alt=""></a> </div>
            </div>

            <!-- Nav -->
            <div class="sticky">
                <div class="container">
                    <nav>
                        <ul id="ownmenu" class="ownmenu">
                            <li class="active"><a href="index.html">HOME</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Index Defult</a></li>
                                    <li><a href="index-2.html">Index 2</a></li>
                                    <li><a href="index-3.html">Index 3</a></li>
                                    <li><a href="index-4.html">Index 4</a></li>
                                    <li><a href="index-5.html">Index 5</a></li>
                                    <li><a href="index-6.html">Index 6</a></li>
                                    <li><a href="index-7-construction.html">Index Construction</a></li>
                                    <li><a href="index-8-construction.html">Index Construction 2</a></li>
                                    <li><a href="index-09-furniture.html">Index Furniture</a></li>
                                    <li><a href="index-10-sports.html">Index Sports</a></li>
                                    <li><a href="index-11-beauty.html">Index Beauty</a></li>
                                    <li><a href="index-12-watches.html">Index Watches</a></li>
                                </ul>
                            </li>
                            <li><a href="12-contact.html">PAGES</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">HOME</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Index Defult</a></li>
                                            <li><a href="index-2.html">Index 2</a></li>
                                            <li><a href="index-3.html">Index 3</a></li>
                                            <li><a href="index-4.html">Index 4</a></li>
                                            <li><a href="index-5.html">Index 5</a></li>
                                            <li><a href="index-6.html">Index 6</a></li>
                                            <li><a href="index-7-construction.html">Index Construction</a></li>
                                            <li><a href="index-8-construction.html">Index Construction 2</a></li>
                                            <li><a href="index-09-furniture.html">Index Furniture</a></li>
                                            <li><a href="index-10-sports.html">Index Sports</a></li>
                                            <li><a href="index-11-beauty.html">Index Beauty</a></li>
                                            <li><a href="index-12-watches.html">Index Watches</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="05-about-us-01.html">About</a>
                                        <ul class="dropdown">
                                            <li><a href="05-about-us-01.html">About US 01</a></li>
                                            <li><a href="05-about-us-02.html">About US 02</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="02-shop-sidebar-right.html">Shop</a>
                                        <ul class="dropdown">
                                            <li><a href="02-shop-sidebar-right.html">Shop Sidebar Right</a></li>
                                            <li><a href="02-shop-sidebar-left.html">Shop Sidebar Left</a></li>
                                            <li><a href="02-shop-sidebar.html">Shop Sidebar</a></li>
                                            <li><a href="02-shop-list-view.html">Shop LIST</a></li>
                                            <li><a href="02-shop-full_width-03.html">Shop Full 2 Col</a></li>
                                            <li><a href="02-shop-full_width-02.html">Shop Full 3 Col</a></li>
                                            <li><a href="02-shop-full_width-01.html">Shop Full 4 Col</a></li>
                                            <li><a href="02-shop-details-1.html">Shop Detail</a></li>
                                            <li><a href="02-shop-details-2.html">Shop Detail 2</a></li>
                                            <li><a href="02-shop-details-3.html">Shop Detail 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="09-01-portfolio-grid.html">PORTFOLIO</a>
                                        <ul class="dropdown">
                                            <li><a href="09-01-portfolio-grid.html">PORTFOLIO GRID </a>
                                                <ul class="dropdown">
                                                    <li><a href="09-01-portfolio-grid.html">PORTFOLIO GRID 02 COL</a></li>
                                                    <li><a href="09-02-portfolio-grid.html">PORTFOLIO GRID 03 COL</a></li>
                                                    <li><a href="09-03-portfolio-grid.html">PORTFOLIO GRID 04 COL</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="09-01-portfolio-grid.html">PORTFOLIO Default </a>
                                                <ul class="dropdown">
                                                    <li><a href="09-05-portfolio-grid-default.html">PORTFOLIO 02 COL</a></li>
                                                    <li><a href="09-06-portfolio-grid-default.html">PORTFOLIO 03 COL</a></li>
                                                    <li><a href="09-07-portfolio-grid-default.html">PORTFOLIO 04 COL</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="09-03-portfolio-full-width.html">PORTFOLIO FULLWIDTH</a></li>
                                            <li><a href="09-08-portfolio-masonry.html">PORTFOLIO MANSORY 01</a></li>
                                            <li><a href="09-09-portfolio-masonry.html">PORTFOLIO MANSORY 02</a></li>
                                            <li><a href="09-10-portfolio-single.html">Portfolio Single 01</a></li>
                                            <li><a href="09-11-portfolio-single.html">Portfolio Single 02</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="04-contact-01.html">Contact</a>
                                        <ul class="dropdown">
                                            <li><a href="04-contact-01.html">Contact US 01</a></li>
                                            <li><a href="04-contact-02.html">Contact US 02</a></li>
                                            <li><a href="04-contact-03.html">Contact US 03</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="03-pay-checkout.html">Pay Checkout</a></li>
                                    <li><a href="03-pay-viewcart.html">Pay Viewcart</a></li>
                                    <li><a href="06-404-page.html">404 Page</a></li>
                                    <li><a href="07-faqs-page.html">Faqs Pages</a></li>
                                    <li><a href="10-coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li><a href="02-shop-sidebar-right.html">SHOP</a>
                                <!--======= MEGA MENU =========-->
                                <div class="megamenu full-width">
                                    <div class="row nav-post">
                                        <div class="col-sm-3">
                                            <h6>Shop Pages</h6>
                                            <ul>
                                                <li><a href="02-shop-sidebar-right.html">Shop Sidebar Right</a></li>
                                                <li><a href="02-shop-sidebar-left.html">Shop Sidebar Left</a></li>
                                                <li><a href="02-shop-sidebar.html">Shop Sidebar</a></li>
                                                <li><a href="02-shop-list-view.html">Shop LIST</a></li>
                                                <li><a href="02-shop-full_width-03.html">Shop Full 2 Col</a></li>
                                                <li><a href="02-shop-full_width-02.html">Shop Full 3 Col</a></li>
                                                <li><a href="02-shop-full_width-01.html">Shop Full 4 Col</a></li>
                                                <li><a href="02-shop-details-1.html">Shop Detail</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h6>Blog Pages</h6>
                                            <ul>
                                                <li><a href="08-01-blog-mansory.html">Blog Mansory</a></li>
                                                <li><a href="08-02-blog-left-side-bar.html">Blog Left Side Bar</a></li>
                                                <li><a href="08-02-blog-right-side-bar.html">Blog Right Side Bar</a></li>
                                                <li><a href="08-04-blog-medium-image.html">Blog Medium Image</a></li>
                                                <li><a href="08-05-blog-large-images.html">Blog Large Images</a></li>
                                                <li><a href="08-06-blog-02-col.html">Blog 02 Col</a></li>
                                                <li><a href="08-07-blog-03-col.html">Blog 03 Col</a></li>
                                                <li><a href="08-08-blog-04-col.html">Blog 04 Col</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h6>Portfolio Pages</h6>
                                            <ul>
                                                <li><a href="09-01-portfolio-grid.html">PORTFOLIO GRID 02 COL</a></li>
                                                <li><a href="09-02-portfolio-grid.html">PORTFOLIO GRID 03 COL</a></li>
                                                <li><a href="09-03-portfolio-grid.html">PORTFOLIO GRID 04 COL</a></li>
                                                <li><a href="09-03-portfolio-full-width.html">PORTFOLIO FULLWIDTH</a></li>
                                                <li><a href="09-05-portfolio-grid-default.html">PORTFOLIO 02 COL</a></li>
                                                <li><a href="09-06-portfolio-grid-default.html">PORTFOLIO 03 COL</a></li>
                                                <li><a href="09-07-portfolio-grid-default.html">PORTFOLIO 04 COL</a></li>
                                                <li><a href="09-08-portfolio-masonry.html">PORTFOLIO MANSORY 01</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h6>Portfolio Pages</h6>
                                            <ul>
                                                <li><a href="09-09-portfolio-masonry.html">PORTFOLIO MANSORY 02</a></li>
                                                <li><a href="09-10-portfolio-single.html">Portfolio Single 01</a></li>
                                                <li><a href="09-11-portfolio-single.html">Portfolio Single 02</a></li>
                                                <li><a href="05-about-us-01.html">About US 01</a></li>
                                                <li><a href="05-about-us-02.html">About US 02</a></li>
                                                <li><a href="04-contact-01.html">Contact US</a></li>
                                                <li><a href="03-pay-checkout.html">Pay Checkout</a></li>
                                                <li><a href="03-pay-viewcart.html">Pay Viewcart</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="index.html">LOOKBOOK</a>
                                <!--======= MEGA MENU =========-->
                                <div class="megamenu full-width look-book">
                                    <div class="row nav-post">
                                        <div class="col-sm-2">
                                            <h6>Shop</h6>
                                            <ul>
                                                <li><a href="#."> MEN’S</a></li>
                                                <li><a href="#."> WOMAN</a></li>
                                                <li><a href="#."> KID’S</a></li>
                                                <li><a href="#."> BAGS & SHOES</a></li>
                                                <li><a href="#."> SEASONAL</a></li>
                                                <li><a href="#."> LOOKBOOK</a></li>
                                                <li><a href="#."> </a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="nav-img"> <a href="#"> <img class="media-object img-responsive" src="images/nav-img-1.jpg" alt=""> </a> </div>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Oversized T-Shirt Dress</h6>
                                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                                                    <a href="#.">READ MORE</a> </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="nav-img"> <a href="#"> <img class="media-object img-responsive" src="images/nav-img-4.jpg" alt=""> </a> </div>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Oversized T-Shirt Dress</h6>
                                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                                                    <a href="#.">READ MORE</a> </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="nav-img"> <a href="#"> <img class="media-object img-responsive" src="images/nav-img-2.jpg" alt=""> </a> </div>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Oversized T-Shirt Dress</h6>
                                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                                                    <a href="#.">READ MORE</a> </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="nav-img"> <a href="#"> <img class="media-object img-responsive" src="images/nav-img-3.jpg" alt=""> </a> </div>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Oversized T-Shirt Dress</h6>
                                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                                                    <a href="#.">READ MORE</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="08-01-blog-mansory.html">BLOG</a>
                                <ul class="dropdown">
                                    <li><a href="08-01-blog-mansory.html">Blog Mansory</a></li>
                                    <li><a href="08-02-blog-left-side-bar.html">Blog Left Side Bar</a></li>
                                    <li><a href="08-02-blog-right-side-bar.html">Blog Right Side Bar</a></li>
                                    <li><a href="08-04-blog-medium-image.html">Blog Medium Image</a></li>
                                    <li><a href="08-05-blog-large-images.html">Blog Large Images</a></li>
                                    <li><a href="08-06-blog-02-col.html">Blog 02 Col</a></li>
                                    <li><a href="08-07-blog-03-col.html">Blog 03 Col</a></li>
                                    <li><a href="08-08-blog-04-col.html">Blog 04 Col</a></li>
                                </ul>
                            </li>
                            <li><a href="09-01-portfolio-grid.html">PORTFOLIO </a>
                                <ul class="dropdown">
                                    <li><a href="09-01-portfolio-grid.html">PORTFOLIO GRID </a>
                                        <ul class="dropdown">
                                            <li><a href="09-01-portfolio-grid.html">PORTFOLIO GRID 02 COL</a></li>
                                            <li><a href="09-02-portfolio-grid.html">PORTFOLIO GRID 03 COL</a></li>
                                            <li><a href="09-03-portfolio-grid.html">PORTFOLIO GRID 04 COL</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="09-01-portfolio-grid.html">PORTFOLIO Default </a>
                                        <ul class="dropdown">
                                            <li><a href="09-05-portfolio-grid-default.html">PORTFOLIO 02 COL</a></li>
                                            <li><a href="09-06-portfolio-grid-default.html">PORTFOLIO 03 COL</a></li>
                                            <li><a href="09-07-portfolio-grid-default.html">PORTFOLIO 04 COL</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="09-03-portfolio-full-width.html">PORTFOLIO FULLWIDTH</a></li>
                                    <li><a href="09-08-portfolio-masonry.html">PORTFOLIO MANSORY 01</a></li>
                                    <li><a href="09-09-portfolio-masonry.html">PORTFOLIO MANSORY 02</a></li>
                                    <li><a href="09-10-portfolio-single.html">Portfolio Single 01</a></li>
                                    <li><a href="09-11-portfolio-single.html">Portfolio Single 02</a></li>
                                </ul>
                            </li>
                            <li><a href="04-contact-01.html">CONTACT</a>
                                <ul class="dropdown">
                                    <li><a href="04-contact-01.html">Contact US 01</a></li>
                                    <li><a href="04-contact-02.html">Contact US 02</a></li>
                                    <li><a href="04-contact-03.html">Contact US 03</a></li>
                                </ul>
                            </li>

                            <!--======= Shopping Cart =========-->
                            <li class="shop-cart"><a href="#."><i class="fa fa-shopping-cart"></i></a> <span class="numb">2</span>
                                <ul class="dropdown">
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="images/item-col-img-1.jpg" alt="..."> </a> </div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">DRAEY TRENCH COAT</h6>
                                                <span class="price">129.00 USD</span> <span class="qty">QTY: 01</span> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="images/item-col-img-2.jpg" alt="..."> </a> </div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">DRAEY TRENCH COAT</h6>
                                                <span class="price">129.00 USD</span> <span class="qty">QTY: 01</span> </div>
                                        </div>
                                    </li>
                                    <li class="no-padding no-border">
                                        <h5 class="text-center">SUBTOTAL: 258.00 USD</h5>
                                    </li>
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
                      <option>MEN'S</option>
                      <option>WOMENS</option>
                      <option>KIDS</option>
                      <option>FASHION</option>
                      <option>MEN'S</option>
                      <option>WOMENS</option>
                      <option>KIDS</option>
                      <option>FASHION</option>
                      <option>MEN'S</option>
                      <option>WOMENS</option>
                      <option>KIDS</option>
                      <option>FASHION</option>
                      <option>MEN'S</option>
                      <option>WOMENS</option>
                      <option>KIDS</option>
                      <option>FASHION</option>
                      <option>MEN'S</option>
                      <option>WOMENS</option>
                      <option>KIDS</option>
                      <option>FASHION</option>
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
        <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
            <div class="container">
                <h4>EDITER MON PROFIL</h4>
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="#">PROFIL</a></li>
                    <li class="active">EDITION</li>
                </ol>
            </div>
        </section>

        <!-- CONTENT START -->
        <div class="content">

            <!--======= Contact Us =========-->
            <section class="conact-us conact-us-2 conact-us-3 no-padding-b">
                <!--======= CONTACT FORM =========-->
                <div class="row">

                    <!-- Map -->

                    <!-- Contact Form -->

                    <div class="col-sm-6 contact-3 animate fadeInRight" data-wow-delay="0.4s">
                        <!-- TITTLE -->
                        <div class="tittle">
                            <h5>EDITON DE PROFILE</h5>

                        </div>
                        <div class="contact">
                            <div class="contact-form">
                                <!--======= FORM  =========-->
                                <form role="form" id="contact_form" class="contact-form" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="row">
                                                <li class="col-sm-12">
                                                    <label>
                          <input type="text" class="form-control" name="pseudo" id="name" placeholder="*PSEUDO">
                        </label>
                                                </li>
                                                <li class="col-sm-12">
                                                    <label>
                          <input type="email" class="form-control" name="mail" id="email" placeholder="*EMAIL">
                        </label>
                                                </li>
                                                <li class="col-sm-12">
                                                    <label>
                          <input type="text" class="form-control" name="motdepasse1" id="company" placeholder="*MOT DE PASSE">
                        </label>
                                                </li>
                                                <li class="col-sm-12">
                                                    <label>
                          <input type="text" class="form-control" name="motdepasse2" id="company" placeholder="*CONFIRMER VOTRE MOT DE PASSE">
                        </label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12">
                                            <ul class="row">
                                                <li class="col-sm-12 no-margin">
                                                    <button type="submit" value="submit" class="btn" id="btn_submit" onClick="proceed();" name="modifier">Mettre a jour</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
 
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!--======= Footer =========-->
     
        <!-- GO TO TOP -->
        <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a>
        <!-- GO TO TOP End -->
    </div>
    <!-- Wrap End -->
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/own-menu.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>


    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="js/main.js"></script>
    <!-- begin map script-->
    <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
    <script type="text/javascript">
        /*==========  Map  ==========*/

    </script>
</body>

<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/04-contact-03.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:48:06 GMT -->

</html>
