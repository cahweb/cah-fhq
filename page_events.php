<?php
/**
* Template Name: Events Page Template
*
* Description: A page template that provides a key component of WordPress as a CMS
* by meeting the need for a carefully crafted introductory page. The front page template
* in Twenty Twelve consists of a page content area for adding text, images, video --
* anything you'd like -- followed by front-page-only widgets in one or two columns.
*
*/
?>

<?php get_header(); ?>
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
					writingandrhetoric@ucf.edu
					</p>
				</div>
			</nav>
		<div class="col-10">
        <h1> Hi i'm events </h1>
		<!-- use plugin, with settings -->
    
    <div class="events" data-limit="10" data-calendar-id="403" >
    <a href="http://events.ucf.edu/">View Calendar</a>
   </div> 
 </div>
 </div>

</div>
</div>

<!-- jQuery is required -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function(){        
        $('.events').eventsUCF({
            'limit'        : 7,
            'calendar_id'  : 403
        });
    });
    </script>
<!-- Widget Includes -->
<script src="http://events.ucf.edu/tools/script.js" type="text/javascript"></script>
<link href="http://events.ucf.edu/tools/style.css" rel="stylesheet" type="text/css"> 
<?php get_footer(); ?>