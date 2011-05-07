<?php get_header(); ?>  

	<?php include('searchform.php'); ?>
	
    <ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
   		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
		<?php endwhile; ?>
	</ul>
	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>
		<h2>Not Found</h2>
	<?php endif; ?>

<?php get_footer(); ?>
