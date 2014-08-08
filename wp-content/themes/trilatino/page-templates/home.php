<?php
	/* Template Name: Home */
	get_header();
?>
<div class="col-md-9">
	<?php the_post_thumbnail('original', array('class'=>'img-responsive')); ?>
	<?php var_dump(get_field('slider_sidebar', null)); ?>
</div>

<?php get_footer(); ?>