<?php get_header(); ?>

	<h2>Search Results</h2>
   		<?php if (have_posts()) : ?>
			<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
		    	<?php while (have_posts()) : the_post(); ?>
					<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>
	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>
		<h3>No posts found.</h3> 
		<?php include('searchform.php'); ?>
	<?php endif; ?>

<?php get_footer(); ?>
