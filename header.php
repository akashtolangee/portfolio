<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="initial-scale=1">

	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    
<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js" type="text/javascript"></script> 
<![endif]-->


		<?php?>
<?php wp_head(); ?>
<?php /*?> scripts that rely on jQuery, and our own stylesheet link, go AFTER wp_head() <?php */?>
     
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
</head>
<body <?php body_class(); ?>>


<header>

	<!-- Begin Logo -->
    
   <div id="logo">   
  <a href=<?php echo get_settings('home');?>><img src="<?php bloginfo('template_directory');?>/images/logo.gif" alt="AKASH Logo" class="logo"></a> 

       
</div>		
		
    <!-- End Logo -->
     
</header>

<!-- START NAVIGATION -->
<nav>
        <?php wp_nav_menu( array( 
			'theme_location' => 'main-menu' ,
			'menu' => 'Main Menu' ,
			'container'  => 'ul', 

		) ); ?>
</nav>
<!-- END NAVIGATION -->
<div id="wrapper">
<!-- START MIDDLE -->
<div id="middle">

