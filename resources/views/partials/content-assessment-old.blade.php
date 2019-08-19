<?php if( get_field('page_intro_text') == 'yes' ): ?>
  <section>
    <div class="page-intro-container">
      <p><?php the_field('intro_text'); ?></p>
    </div>
  </section>
<?php endif; ?>
<?php if( get_field('page_intro_text') == 'no' ): ?><?php endif; ?>

<section>
  <div class="container page-container assessment-page">
    <div class="row">
      <div class="col">
        @php the_content() @endphp
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
        <div class="col">
          <div class="assessment-form">
              <?php
              $user_sixty_yes = $_GET['user_sixty_yes'] ?? '';
              $user_sixty_no = $_GET['user_sixty_no'] ?? '';


              // $min_price = $_GET['min_price'] ?? '';
              // $max_price = $_GET['max_price'] ?? '';
              ?>
            <form class="advanced-search-form">
                <div class="form-group">
                    <label for="">Are you caring for someone over 60 years old?</label>
                    <input type="radio" name="user_sixty_yes" value="<?php echo esc_attr($user_sixty_yes); ?>">
                    <input type="radio" name="user_sixty" value="<?php echo esc_attr($user_sixty_no); ?>">
                </div>

                {{-- <div class="form-group">
                  <label for="">Min Price</label>
                  <input type="number" name="min_price" value="<?php echo esc_attr($min_price); ?>">
                </div>
                <div class="form-group">
                  <label for="">Max Price</label>
                  <input type="number" name="max_price" value="<?php echo esc_attr($max_price); ?>">
                </div> --}}
                <div class="form-group">
                  <input type="submit" value="Search">
                </div>
            </form>
          </div>
        </div>
    </div>
  </div>
</section>

<section>
    <div class="container">
      <div class="row">
          <div class="col">
            <div class="assessment-results">
              <h1>Resources</>
                <?php if ( $min_price || $max_price ): ?>
                  <div class="search-result">
                    <?php
                    $args = [
                      'posts_per_page' => - 1,
                      'meta_query'     => []
                    ];
                    if ( $min_price ) {
                      $args['meta_query'][] = [
                        'key'     => 'hcf_price',
                        'value'   => $min_price
                      ];
                    }
                    if ( $max_price ) {
                      $args['meta_query'][] = [
                        'key'     => 'hcf_price',
                        'value'   => $max_price
                      ];
                    }
                    $search_query = new WP_Query( $args );
                    if ( $search_query->have_posts() ):
                      while ( $search_query->have_posts() ) {
                        $search_query->the_post();
                        get_template_part( 'template-parts/post/content', 'excerpt' );
                      }
                      wp_reset_postdata();
                      ?>
                    <?php else: ?>
                      <p>No Resources found.</p>
                    <?php endif; ?>
                  </div>
                <?php endif; ?>

            </div>
          </div>
      </div>
    </div>
  </section>
