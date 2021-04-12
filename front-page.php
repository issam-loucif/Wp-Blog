<?php
get_header();
?>

<style>
    .para{
        position: absolute;
        left: 700px;
        top: 400px;
        width: 500px;
        height: 280px;
        color:  rgb(0, 0, 0);
        }
        .para1{
        position: absolute;
        left: 700px;
        top: 300px;
        width: 500px;
        height: 280px;
        color:rgb(29, 28, 28);
        font-weight: bold;
        }
       
    </style>
    <div>
    <?php
      if( have_posts() ){
        while( have_posts() ){
          the_post();
          the_content();
        }
      }
    
    ?>
    <img src="/wp-content/themes/Blogger/assets/img/pexels-dominika-roseclay-1036841.jpg" width="100%" height="670">
    </div>
      
    <?php
get_footer();
?>