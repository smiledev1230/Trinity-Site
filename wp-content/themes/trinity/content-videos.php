<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

 

 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		//twentyfifteen_post_thumbnail();
	?>

 		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
 
	<div class="entry-content">
		<?php the_content(); ?>
 	</div><!-- .entry-content -->

 
</article><!-- #post-## -->
 


 