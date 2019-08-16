			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">

					<nav role="navigation">
							<?php bones_footer_links(); ?>
					</nav>
					<h5>  <a href="http://history.cah.ucf.edu/">Department of History</a> | <a href="http://www.cah.ucf.edu/">College of Arts and Humanities </a></h5>
					<p class="source-org copyright"> <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>

		<?php wp_footer(); ?>
				<script type="text/javascript" charset="utf8" src="<?php echo get_template_directory_uri(); ?>/library/js/libs/bootstrap.js"></script>

	</body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5217795-21', 'auto');
  ga('send', 'pageview');

</script>

</html>
