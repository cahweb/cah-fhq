<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php

					$title = get_bloginfo('name') . " at UCF";

					if (!is_front_page()) {
						global $post;
						$postId = $post->ID;

						$title = get_the_title($postId) . " | " . $title;
					}

					echo $title;

				?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php
			if(wp_get_attachment_image_src( get_post_thumbnail_id($post->ID))){
				echo "<!-- Social media thumbnail sharing images -->\n";
				$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
				// $thumbnail = get_the_post_thumbnail_url();
				echo "\t<link rel=\"image_src\" href=\"".$thumbnail[0]."\"/>\n";
				echo "\t<meta property=\"og:image\" content=\"".$thumbnail[0]."\"/>";
			}
		?>

		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
		<script type="text/javascript" id="ucfhb-script" src="//universityheader.ucf.edu/bar/js/university-header.js"></script>

		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>


	</head>

	<body>


		<div id="container" class="container">

			<header class="header" role="banner">

				<div class="row">
					<div class="col-md-6">
						<h1 class="title text-center pull-left"> <a href="<?php echo home_url(); ?>">THE <br /> <span class="florida">FLORIDA</span> <br /> HISTORICAL QUARTERLY</a></h1>

					</div>
					<div class="col-md-2 col-12-sm col-12-xs pull-right hidden-xs hidden-sm">
						<div class="social">
							<div class="col-md-2 col-sm-6 col-xs-6">
								<a href="https://www.facebook.com/floridahistoricalquarterly"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fb-icon.png" /></a>
							</div>
							<div class="col-md-2 col-sm-6 col-xs-6">
								<a href="https://itunes.apple.com/us/podcast/florida-historical-quarterly/id865255657?mt=2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/podcast-icon.png" /></a>
							</div>
							<div class="col-md-2 col-sm-6 col-xs-6">
								<a href="https://twitter.com/FHQuarterly"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter-icon.png" /></a>
							</div>

						</div>
					</div>
				</div>
		</div>

		<div class="container container-extend">
					<div class="row">

						<nav class="navbar navbar-default" role="navigation">
				  			<div class="container">
				   			 <!-- Brand and toggle get grouped for better mobile display -->
				    		<div class="navbar-header">
				      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        			<span class="sr-only">Toggle navigation</span>
				        			<span class="icon-bar"></span>
				        			<span class="icon-bar"></span>
				        			<span class="icon-bar"></span>
				      			</button>

				    		</div>

				        	<?php
				            	wp_nav_menu( array(
				                	'menu'              => 'primary',
				                	'theme_location'    => 'primary',
				                	'depth'             => 2,
				                	'container'         => 'div',
				                	'container_class'   => 'collapse navbar-collapse',
				        			'container_id'      => 'bs-example-navbar-collapse-1',
				                	'menu_class'        => 'nav navbar-nav',
				                	'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				                	'walker'            => new wp_bootstrap_navwalker())
				           		 );
				        	?>
				    		</div>
						</nav>

					</div>




			</header>
