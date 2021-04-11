<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head();?>

     
</head>

<body >
    <!--nav barre-->
    <nav class="navbar navbar-expand-lg navbar-dark" style=background-color:#0097a7;>
        <div class="container-fluid">
            <a class="navbar-brand" href="/Accueil.html">
            <?php
            if(function_exists('the_costom_logo')){

                $custom_logo_id = get_theme_mod('custom_logo');
                $logo= wp_get_attachment_image_src($custom_logo_id);
            }
            ?>
            <img src="/wp-content/themes/Blogger/assets/img/logo.svg" width="150px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <p class="navbar-toggler-icon"></p>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!--?php
                wp_nav_menu(
                    array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary'
                    'items_wrap' => '<ul id="" class="navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>'
                    )
                );
            ?-->    


                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/Accueil.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact.html">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>