<sidebar id="primary">

  <?php if ( is_active_sidebar( 'primary' ) ) : ?>
  <?php dynamic_sidebar( 'primary' ); ?>

    <?php else : ?>

    
 
<h3>Helpful links</h3>
<p><a href="">Visa and immigration</a></p> 
<p><a href="">Driving & Licensing</a></p>
<p><a href="">Insurance</a></p> 
<p><a href="">Hospitals</a></p>    

    <div class="widget">
        <h3>Categories</h3>
        <ul>
          <?php wp_list_categories('title_li='); ?>
        </ul>     
</div>

<?php endif; ?>
    
</sidebar>