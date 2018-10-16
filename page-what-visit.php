<?php
/*
Template Name: What to Visit
*/


 get_header(); ?>

	
	<?php
		if (has_post_thumbnail() ) { ?>
			<div class="featured">
				<?php the_post_thumbnail('featured'); ?>
				<h2><?php the_title(); ?></h2>
			</div>

	<?php	} else { ?>
		<h2 class="noimage"><?php the_title(); ?></h2>
		<?php } ?>
	 
<div id="primary" class="primary post-<?php the_ID() ?>">
	<?php $args = array(
		'posts_per_page' => 5,
		'cat' => 6,
		'order' => 'DESC',
		'orderby' => 'date'
	) ?>

	<?php $visit = new WP_Query($args); ?>
	<?php while($visit->have_posts() ): $visit->the_post();

		print_r($visit);

	endwhile; wp_reset_postdata(); ?>

</div>

<?php get_sidebar(); ?> 


<?php get_footer(); ?>