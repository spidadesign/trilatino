<?php
	/* Template Name: Home */
	get_header();
?>
<div class="col-md-9">
	<?php 
		the_post_thumbnail('original', array('class'=>'img-responsive'));
		$fb_args = array('post_type' => 'block', 'include' => '425');
		$fb_post = get_posts($fb_args);
	?>
	<div class="fb-block">
		<?php
			foreach($fb_post as $fb):
				echo $fb->post_content;
			endforeach;
		?>
	</div>
	<?php //var_dump(get_field('slider_sidebar', null)); ?>
</div>

<?php get_footer(); ?>