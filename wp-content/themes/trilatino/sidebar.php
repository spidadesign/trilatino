<?
	$gallery = get_field('sidebar_slider', false, false);
	$sidebar_slider_args = array('post_type' => 'slider');
	$sidebar_slider = get_posts($sidebar_slider_args);
	//var_dump($sidebar_slider);
	//echo "<pre>"; print_r($sidebar_slider); echo "</pre>";
?>
<div class="col-md-4 sidebar">
	<a type="button" class="btn get_started" href="#">Get Started ></a>
	<a type="button" class="btn donate" href="<?php echo site_url( ); ?>/support-us">Donate ></a>
	<span class="mission">
		<img src="<?php bloginfo('template_directory'); ?>/assets/images/mission.jpg" class="img-responsive">
	</span>
	<p><?php echo $gallery; ?></p>
	<div class="sidebar-home-slider">
		<?php if(!$gallery): ?>
		<?php else: ?>
		<?php endif; ?>
	</div>
</div>