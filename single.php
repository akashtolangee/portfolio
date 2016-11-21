<?php get_header(); ?>

<?php get_sidebar('primary'); ?>

	
<div id="content">

    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
    <small>Posted in <?php the_category();?></small>
    <?php the_post_thumbnail('large');?>
    <?php the_content(''); ?>
    <?php endwhile; endif; ?>
   
</div>
	
<?php get_sidebar('secondary'); ?> 

<?php get_footer(); ?>