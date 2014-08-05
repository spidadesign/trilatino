<?php
	/* Template Name: Home */
	get_header();
?>
<div class="col-md-9">
	<?php the_post_thumbnail('original', array('class'=>'img-responsive')); ?>
</div>
<?php
	get_template_part('sidebars/home');
	get_footer();
?>