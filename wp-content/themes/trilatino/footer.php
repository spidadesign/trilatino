		</div>
		</div>
		<footer>
		<?php 
			$footer_args = array('post_type' => 'block', 'post_name'=>'footer'); 
			$footer = get_posts($footer_args);
			//echo "<pre>"; print_r($footer); echo "</pre>";
		?>

			<div class="container">
				<div class="col-md-8">
					<?php 
						foreach($footer as $footer_text):
							echo $footer_text->post_content;
						endforeach;
					?>
				</div>
				<div class="col-md-4 links">
				<ul>
						<li><a href="#">Sitemap</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Directory</a></li>
					</ul>
					<ul>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Email Preferences</a></li>
						<li><a href="#">Shop</a></li>
						<li><a href="#">Volunteer</a></li>
					</ul>
				</div>
			</div>
		</footer>
		<script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/sprockets-modernizr/modernizr.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/bootstrap-sass-twbs/assets/javascripts/bootstrap/dropdown.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/slick.js/slick/slick.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/html5shiv/dist/html5shiv.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/javascripts/common.js"></script>
		<script>
			$(document).ready(function(){
				$('.sidebar-home-slider').slick({
	  				//setting-name: setting-value
				});
			});
		</script>
	</body>
</html>