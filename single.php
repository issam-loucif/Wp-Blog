<?php
get_header();
?>


    <div>
    <?php
      if( have_posts() ){
        while( have_posts() ){
          the_post();
          get_template_part('template-parts/content','article');
        }
      }
    
    ?>
    </div>
      
    <?php
get_footer();
?>