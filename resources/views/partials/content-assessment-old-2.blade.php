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
              $legal = isset($_GET['legal']);
              $finance = isset($_GET['finance']);
              $support = isset($_GET['support']);
              $selfcare = isset($_GET['selfcare']);
            ?>

            <form class="advanced-search-form">
                <fieldset class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="">Are you caring for someone over 60 years old?</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="sixty" id="yes-sixty"  value="yes">
                          <label class="form-check-label" for="sixty"> Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="sixty" id="no-sixty" value="no">
                          <label class="form-check-label" for="sixty"> No</label>
                        </div>
                    </div>
                  </div>
                </fieldset>

              <div id="show-form">

                <fieldset class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="">Does your loved one have dementia?</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="dementia" id="yes-dementia" value="yes">
                          <label class="form-check-label" for="dementia"> Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="dementia" id="no-dementia" value="no">
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
                        <input class="form-check-input" type="radio" name="caregiving" value="yes">
                        <label class="form-check-label" for="caregiving"> Yes</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="caregiving" value="no">
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
                        <input class="form-check-input" type="radio" name="veteran" value="yes">
                        <label class="form-check-label" for="veteran"> Yes</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="veteran" value="no">
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
                        <input class="form-check-input" type="radio" name="employed" value="yes">
                        <label class="form-check-label" for="employed"> Yes</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="employed" value="no">
                        <label class="form-check-label" for="employed"> No</label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="employed" value="Decline to State">
                          <label class="form-check-label" for="employed"> Decline to State</label>
                        </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="">Do you need help understanding healthcare benefits such as Medicare and Medicaid?</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="healthcare" value="yes">
                        <label class="form-check-label" for="healthcare"> Yes</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="healthcare" value="no">
                        <label class="form-check-label" for="healthcare"> No</label>
                      </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="">Do you need information on how to get a break from caregiving responsibilities?</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="caregiving" value="yes">
                        <label class="form-check-label" for="caregiving"> Yes</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="caregiving" value="no">
                        <label class="form-check-label" for="caregiving"> No</label>
                      </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="">Do you need information on Legal concerns (i.e. power of attorney, living will, advanced directives)?</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="legal" value="yes">
                        <label class="form-check-label" for="legal"> Yes</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="legal" value="no">
                        <label class="form-check-label" for="legal"> No</label>
                      </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="">Do you need information on in-home help (i.e. home health providers, home modifications)?</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="support" value="yes">
                        <label class="form-check-label" for="support"> Yes</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="support" value="no">
                        <label class="form-check-label" for="support"> No</label>
                      </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="">Do you need information on how to pay for care?</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="finance" value="yes">
                        <label class="form-check-label" for="finance"> Yes</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="finance" value="no">
                        <label class="form-check-label" for="finance"> No</label>
                      </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="">Do you need information on how to help keep my loved one as engaged and active as possible?</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="caregiving" value="yes">
                        <label class="form-check-label" for="caregiving"> Yes</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="caregiving" value="no">
                        <label class="form-check-label" for="caregiving"> No</label>
                      </div>
                    </div>
                  </div>
                </fieldset>


                <fieldset class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="">Do you need information on how to assist my loved one with daily tasks (i.e. bathing, eating, mobility, dressing)?</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="caregiving" value="yes">
                        <label class="form-check-label" for="caregiving"> Yes</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="caregiving" value="no">
                        <label class="form-check-label" for="caregiving"> No</label>
                      </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="">Do you need information on emotional support options (i.e. support groups, counseling, consultation)?</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="selfcare" value="yes">
                        <label class="form-check-label" for="selfcare"> Yes</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="selfcare" value="no">
                        <label class="form-check-label" for="selfcare"> No</label>
                      </div>
                    </div>
                  </div>
                </fieldset>


                <fieldset class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="">Do you need information on how to find more information on my loved one's diagnosis?</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="healthcare" value="yes">
                        <label class="form-check-label" for="healthcare"> Yes</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="healthcare" value="no">
                        <label class="form-check-label" for="healthcare"> No</label>
                      </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="">Do you need information on managing dementia-related behaviors (i.e. wandering, refusal to stop driving, repetitive actions, aggressive behavior)?</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="dementia" value="yes">
                        <label class="form-check-label" for="dementia"> Yes</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="dementia" value="no">
                        <label class="form-check-label" for="dementia"> No</label>
                      </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="">Do you need information on how to get your family involved</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="support" value="yes">
                        <label class="form-check-label" for="support"> Yes</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="support" value="no">
                        <label class="form-check-label" for="support"> No</label>
                      </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="">Do you need help managing your loved one's medical needs?</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="healthcare" value="yes">
                        <label class="form-check-label" for="healthcare"> Yes</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="healthcare" value="no">
                        <label class="form-check-label" for="healthcare"> No</label>
                      </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="">Have you felt your physical or emotional health has been under more strain because of helping your loved one?</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="selfcare" value="yes">
                        <label class="form-check-label" for="selfcare"> Yes</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="selfcare" value="no">
                        <label class="form-check-label" for="selfcare"> No</label>
                      </div>
                    </div>
                  </div>
                </fieldset>


                <fieldset class="form-group">
                    <div class="row">
                      <div class="col">
                        <label for="">Do you ever feel the stress of caregiving is more than you can handle?</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="selfcare" value="yes">
                          <label class="form-check-label" for="selfcare"> Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="selfcare" value="no">
                          <label class="form-check-label" for="selfcare"> No</label>
                        </div>
                      </div>
                    </div>
                  </fieldset>
              </div>


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
                || $legal = "yes"
                || $finance = "yes"
                || $support = "yes"
                || $selfcare = "yes"

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
                    if ( $legal ) { $args['tag_slug__in'][] = "legal"; }
                    if ( $finance ) { $args['tag_slug__in'][] = "finance"; }
                    if ( $support ) { $args['tag_slug__in'][] = "support"; }
                    if ( $selfcare ) { $args['tag_slug__in'][] = "selfcare"; }


                    $search_query = new WP_Query( $args );
                    ?>

                    <?php if ( $search_query->have_posts() ): ?>
                      <div class='container form-results'>
                        <div class="row">
                          <?php while ( $search_query->have_posts() ) : $search_query->the_post();?>
                          <div class='col-md-4 form-result'>
                              <h3><?php the_title(); ?></h3>
                              <p><?php the_excerpt(); ?></p>
                              <a href="<?php the_permalink(); ?>" class="btn btn-primary active" role="button" aria-pressed="true">Read More</a>

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

