<section class="resoures-content-section">
  <div class="container resources-container">
    <div class="row">
        <?php
        $post_category = get_field('display_category');
        $args = array( 'cat' => $post_category,
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 11,
        'order' => 'ASC',
        );
        $arr_posts = new WP_Query( $args );

        if ( $arr_posts->have_posts() ) :
            while ( $arr_posts->have_posts() ) :
                $arr_posts->the_post();
                ?>
                <div class="col-md-6 col-lg-4 resource-card">
                  <div class="card h-100 box shadow-sm">
                    <div class="card-body">
                      <h5 class="card-title mt-3"><?php the_title(); ?></h5>
                      <p class="card-text"><?php the_excerpt(); ?></p>
                      <a href="<?php the_permalink(); ?>"><button type="button" class="btn br-btn-outline">learn More <i class="fas fa-chevron-right"></i></button></a>
                      <div class="card-tags"> </div>
                    </div>
                  </div>
                </div>
              <?php
            endwhile;
        endif; ?>
    </div>
  </div>
</section>


