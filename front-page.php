<?php
/**
* Template Name: Front Page Template
*
* Description: A page template that provides a key component of WordPress as a CMS
* by meeting the need for a carefully crafted introductory page. The front page template
* in Twenty Twelve consists of a page content area for adding text, images, video --
* anything you'd like -- followed by front-page-only widgets in one or two columns.
*
*/
?>
<?php get_header(); ?>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1516492808593848',
      xfbml      : true,
      version    : 'v2.1'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>


<div class="row">
	<div class="col-md-2 hidden-xs hidden-sm">
		<?php get_sidebar(sidebar1); ?>
	</div>
	<div class="col-md-10">
			<div class="row hidden-xs">
				<div class="col-md-12">
					<div class="col-md-4 clearasil hidden-sm">
						<div class="slide-info">
							<h4> The Florida Historical Quarterly </h4>
							<p> is published four times a year by the Florida Historical Society. <br />
								With editorial offices at the University of Central Florida in Orlando, the FHQ is the leading
								scholarly publication and journal of record in Florida history. </p>
						</div>
					</div>
					<div class="col-md-8 col-xs-12 clearasil">
						<?php echo do_shortcode('[metaslider id=116]'); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7">
						<!-- <?php //echo do_shortcode(""); ?> -->
					 	<?php //query_posts();
                        if(have_posts()) : the_post(); ?>
						<!-- <h2 itemprop="headline"><?php the_title(); ?></h2>-->

					 	<p><?php the_content(); ?></p>
					 	<?php endif; ?>
				</div>
				<div class="col-md-5">


                    <h2>FHQ Online</h2>
						<a href="http://www.jstor.org/action/showPublication?journalCode=florhistquar"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jstor-logo.png" alt="FHQ on JSTOR" /></a>&nbsp;&nbsp;&nbsp; <a href="http://palmm.fcla.edu/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/palmm-logo.png" alt="FHQ on PALMM" /></a>
                      <h2>Social Media</h2>

					<div style="margin-top:20px;display:block;">
						<a href="https://www.facebook.com/floridahistoricalquarterly"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fb-icon-48.png" alt="FHQ on Facebook" /></a>&nbsp;&nbsp;&nbsp; <a href="https://itunes.apple.com/us/podcast/florida-historical-quarterly/id865255657?mt=2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/podcast-icon-48.png" alt="FHQ Podcast" /></a>&nbsp;&nbsp;&nbsp; <a href="https://twitter.com/FHQuarterly"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter-icon-48.png" alt="FHQ on Twitter" /></a>
					</div>
					<div style="margin-top:20px;display:block;">
                        <!--<iframe name="f29c52a5e4" width="325px" height="500px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:page Facebook Social Plugin" src="http://www.facebook.com/v2.3/plugins/page.php?app_id=&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2FxRlIuTsSMoE.js%3Fversion%3D41%23cb%3Df35ad237f4%26domain%3Dfhq.cah.ucf.edu%26origin%3Dhttp%253A%252F%252Ffhq.cah.ucf.edu%252Ff104b5199c%26relation%3Dparent.parent&amp;container_width=325&amp;height=500&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ffloridahistoricalquarterly&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=true" style="border: none; visibility: visible; width: 325px; height: 500px;" class=""></iframe>-->
					<?php echo do_shortcode('[custom-facebook-feed]');  ?>


					</div>
				</div>

			</div>
	</div>
</div>



<?php get_footer(); ?>
