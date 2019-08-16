<?php
/**
* Template Name: Faculty and Staff Page Template
*
* Description: A page template that provides a key component of WordPress as a CMS
* by meeting the need for a carefully crafted introductory page. The front page template
* in Twenty Twelve consists of a page content area for adding text, images, video --
* anything you'd like -- followed by front-page-only widgets in one or two columns.
*
*/
?>

<script type="text/javascript">//<![CDATA[ 
$(window).load(function(){
$('#product-table a:first').tab('show');
});//]]>  
</script>


<?php get_header(); 
$css_uri = get_stylesheet_directory_uri(); 
$css_link1 = $css_uri .'/library/css/bootstrap_fctable.css'; 
$css_link2 = $css_uri .'/library/css/normalize_fctable.css'; 
?>
<link rel="stylesheet" type="text/css" href="<?php echo $css_link1; ?>" media='all'>
<link rel="stylesheet" type="text/css" href="<?php echo $css_link2; ?>" media='all'>



<div class="wrap">
	<div id="content">



<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
define("DEPT",38);
define("SDEPT",0);
$positionholder = "";
$outHTML = "";
$pageTitle = "UCF: CAH: Writing and Rhetoric: Faculty and Staff";
$id = intval($_GET['id']);
$filename = "";


	

//print $sql;
	
	
?>

<div class="row">
			<div class="col-2">
				<?php bones_vertical_nav(); ?>
			</div>
		
			<div class="col-10">

		<?php
		
	//print $_SERVER["QUERY_STRING"];
	//print $_SERVER["REQUEST_URI"];

echo print_staff_titlegroup(DEPT, $id);
?>



			</div>
		</div>
    
    
    
	</div> <!-- end of content -->
</div><!-- end of wrap -->
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>

<?php
$js_link1 = $css_uri .'/library/js/bootstrap_202.js'; 
?>

<script type="text/javascript" src="<?php echo $js_link1; ?>"></script>

 


<?php get_footer(); ?>

