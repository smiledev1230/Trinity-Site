<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<div class="latest-news-post">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<p align="center"><?php
		// Post thumbnail.
		if ( has_post_thumbnail() ) {
    the_post_thumbnail();
} 
	?>
	</p><br>

 <div class="title">
 		<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
 </div>
 
	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_excerpt( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

		 		?>
		 		
		 		<a href="<?php the_permalink(); ?>">
		 		<button type="button" class="btn btn-primary">CONTINUE READING</button>
		 		</a>
		 		
	</div><!-- .entry-content -->

	<?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;
	?>

 		<?php //twentyfifteen_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
 
</article>
</div><!-- #post-## --><br><br>
