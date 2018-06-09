<?php

/**

 * The template for displaying the footer

 *

 * Contains the closing of the "site-content" div and all content after.

 *

 * @package WordPress

 * @subpackage Twenty_Fifteen

 * @since Twenty Fifteen 1.0

 */

?>



	 <!-- content box !-->

   <div class="container light-overlay-footer">

	   <div class="row footer-box">

		   

		   <!-- social box !-->

		   <div class="col-hr col-xs-6 col-sm-3 ">

			   <h4>Facebook</h4>
			   
			   <div class="footer-col">

			   <div id="fb-root"></div>

<script>(function(d, s, id) {

  var js, fjs = d.getElementsByTagName(s)[0];

  if (d.getElementById(id)) return;

  js = d.createElement(s); js.id = id;

  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1606197766301113";

  fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));</script>



			 <div class="fb-page" 

  data-href="https://www.facebook.com/TrinityGroves"

  data-width="380" 

	  data-height="260"

		  data-small-header="true"

  data-hide-cover="false"

  data-show-facepile="true" 

  data-show-posts="true"></div>

			   </div>

  		   </div>

		   <!-- eof social box !-->

		   

		   <!-- social box !-->

		   <div class="col-hr col-xs-6 col-sm-3 ">

			   <h4>Instagram</h4>
 			 
<?php if ( !dynamic_sidebar('Instagram Newsletter') ) : ?>
<?php endif; ?>


 		   </div>

		   <!-- eof social box !-->

		   

		    <!-- social box !-->

		   <div class="col-hr col-xs-6 col-sm-3 ">

			   <h4>Latest Tweets</h4>

			 <div class="footer-col">  

			 <a class="twitter-timeline" href="https://twitter.com/trinitygroves" data-widget-id="683755805762568193">Tweets by @trinitygroves</a>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

			 </div>

		   </div>

		   <!-- eof social box !-->

		   

		   <!-- social box !-->

		   <div class="col-hr col-xs-6 col-sm-3  footer-latest-news">

 			 
			 <?php if ( !dynamic_sidebar('Footer Newsletter') ) : ?>

    <?php endif; ?>



 
			  </div>

		   <!-- eof social box !-->

 

	   </div>

   </div>

   <!-- eof content box !-->

   

   <!-- footer !-->

   <footer  class="container">

	   <div class="row">

		   

		   <!-- gift card !-->

		   <div class="col-md-6 col-sm-5">

			   

			   <?php if ( !dynamic_sidebar('Footer Gift Cards Available') ) : ?>

    <?php endif; ?>

    

 			   

			 

			   

		   </div>

		   <!-- eof gift card !-->

		   

		   <!-- newsletter !-->

		   <div class="col-md-6 col-sm-5">

			   

			   <?php if ( !dynamic_sidebar('Footer Sign Up') ) : ?>

    <?php endif; ?>

    

    

 			   



		   </div>

		   <!-- eof newsletter !-->

		   
	   </div>

   </footer>

   <!-- eof footer !-->

   

   <!-- copyright !-->

   <div class="container copyright">

	   <div class="row">

		   <div class="col-md-6 col-sm-5">Trinity Groves. All Rights Reserved.</div>

		   <div class="col-md-6 col-sm-5 privacy"><a href="http://www.trinitygroves.com/privacy-policy/">Privacy Policy</a> | <a href="http://www.trinitygroves.com/shipping-policy/">Shipping Policy</a></div>

	   </div>

   </div>

   <!-- eof copyright !-->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

    

    <!-- show items on hover !-->

    

    <script type="text/javascript">

$(document).ready(function(){

	$(".dropdown, .btn-group").hover(function(){

		var dropdownMenu = $(this).children(".dropdown-menu");

		if(dropdownMenu.is(":visible")){

			dropdownMenu.parent().toggleClass("open");

		}

	});

});		

</script>

	    

        <!-- eof show items on hover !-->

        

      



<?php wp_footer(); ?>

<style>

#TB_window{margin-top:-265px}

</style>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29638129-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-75227909-1', 'auto');
  ga('send', 'pageview');
 
</script>
</body>

</html>

