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
    <img src="/wp-content/themes/Blogger/assets/img/pexels-dominika-roseclay-1036841.jpg" width="100%" height="670">
    </div>
      
    <?php
get_footer();
?>