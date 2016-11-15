<sidebar id="primary">

  <?php if ( is_active_sidebar( 'primary' ) ) : ?>
  <?php dynamic_sidebar( 'primary' ); ?>

    <?php else : ?>

    
    

    <div class="widget">
        <h3>Categories</h3>
        <ul>
          <?php wp_list_categories('title_li='); ?>
        </ul>     
</div>

<?php endif; ?>
    
</sidebar>
