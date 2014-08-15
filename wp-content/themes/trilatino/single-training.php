<?php
	get_header();
?>
<div class="col-md-9">
	<?php the_post_thumbnail('original', array('class'=>'img-responsive')); ?>
	<?php echo apply_filters('the_content', get_post()->post_content); ?>
</div>
<?php 
	get_template_part('sidebars/pages');
	get_footer(); 
?>