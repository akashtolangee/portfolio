<?php get_header(); ?>

<?php get_sidebar('primary'); ?>

	
<div id="main">
<div id="content" class="page">
            
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
    	
    	<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
     
		<?php the_content('More &raquo;'); ?>
     	<?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
        </div>
</div>
 <?php endwhile; endif; ?>
	 

<?php get_footer(); ?>
