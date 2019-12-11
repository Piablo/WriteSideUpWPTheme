<?php get_header(); ?>

<?php get_sidebar('left'); ?>

<div id="mid-block">
	<?php if(have_posts()): ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php else: ?>
		<h2>404! Page Not Found.</h2>
	<?php endif; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>