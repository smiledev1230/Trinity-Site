<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <meta name="description" content="Trinity Groves has something for everyone. Just across the Margaret Hunt Hill Bridge explore an amazing selection of restaurants and retail shops." />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/scrollto.js"></script>
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    <!-- fonts !-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <!-- eof fonts !-->
    <!-- font awesome icons !-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- eof font awseome icons !-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php wp_head(); ?>
    <style>
      .current-menu-ancestor, .current-menu-parent {
        color: #000;
        background-image: none !important;
    }      
      header .topnav .navbar-nav>li>a {
        font-weight: 300;
      }
      header .topnav .navbar-nav>li>a:hover {
          font-weight: 400;
          background-image: none;
          color:#0066cc;
      }
      .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover {
          font-weight: 400;
          background-image: none;
          color:#0066cc;
    }

    .header-fixed .topnav .navbar-nav>li>a {
      color: #000;
      text-decoration: none;
      text-transform: uppercase;
      font-family: 'Oswald', sans-serif;
      font-weight: 300;
      font-size: 18px;
  }

  .header-fixed .navbar-default {
      background-color: #fff;
      border-color: #fff;
  }

  .header-fixed{
    background: #fff;
      position: fixed;
      top: 0;
    left:0;
      width: 100%;
      text-align: center;
      height: 50px;
      z-index:999999;
  }
  .header-fixed .topnav .caret {
    display: none;
  }
  .header-fixed .topnav .dropdown-menu {
    background: #007fbd;
  }
  .header-fixed .topnav .dropdown-menu>li>a:hover {
    background: rgba(0, 0, 0, 0);
  }
  .header-fixed .topnav .dropdown-menu>li>a {
      color: #fff;
  }
  footer {
    background: #0066cc;
  }
  .btn-primary {
    color: #fff;
    background-color: #063d6f;
    border-color: #063d6f;
}

header {
    padding-bottom: 0px;
}

/* Mobile Menu */
.mobile-menu .navbar-default .navbar-nav>li{
 border-bottom:2px solid #0066cc; 
padding-bottom:5px;


}

.mobile-menu .navbar-nav{
width:60%;
float:right;
}

.mobile-menu .navbar-collapse{
  background-color:#ccc !important;
}

.mobile-menu .dropdown-menu>li>a {

    text-align: right;
}

.mobile-mewnu .navbar-fixed-bottom .navbar-collapse, .navbar-fixed-top .navbar-collapse {
    max-height: 500px;
}

.mobile-menu .navbar-default {
background-color: transparent;
border-color:transparent;
}

.mobile-menu .navbar-header{
  background-color:#063d6f !important;
}

.mobile-menu .navbar-nav{
  background:#fff;

}

.mobile-menu .navbar-nav{
  margin-top:0px !important;
  margin-right:0px !important;
padding-right:10px;
}

.mobile-menu .navbar-default .navbar-collapse, .navbar-default .navbar-form {
    border-color: transparent;;
}
.mobile-nav-menu{
  display: none;
  display: table;
  margin: 0 auto;
  border-bottom: 3px solid #0066cc !important;  
}


@-moz-document url-prefix() { 
  .mobile-nav-menu{
    border-bottom: none !important;  
  }
}
.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover{
    color: #0066cc;
    background-image: none !important;
    font-weight: 400;
}
@media screen {
  
}
/* h1{ position:relative; }
h1 span{ position:absolute; top:-80px;} */

/* custom header */
header .custom-container {
  width: 100%;
}
header .white-logo {
  background-color: #063d6f;
  border-color: #063d6f;
  margin-bottom: 5px;
}
header .row.searchdiv {
  float: right;
}
header .search-box {
  right: 362px;
  position: absolute;
}
header .socmediadiv {
  float: right;
  margin-left: 30px;
  margin-right: 10px;
}
header .visit-restaurant {
  float: right;
}
header .vist-right-button {
  padding-top: 20px;
}
header .vist-right-button>div:first-child {
  display: none;
}
header .navbar-static-top.topnav {
  float: right;
  min-height: 30px;
}
header  .topnav .navbar-nav>li>a {
  padding-top: 0px;
}

header.fixed{
  position:fixed;
  top:0px;
}
header.fixed-header{
  position:fixed;
  top:0px;
  z-index:99999999;
  width:100%;
  display: block !important;
  opacity: 1 !important;
}
body{
  padding-top:120px;
}
.textwidget #eapps-instagram-feed-1 {
  width: auto;
  margin: 0px 15px;
}
@media(max-width: 1199px) {
  header .logo {
    margin-left: 50px;
    margin-right: auto;
    float: left;
  }
  header .search-box {
    left: 0px;
    margin-left: 50px;
  }
  header .vist-right-button {
    padding-top: 26px;
  }
}
@media screen and (max-width: 992px) and (min-width: 768px) {
  header .logo {
    top: 0px;
  }
}
@media(max-width:767px) {
  body{
    padding-top: 70px;
  }
  header .logo {
    margin-left: 20px;
  }
  .navbar-default {
      background-color: #fff;
  }
  .navbar-default .navbar-toggle .icon-bar {
      background-color: #fff;
  }
  .navbar-toggle {
    background-color: #368c62;
    border: 0px solid #368c62;
  }
  .navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover {
    background-color: #368c62;
  }
  .navbar-default .navbar-toggle {
      border-color: #368c62;
  }
}
@media(max-width:650px) {
  body {
      padding-top: 54px;
  }
}
    </style>
<script>
/*$(window).scroll( function() {
    if( $(this).scrollTop() > 0 ) {
        $("#mobilelogo").hide();
        $(".mobile-menu .navbar-header").css('background-color','transparent');
    }
    else {
        $("#mobilelogo").show();
        $(".mobile-menu .navbar-header").css('background-color','#fff');
    }
});*/
</script>
</head>
<body >
<!-- header starts here !-->
   <header class="fixed-header">
       <div class="custom-container">
           <div class="row row-offcanvas row-offcanvas-right hidden-xs">
               <!-- search / social / nav !-->
               <div class="col-lg-9 col-md-8 col-sm-8 menu-div">
                  <!-- logo !-->
                   <div class="row white-logo">
                     <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="/white-logo.png" class="img-responsive logo"></a>
                   </div>
                  <!-- eof logo !-->
                   <div class="row">
                   <!-- search / social !-->
                   <div class="col-lg-12 col-md-12 col-sm-12 search-social hidden-xs">
                       <div class="row searchdiv">
                           <!-- search !-->
                              <div class="search-box">
                               <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                 <div>
                                       <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control"  placeholder="Search" />
                                 </div>
                                </form>
                              </div>
                              <div class="visit-restaurant">
                                  <a href="https://www.trinitygroves.com/contact/" rel="noopener"><button class="btn btn-primary" type="button">Visit Our Restaurants</button></a>
                              </div>                       
                              <div class="center-row socmediadiv">
                                  <a href="https://www.facebook.com/TrinityGroves" target="_blank"><i class="fa fa-facebook-square fa-2x socmediatop"></i></a>
                                  <a href="http://instagram.com/trinitygroves" target="_blank"><i class="fa fa-instagram fa-2x socmediatop"></i></a>
                                  <a href="http://www.pinterest.com/trinitygroves/" target="_blank"><i class="fa fa-pinterest-square fa-2x socmediatop"></i></a>
                                  <a href="https://twitter.com/trinitygroves" target="_blank"> <i class="fa fa-twitter-square fa-2x socmediatop"></i></a>
                                  <a href="http://www.trinitygroves.com/blog/" > <i class="fa fa-rss-square fa-2x socmediatop"></i></a>
                              </div>
                       </div>
                   </div>
                   <!-- eof search / social !-->

                   <!-- the nav !-->
                   <div class="col-lg-12 col-md-12 col-sm-12 w-50">
                   <div class="navbar navbar-default navbar-static-top topnav">
                    <div class="navbar-header" id="navibar">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>
                    </div>
                     <?php
                        wp_nav_menu( array(
                                'menu'              => 'primary',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'navbar-collapse collapse main-nav',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                            );
                        ?>
                    </div>
                   </div>
                   <!-- eof the nav !-->



                   <!-- make a reservation !-->



                <div class="col-lg-12 col-md-12 col-sm-12 makeareservation-line mobile-hr w-50">



                    



                    <div class="navbar navbar-default navbar-static-top makeareservation" >



                        <div class="navbar-header" >



                            <button type="button" class="navbar-toggle toggle-reservation" data-toggle="collapse" data-target=".reservation-nav">



                                <i class="fa fa-calendar"></i>  Make a reservation 



                            </button>



                        </div>



                        <div class="collapse navbar-collapse reservation-nav">



                            <?php if ( !dynamic_sidebar('Open Table Header') ) : ?>



                            <?php endif; ?>



                        </div>



                    </div> 



                 



                



                </div>



               <!-- eof make a reservation !-->



                   



                   </div>



               </div>



               <!-- eof search / social / nav !-->



               



               <!-- make a reservation !-->



                <div class="col-lg-3 col-md-4 col-sm-4  makeareservation-line desktop-hr">



                    



                    <div class="navbar navbar-default navbar-static-top makeareservation">



                        <div class="navbar-header">



                            <button type="button" class="navbar-toggle toggle-reservation" data-toggle="collapse" data-target=".reservation-nav">



                                <i class="fa fa-calendar"></i>  Make a reservation 



                            </button>



                        </div>



                        <div class="collapse navbar-collapse reservation-nav vist-right-button">



                            <?php if ( !dynamic_sidebar('Open Table Header') ) : ?>



                            <?php endif; ?>



                        </div>



                    </div> 



                 



                



                </div>



               <!-- eof make a reservation !-->



               



           </div>
           
           <div class="hidden-sm hidden-md hidden-lg mobile-menu">
             <nav class="navbar navbar-default  navbar-fixed-top">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display --><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ns-navbar" aria-expanded="false" style="margin-right: 19px;height: 38px;">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                  <div class="navbar-header">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" id="mobilelogo"><img src="/white-logo.png" class="img-responsive logo" style="max-width:70%"></a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="ns-navbar" style="text-align:right;background: transparent !important;">
                      <?php 
                        wp_nav_menu(
                            array(
                                'theme_location'=>'primary',
                                'depth'=>2,
                                'menu_class'=>'nav navbar-nav navbar-right',
                                'container'=>false,
                                'walker'=>new wp_bootstrap_navwalker()
                              )
                          );

                      ?>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>

              <div class="make-reservation-div" id="make-reservation-div" style="margin: 35px;margin-bottom: 10px;display:none;">
                <?php if ( !dynamic_sidebar('Open Table Header') ) : ?>



                <?php endif; ?>
                <div class="text-center">
                  <button id="cancel-reservation" class="btn btn-danger btn-sm" type="button" style="margin-top: 35px;">Cancel</button>  
                </div>
                

              </div>
              
           </div>



       </div>



   </header>
   



   <!-- header ends here !-->



