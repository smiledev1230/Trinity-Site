<?php
/**
 Template Name:  VideosPage
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
<style>
.videosidebar{
  height: 500px;
  overflow: auto;}
</style>
	<div class="container light-overlay-content">
	   <div class="row">
		   
		   <!-- videos col !-->
		   <div class="col-lg-9" style="width:73%">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'videos' );

			// If comments are open or we have at least one comment, load up the comment template.
		//	if ( comments_open() || get_comments_number() ) :
			//	comments_template();
		//	endif;

		// End the loop.
		endwhile;
		?>

		</div>
		<!-- eof videos col -->
		
		<!-- videos sidebar !-->
<div class="col-lg-3 videosidebar"  style="width:25%;margin-left:10px">
	<?php if ( !dynamic_sidebar('Videos Column') ) : ?>
     <?php endif; ?>
</div>
<!-- eof videos sidebar !-->

		
	</div>
	</div>
<?php get_footer(); ?>
