<?php
get_header();
?>


    <div>
    <?php
      if( have_posts() ){
        while( have_posts() ){
          the_post();
          get_template_part('template-parts/content','page');
        }
      }
    
    ?>
    <div>
        <img src="/wp-content/themes/Blogger/assets/img/pexels-ylanite-koppens-796602.jpg" width="100%" height="607">
    </div>
    </div>
      
    <?php
get_footer();
?>