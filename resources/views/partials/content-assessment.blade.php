<script>
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", 'http://localhost:3000/questionnaire/');
    }
</script>

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
              $sixty = isset($_GET['sixty']);
              $dementia = isset($_GET['dementia']);
              $caregiving = isset($_GET['caregiving']);
              $veteran = isset($_GET['veteran']);
              $employed = isset($_GET['employed']);
              $healthcare = isset($_GET['healthcare']);
            ?>

            <form class="advanced-search-form">
                <fieldset class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="">Are you caring for someone over 60 years old?</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="sixty" <?php if (isset($sixty) && $sixty=="yes");?> value="yes">
                          <label class="form-check-label" for="sixty"> Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="sixty" <?php if (isset($sixty) && $sixty=="no");?> value="no">
                          <label class="form-check-label" for="sixty"> No</label>
                        </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="">Does your loved one have dementia?</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="dementia" <?php if (isset($dementia) && $dementia=="yes");?> value="yes">
                          <label class="form-check-label" for="dementia"> Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="dementia" <?php if (isset($dementia) && $dementia=="no");?> value="no">
                          <label class="form-check-label" for="dementia"> No</label>
                        </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="">Are you new to caregiving?</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="caregiving" <?php if (isset($caregiving) && $caregiving=="yes");?> value="yes">
                        <label class="form-check-label" for="caregiving"> Yes</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="caregiving" <?php if (isset($caregiving) && $caregiving=="no");?> value="no">
                        <label class="form-check-label" for="caregiving"> No</label>
                      </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="">Are you or a loved one a veteran?</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="veteran" <?php if (isset($veteran) && $veteran=="yes");?> value="yes">
                        <label class="form-check-label" for="veteran"> Yes</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="veteran" <?php if (isset($veteran) && $veteran=="no");?> value="no">
                        <label class="form-check-label" for="veteran"> No</label>
                      </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="">Are you currently employed?</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="employed" <?php if (isset($employed) && $employed=="yes");?> value="yes">
                        <label class="form-check-label" for="employed"> Yes</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="employed" <?php if (isset($employed) && $employed=="no");?> value="no">
                        <label class="form-check-label" for="employed"> No</label>
                      </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="">Do you need help understanding healthcare benefits such as Medicare and Medicaid?</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="healthcare" <?php if (isset($healthcare) && $healthcare=="yes");?> value="yes">
                        <label class="form-check-label" for="healthcare"> Yes</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="healthcare" <?php if (isset($healthcare) && $healthcare=="no");?> value="no">
                        <label class="form-check-label" for="healthcare"> No</label>
                      </div>
                    </div>
                  </div>
                </fieldset>


                <div class="form-group row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
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

                <?php if ( $default = "yes"
                || $sixty = "yes"
                || $dementia = "yes"
                || $caregiving = "yes"
                || $veteran = "yes"
                || $employed = "yes"
                || $healthcare = "yes"
                ): ?>
                  <div class="search-result">

                    <?php


                    $args = [
                      'posts_per_page' => - 1,
                      'tag_slug__in'     => empty( $include ) ? [ 0 ] : $include,
                    ];



                    if ( $sixty ) { $args['tag_slug__in'][] = "classes"; }
                    if ( $dementia ) { $args['tag_slug__in'][] = "memory-care"; }
                    if ( $caregiving ) { $args['tag_slug__in'][] = "caregiving"; }
                    if ( $veteran ) { $args['tag_slug__in'][] = "veteran"; }
                    if ( $employed ) { $args['tag_slug__in'][] = "employed"; }
                    if ( $healthcare ) { $args['tag_slug__in'][] = "healthcare"; }





                    $search_query = new WP_Query( $args );
                    ?>

                    <?php if ( $search_query->have_posts() ): ?>
                      <div class='container form-results'>
                        <div class="row">
                          <?php while ( $search_query->have_posts() ) : $search_query->the_post();?>
                          <div class='col-md-4 each-result'>
                              <h2><?php the_title(); ?></h2>
                              <p><?php the_excerpt(); ?></p>
                          </div>
                          <?php endwhile ?>
                        </div>
                      </div>
                    <?php wp_reset_query();?>
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
