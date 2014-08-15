<?php
	/* Template Name: Pages */
	get_header();
?>
<div class="col-md-9">
	<h2><?php the_title( );?></h2>
	<?php the_post_thumbnail('original', array('class'=>'img-responsive')); ?>
	<?php echo apply_filters('the_content', get_post()->post_content); ?>
</div>

<?php get_footer(); ?>