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

    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">

    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">

    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">

    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">

    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">

    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">

    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">

    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">

    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">

    <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">

    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">

    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">

    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">

    <link rel="manifest" href="/favicon/manifest.json">

    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">

	<link rel="profile" href="http://gmpg.org/xfn/11">

<meta name="description" content="Trinity Groves has something for everyone. Just across the Margaret Hunt Hill Bridge explore an amazing selection of restaurants and retail shops." />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

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

	<?php wp_head(); ?>
    <script>
	jQuery(document).ready(function(){
// Add smooth scrolling to all links
jQuery("a").on('click', function(event) {

// Make sure this.hash has a value before overriding default behavior
if (this.hash !== "") {
  // Prevent default anchor click behavior
  event.preventDefault();

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
  jQuery('html, body').animate({
    scrollTop: jQuery(hash).offset().top
  }, 800, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
  });
} // End if
});
});
	</script>
</head>



<body >

<!-- header starts here !-->

   <header>

	   <div class="container">

		   <div class="row row-offcanvas row-offcanvas-right">

			   

			   <!-- logo !-->

			   <div class="col-lg-2 col-md-2 col-sm-2">

				   <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/img/general/trinitygroves.png" class="img-responsive logo"></a>

			   </div>

			   <!-- eof logo !-->

			   

			   <!-- search / social / nav !-->

			   <div class="col-lg-7 col-md-6 col-sm-6">

				   <div class="row">

					   

				   <!-- search / social !-->

				   <div class="col-lg-12 col-md-12 col-sm-12 search-social">

					   <div class="row searchdiv">

						   

						   <!-- search !-->

						   <div class="col-lg-4 col-md-4 col-sm-4">

							   <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">

	<div>

 		<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control"  placeholder="Search" />

		</div>

</form>

  						   </div>

						   <!-- eof search !-->

						   

                            <!-- social !-->

                            <div class="col-lg-8 col-md-8 col-sm-8">

                                

                                <div class="center-row socmediadiv">

                                    <a href="https://www.facebook.com/TrinityGroves" target="_blank"><i class="fa fa-facebook-square fa-2x socmediatop"></i></a>

                                    <a href="http://instagram.com/trinitygroves" target="_blank"><i class="fa fa-instagram fa-2x socmediatop"></i></a>

                                    <a href="http://www.pinterest.com/trinitygroves/" target="_blank"><i class="fa fa-pinterest-square fa-2x socmediatop"></i></a>

                                    <a href="https://twitter.com/trinitygroves" target="_blank"> <i class="fa fa-twitter-square fa-2x socmediatop"></i></a>

                                    <a href="http://www.trinitygroves.com/blog/" > <i class="fa fa-rss-square fa-2x socmediatop"></i></a>

                                    <span class="appdownload">
                                    <a href="https://itunes.apple.com/us/app/trinity-groves/id1073740899?ls=1&mt=8" target="_blank" class="app">

                                        <img src="http://www.trinitygroves.com/wp-content/uploads/2016/05/Download_on_the_App_Store_Badge.png" alt="get app now" height="33px" style="vertical-align:top;top:0;margin-top:1px" /></a>
                                        <a href="https://play.google.com/store/apps/details?id=com.younity360.trinity_groves" target="_blank" class="app">

                                        <img src="http://www.trinitygroves.com/wp-content/uploads/2016/06/googleplay.png" alt="get app now" height="33px" style="vertical-align:top;top:0;margin-top:1px" /></a></span>


                                </div>

                            

                            </div>

                            <!-- eof social !-->

						   

					   </div>

				   </div>

				   <!-- eof search / social !-->

				   

				   <!-- the nav !-->

				   <div class="col-lg-12 col-md-12 col-sm-12 w-50">

				   <div class="navbar navbar-default navbar-static-top topnav">

 

        <div class="navbar-header">

            <button type="button" class="navbar-toggle toggle-topnav" data-toggle="collapse" data-target=".main-nav">

                <i class="fa fa-bars"></i> navigation

            </button>

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

                    

                    <div class="navbar navbar-default navbar-static-top makeareservation">

                        <div class="navbar-header">

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

                        <div class="collapse navbar-collapse reservation-nav">

                            <?php if ( !dynamic_sidebar('Open Table Header') ) : ?>

                            <?php endif; ?>

                        </div>

                    </div> 

                 

                

                </div>

			   <!-- eof make a reservation !-->

			   

		   </div>

	   </div>

   </header>

   <!-- header ends here !-->

