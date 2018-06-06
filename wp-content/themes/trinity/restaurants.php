<?php

/**



	Template Name: Restaurants
 * The template for displaying pages

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages and that

 * other "pages" on your WordPress site will use a different template.

 *

 * @package WordPress

 * @subpackage Twenty_Fifteen

 * @since Twenty Fifteen 1.0

 */



get_header(); ?>





<div class="container light-overlay-content">

	   <div class="row">

		   <div class="col-lg-12">



<h1>RESTAURANT PARTNERS</h1>



  <!-- custom post type restaurant !-->



		 <?php

  global $post;

  $myposts = get_posts(array(

    'post_type' => 'restaurants',

    'numberposts' => '-1',

    'orderby' => 'date',

    'order' => 'ASC',



  ));



 foreach($myposts as $post):

?>



<?php setup_postdata($post) ?>
    <a class="anchorlinks" id="<?php echo str_replace(" ", "-", get_the_title()) ; ?>"></a>

<div class="custom-posts">

 		<div class="row">



	<!-- left col !-->

	<div class="col-lg-6 custom-post-box offset" style="min-height:340px!important">

		<?php the_content(''); ?>

	</div>

	<!-- eof left col !-->



	<!-- right col !-->

	<div class="col-lg-6 gallery-box">

		<?php the_excerpt(''); ?>

	</div>

	<!-- eo right col !-->



 		</div>

</div>

<?php endforeach; wp_reset_query(); ?>



    <!-- eof custom post type restaurant !-->



<!-- incubate with us !-->

<a href="<?php echo esc_url( home_url( '/incubate' ) ); ?>">

	<button type="button" class="btn btn-primary btn-lg button-incubate">Incubate with us</button>

</a><br>

<!-- eof incubate with us !-->
</div></div></div>


<div class="container blue-overlay-content" style="display:none">

<div class="row">
		   <div class="col-lg-12">

<h1 style="color:white">Restaurant Neighbors</h1>

  <!-- custom post type restaurant !-->

		 <?php
  global $post;
  $myposts = get_posts(array(
    'post_type' => 'incubators',
    'numberposts' => '-1',
    'orderby' => 'title',
    'order' => 'ASC',

  ));

 foreach($myposts as $post):
?>

<?php setup_postdata($post) ?>
<div class="custom-posts">
 		<div class="row">

    <a class="anchorlinks" id="<?php echo str_replace(" ", "-", get_the_title()) ; ?>"></a>
	<!-- left col !-->
	<div class="col-lg-6 custom-post-box" id="<?php echo get_the_title(); ?>">
		<?php the_content(''); ?>
	</div>
	<!-- eof left col !-->

	<!-- right col !-->
	<div class="col-lg-6 gallery-box">
		<?php the_excerpt(''); ?>
	</div>
	<!-- eo right col !-->

 		</div>
</div>
<?php endforeach; wp_reset_query(); ?>


		   </div>

	   </div>

</div>
<?php get_footer(); ?>

