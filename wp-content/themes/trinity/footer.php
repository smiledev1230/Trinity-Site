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







   <div class="container light-overlay-footer" id="social">







	   <div class="row footer-box">







		   







		   <!-- social box !-->







		   <div class="col-hr col-xs-6 col-sm-3 ">







			   <h4>Facebook<a href="https://www.facebook.com/TrinityGroves" target="_blank">Follow Us</a></h4>



			   



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







			   <h4>Instagram<a href="http://instagram.com/trinitygroves" target="_blank">Follow Us</a></h4>



 			 



<?php if ( !dynamic_sidebar('Instagram Newsletter') ) : ?>



<?php endif; ?>











 		   </div>







		   <!-- eof social box !-->







		   







		    <!-- social box !-->







		   <div class="col-hr col-xs-6 col-sm-3 ">







			   <h4>Latest Tweets<a href="https://twitter.com/trinitygroves" target="_blank">Follow Us</a></h4>







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







   	<div class="container">



   		<div class="row">



   			<!-- search / social !-->



		   <div class="col-lg-12 col-md-12 col-sm-12 search-social  hidden-sm hidden-lg hidden-md">



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



	                            <img src="http://www.trinitygroves.com/wp-content/uploads/2016/05/Download_on_the_App_Store_Badge.png" alt="get app now" height="33px" style="vertical-align:top;top:0;margin-top:1px" />



	                        </a>



	                        <a href="https://play.google.com/store/apps/details?id=com.younity360.trinity_groves" target="_blank" class="app">



	                            <img src="http://www.trinitygroves.com/wp-content/uploads/2016/06/googleplay.png" alt="get app now" height="33px" style="vertical-align:top;top:0;margin-top:1px" />



	                        </a>



	                        </span>



	                    </div>



	                </div>



	                <!-- eof social !-->



			   </div>



		   </div>



		   <!-- eof search / social !-->



   		</div>



   </div>







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









 <div id="ttdUniversalPixelTagbaabadb0390643aeaf9513fe16a26d65" style="display:none">

            <script src="https://js.adsrvr.org/up_loader.1.1.0.js" type="text/javascript"></script>

            <script type="text/javascript">

                (function(global) {

                    if (typeof TTDUniversalPixelApi === 'function') {

                        var universalPixelApi = new TTDUniversalPixelApi();

                        universalPixelApi.init("tqpqp4d", ["f6t5bvv"], "https://insight.adsrvr.org/track/up", "ttdUniversalPixelTagbaabadb0390643aeaf9513fe16a26d65");

                    }

                })(this);

            </script>

        </div>

   </footer>







   <!-- eof footer !-->







   







   <!-- copyright !-->







   <div class="container copyright">







	   <div class="row">







		   <div class="col-md-6 col-sm-5">COPYRIGHT &copy; Trinity Groves. All Rights Reserved.</div>







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



<!-- Google Tag Manager -->



<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':



new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],



j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=



'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);



})(window,document,'script','dataLayer','GTM-MZXQP65');</script>



<!-- End Google Tag Manager -->







<script async src="https://i.simpli.fi/dpx.js?cid=81839&action=100&segment=TrinityGroves_SiteRetargeting&m=1&sifi_tuid=47354"></script>







<script type="text/javascript">



	$("#menu-top-navigation-1").prepend("<li class='menu-item menu-item-type-post_type menu-item-object-page' id='make-reservation' style='font-size: 14px;margin-bottom:15px;cursor:pointer;margin-top:10px;'>Make Reservation</li>");







	$(document).on('click','#make-reservation', function(){



        $(".navbar-toggle").trigger( "click" );



    	$("#make-reservation-div").fadeIn();



	});



	$(document).on('click','#cancel-reservation', function(){



    	$("#make-reservation-div").fadeOut();



	});



</script>







<script>



	$(document).ready(function(){



		toggle_fixed_header();



		var initial_scroll_top = 0;







		$(window).resize(function(){



			console.log("Resized");



			toggle_fixed_header();



		})







		$('body').scroll(function () {



			toggle_fixed_header();	



		});







		$(window).scroll(function () {



			var new_scroll_top = $(window).scrollTop();			



			console.log("New "+new_scroll_top);



			console.log("Initial "+initial_scroll_top);



			if(initial_scroll_top==0 && new_scroll_top>200)



			{



				toggle_fixed_header_window();		



			}



			else if(initial_scroll_top==0 && new_scroll_top==0)



			{



				toggle_fixed_header_window();		



			}



			



		});







		function toggle_fixed_header()



		{



			if($('body').width()>767)



			{







				var scroll_top = $('body').scrollTop();







				if(scroll_top>200)	



				{



					$('header').hide();



					$('.header-fixed').show();



				}



				else



				{



					$('header').show();



					$('.header-fixed').hide();	



				}



			}



			else



			{



				$('header').show();



				$('.header-fixed').hide();	



			}



			



		}







		function toggle_fixed_header_window()



		{



			if($(window).width()>767)



			{







				var scroll_top = $(window).scrollTop();







				if(scroll_top>200)	



				{



					console.log('full '+scroll_top);



					$('header').fadeOut();



					$('.header-fixed').fadeIn();



				}



				else



				{



					console.log('half '+scroll_top);



					$('header').fadeIn();



					$('.header-fixed').fadeOut();	



				}



			}



			else



			{



				$('header').fadeIn();



				$('.header-fixed').fadeOut();	



			}



			



		}



	});







	



</script>



</body>















</html>







