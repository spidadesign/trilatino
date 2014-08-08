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
		<?php 
			$coach_count = 0;
			foreach ($coaches as $coach): ?>
			<div class="individial-coach">
				<span><?php echo get_the_post_thumbnail($coach->ID, 'thumbnail'); ?></span>
				<a href="#" data-toggle="modal" data-target="#coach_<?php echo $coach_count; ?>"><?php echo $coach->post_title; ?> ></a>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="coach_<?php echo $coach_count; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			      </div>
			      <div class="modal-body">
			        <div class="container">
			        	<div class="col-md-3"><?php echo get_the_post_thumbnail($coach->ID, 'thumbnail');?></div>
			        	<div class="col-md-9">
			        		<div class="row">
			        			<h2><?php echo $coach->post_title; ?></h2>
			        		</div>
			        		<div class="row">
			        			<?php echo $coach->post_content; ?>
			        		</div>
			        	</div>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>
		<?php
			$coach_count++;
			endforeach;
		?>
	</div>
</div>
