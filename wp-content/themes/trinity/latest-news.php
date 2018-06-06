<?php
/**

	Template Name:  LatestNews
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
.owl-pagination{
  display:none;
}
</style>
<div class="container-fluid">
  <?php  echo do_shortcode('[awl-slider id=6590]');?>
</div>

<div class="container light-overlay-content">
	   <div class="row">
		   <div class="col-lg-12">


  <!-- custom post type restaurant !-->

		 <?php
  global $post;
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $query_args  = array(
    'post_type' => 'latestnews',	
    'posts_per_page' => '10',
      'order' => 'DESC',
    'paged' => $paged

  );
  $the_query = new WP_Query( $query_args );
	$counter=0;
?>


  		<div class="latest-news" style="margin-top:0!important;padding-top:0!important">
        
	<div class="entry-content">
		<?= get_post_field('post_content', $post->ID) ?>
 	</div><br>
    <br>


	  			<!-- left col !-->
                <div class="row">
 <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>




	<div class="col-lg-6 latest-news-post">
		
		<!-- title !-->
                    <div class="title" style="padding-bottom:10px">
                      <?php 
						$external_link = get_post_custom_values($key = 'link-external'); 
						$linkurl=$external_link[0];
						if($external_link[0]=='') $linkurl=get_permalink();
					  ?>
                    	<h3 style="padding-bottom:0px;margin-bottom:0px">
                      
                        <a href="<?php echo $linkurl;?>" <? if($external_link[0]!='') echo ' target="_blank"'; ?>>
                          <?php the_title(); ?>
                        </a>
                      </h3>
                      <?php $post_date = get_the_date( 'F j, Y' ); ?>
                      <small><?php echo $post_date; ?></small>
                    </div>
                    <!-- eof title !-->
					
                     <!-- excerpt box !-->
                     
                          <?php the_excerpt(); ?>
 						
                     <!-- eof excerpt box !-->

                    </div>
<?php $counter++;
                  if ($counter % 2 == 0) {
                  echo '</div><div class="row">';
                }
                endwhile;  ?>

<?php if (function_exists("pagination")) {
	echo '<div class="col-lg-12">';
    pagination($the_query->max_num_pages);
	echo '</div></div>';
} ?>


<?php else: ?>
  <article>
    <h1>Sorry...</h1>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  </article>
<?php endif; ?>
		
	</div>
	</div>
	<!-- eof left col !-->
  		</div>
   		
 

</div>
     <!-- eof custom post type restaurant !-->



		   </div>
	   </div>
</div>


<?php get_footer(); ?>
