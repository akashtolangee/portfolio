<aside id="secondary">

  <?php if ( is_active_sidebar( 'secondary' ) ) : ?>
  <?php dynamic_sidebar( 'secondary' ); ?>

    <?php else : ?>
 
    
    <div class="widget">
        <h3>Categories</h3>
        <ul>
          <?php wp_list_categories('title_li='); ?>
        </ul>     
</div>

<?php endif; ?>
    
</aside>
