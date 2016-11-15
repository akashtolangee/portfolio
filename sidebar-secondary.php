<aside id="secondary">

  <?php if ( is_active_sidebar( 'secondary' ) ) : ?>
  <?php dynamic_sidebar( 'secondary' ); ?>

    <?php else : ?>
<h3>Latest</h3>
<p><a href="">News>>></a></p> 
<p><a href="">Posts>>></a></p>
<p><a href="">Jobs>>></a></p> 
<p><a href="">Events>>></a></p> 
    
    <div class="widget">
        <h3>Categories</h3>
        <ul>
          <?php wp_list_categories('title_li='); ?>
        </ul>     
</div>

<?php endif; ?>
    
</aside>