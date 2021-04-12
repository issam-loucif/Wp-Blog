<div class="row">
    <div class="col mb-5">
            <div class="card" style="width: 350px;">
                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h5>
                  <p class="card-text"><?php the_excerpt(); ?></p>
                  <span class="card-text"><?php the_date(); ?></span>
                  <span class="card-text"><?php comments_number(); ?></span>
                  <a href="<?php the_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
                </div>
          </div>
    </div>


</div>