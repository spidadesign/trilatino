<?php
	//$active = get_field('active_on');
	//echo $act
	$sidebar_slider_args = array('post_type' => 'slider');
	$sidebar_slider = get_posts($sidebar_slider_args);
	//the_field('active_on');
?>
<div class="col-md-4 sidebar">
	<a type="button" class="btn get_started" href="#">Get Started ></a>
	<a type="button" class="btn donate" href="<?php echo site_url( ); ?>/support-us">Donate ></a>
	<span class="mission">
		<img src="<?php bloginfo('template_directory'); ?>/assets/images/mission.jpg" class="img-responsive">
	</span>
	<p><?php the_field( 'active_on' ); ?></p>
	<div class="sidebar-home-slider">
		
	</div>
</div>