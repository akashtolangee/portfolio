<?php get_header(); ?>


<?php get_sidebar('primary'); ?>

<div id="content" class="search">

	<?php if (have_posts()) : ?>

		<h2>Search Results for &#8216;<?php the_search_query(); ?>&#8217;</h2>
    <?php while (have_posts()) : the_post(); ?>
    	<div class="post">
    	<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
        
		<?php the_excerpt(); ?>
        <p class="read-more"><a href="<?php the_permalink() ?>" rel="bookmark" title="Read more about <?php the_title(); ?>">Read more &raquo;</a>
        </div><!-- /.post -->
    <?php endwhile; ?>
		
	<?php else : ?>
		<h2>No  related posts found. Try a different search?</h2>
    	<?php get_search_form(); ?>

	<?php endif; ?>
		
</div>


<?php get_footer(); ?>
