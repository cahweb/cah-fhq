<?php
/**
* Template Name: Courses Template
*
* Description: A page template for courses 
*
*/
?>
<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.0/css/jquery.dataTables.css">
  
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  
<!-- DataTables -->
<?php 
	$this_uri = get_template_directory_uri(); 
	//print $this_uri.'/scripts/courses.php';
?> 

<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script>

 


<script type="text/javascript">
$(document).ready(function() {


 var table = $('#coursesTable').DataTable( {
        ajax: "<?php echo $this_uri . "/scripts/courses.php?term=" ?>"+$('select.changeTerm').val()+"&did=38",
        columns: [
            { "data": "coursenumber" },
            { "data": "catalogref" },
            { "data": "title" },
            { "data": "description" },
            { "data": "instructor" },
            { "data": "mode" },
            { "data": "dateandtime" },
            { "data": "syllabus" }
        ]
} );

		$('select.changeTerm').change(function(){
			//alert( 'Data source: '+wart.ajax.url() );
			table.ajax.url("<?php echo $this_uri . "/scripts/courses.php?term=" ?>"+$('select.changeTerm').val()+"&did=38").load();
		});
	

} ); 


</script>


<? 
//$id =12;
	get_header(); 
	define("DEPT",38);
	$cr = "";
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
				<?php 
				    //echo do_shortcode("[metaslider id=24]"); 
				?>

				<div class="row">
					<h1> Courses </h1>

					<div class="col-12">

					<form>	
						<label> Choose Term: </lable>
						<select class="changeTerm">
					  		<option value="Summer 2013">Summer 2013</option>
					  		<option value="Fall 2013">Fall 2013</option>
					  		<option value="Spring 2014">Spring 2014</option>
					  		<option value="Summer 2014">Summer 2014</option>
					  		<option value="Fall 2014">Fall 2014</option>
					  		<option value="Spring 2015">Spring 2015</option>
						</select>
					</form>

					<?php
					//$outHTMLCourses = print_departmentcourses($department = 38, $term = 'summer 2014');
					//echo $outHTMLCourses;
					?>
					<table id="coursesTable" class="display" cellspacing="0" width="100%">
					        <thead>
					            <tr>
					                <th>Course Number</th>
					                <th>Catalogref</th>
					                <th>Title</th>
					                <th>Description</th>
					                <th>Instructor</th>
					                <th>Mode</th>
					                <th>Date and Time</th>
					                <th>Syllabus</th>
					            </tr>
					        </thead>
					 
					        <tfoot>
					            <tr>
					               <th>Course Number</th>
					                <th>Catalogref</th>
					                <th>Title</th>
					                <th>Description</th>
					                <th>Instructor</th>
					                <th>Mode</th>
					                <th>Date and Time</th>
					                <th>Syllabus</th>
					            </tr>
					        </tfoot>
					    </table>

					 

						
					</div>
					
					
                        <?php //get_sidebar('sidebar1'); ?>
				
				</div>
			</div>
		</div>
		
		
		
		
		
		
	</div>
</div>
<?php get_footer(); ?>