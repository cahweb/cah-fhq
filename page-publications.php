<?php
/**
* Template Name: Publications Page Template
*
* Description: A page template that provides a key component of WordPress as a CMS
* by meeting the need for a carefully crafted introductory page. The front page template
* in Twenty Twelve consists of a page content area for adding text, images, video --
* anything you'd like -- followed by front-page-only widgets in one or two columns.
*
*/
?>


<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
 
<script type="text/javascript">
$(document).ready(function() {
		$('#pc').change(function(){
			window.location='index.php/publications?pc=' + $('#pc').val();
		});
} ); 


</script>
<?php 
get_header(); 
?>

<? 
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
	define("DEPT",38);
	$outHTML = "";
	$pub_category = intval($_GET['pc']);
	$pageTitle = "UCF: CAH:  English: Faculty Publications";
	if (!empty($pub_category)) {
		$pageTitle .= " (filtered)";
	}
?>



<div class="wrap">
	<div id="content">
    
    <div class="row">
			<nav role="navigation">
				<div class="col-2">
					<?php bones_vertical_nav(); ?>
					
					<p>
					<strong> Contact Us </strong> <br />
					407-823-2295<br />
					Fax: 407-823-1287<br />
					
					</p>
				</div>
			</nav>
		<div class="col-10">
		<h2> Publications </h2>
		<?
		echo "<form id=\"clister\" method=\"get\" action=\"publications.php\">";
		print_selectfield("pc","Filter on Publication Type","", "publications_categories", "short_description", $pub_category,$pub_category_error,$extra);
		echo "<noscript><p><input type=\"submit\" name=\"submit\" value=\"Go\" /></p></noscript></form>";
		print_publications(DEPT,0,0,0,$pub_category,0,60,1,1,false,false);	
		?>
		</div>
       

<script type="text/javascript">
	
</script>
<?php get_footer(); ?>
