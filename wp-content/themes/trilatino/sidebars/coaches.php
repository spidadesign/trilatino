<?php
	$coaches_args = array('post_type' => 'coaches', 'showposts' => '-1');
	$coaches = get_posts($coaches_args);
	//echo "<pre>"; print_r($coaches); echo "</pre>";
?>
<div class="col-md-4 sidebar">
	<a type="button" class="btn get_started" href="#">Get Started ></a>
	<a type="button" class="btn donate" href="<?php echo site_url( ); ?>/support-us">Donate ></a>
	<span class="mission">
		<img src="<?php bloginfo('template_directory'); ?>/assets/images/mission.jpg" class="img-responsive">
	</span>
	<div class="coaches">
		<div class="title">
			Meet our coaches
		</div>
		<?php foreach ($coaches as $coach): ?>
			<div class="individial-coach">
				<span><?php echo get_the_post_thumbnail($coach->ID, 'thumbnail'); ?></span>
				<a href="#"><?php echo $coach->post_title; ?> ></a>
			</div>
		<?php endforeach; ?>
	</div>
</div>
