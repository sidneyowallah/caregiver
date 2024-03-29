<script>
  if(typeof window.history.pushState == 'function') {
      window.history.pushState({}, "Hide", 'http://caregiver.test/questionnaire/');
  }
</script>



<?php
$sixty = $dementia = $caregiving = $veteran = $employed = $healthcare = $legal = $finance = $finance = $support = $selfcare = 'no';
$submit = false;


  if (isset($_GET["sixty"])) {
    if ($_GET["sixty"] == 'yes') {
      $sixty = 'yes';
    } else if ($_GET["sixty"] == 'no') {
      $sixty = 'no';
    }
  }

  if (isset($_GET["dementia"])) {
    if ($_GET["dementia"] == 'yes') {
      $dementia = 'yes';
    } else if ($_GET["dementia"] == 'no') {
      $dementia = 'no';
    }
  }

  if (isset($_GET["caregiving"])) {
    if ($_GET["caregiving"] == 'yes') {
      $caregiving = 'yes';
    } else if ($_GET["caregiving"] == 'no') {
      $caregiving = 'no';
    }
  }

  if (isset($_GET["veteran"])) {
    if ($_GET["veteran"] == 'yes') {
      $veteran = 'yes';
    } else if ($_GET["veteran"] == 'no') {
      $veteran = 'no';
    }
  }

  if (isset($_GET["employed"])) {
    if ($_GET["employed"] == 'yes') {
      $employed = 'yes';
    } else if ($_GET["employed"] == 'no') {
      $employed = 'no';
    }
  }

  if (isset($_GET["healthcare"])) {
    if ($_GET["healthcare"] == 'yes') {
      $healthcare = 'yes';
    } else if ($_GET["healthcare"] == 'no') {
      $healthcare = 'no';
    }
  }

  if (isset($_GET["legal"])) {
    if ($_GET["legal"] == 'yes') {
      $legal = 'yes';
    } else if ($_GET["legal"] == 'no') {
      $legal = 'no';
    }
  }

  if (isset($_GET["finance"])) {
    if ($_GET["finance"] == 'yes') {
      $finance = 'yes';
    } else if ($_GET["finance"] == 'no') {
      $finance = 'no';
    }
  }

  if (isset($_GET["support"])) {
    if ($_GET["support"] == 'yes') {
      $support = 'yes';
    } else if ($_GET["support"] == 'no') {
      $support = 'no';
    }
  }

  if (isset($_GET["selfcare"])) {
    if ($_GET["selfcare"] == 'yes') {
      $selfcare = 'yes';
    } else if ($_GET["selfcare"] == 'no') {
      $selfcare = 'no';
    }
  }

  // var_dump($_GET);

  if(isset($_GET['submit']) && !empty($_GET['submit'])) {
    $submit = true;
  }

?>



<section>
    <div class="container">
      <div class="row">
          <div class="col">
            <div class="assessment-results">
                  <div class="search-result">
                    <?php
                      $args = [
                        'posts_per_page' => - 1,
                        'tag_slug__in'     => empty( $include ) ? [ 0 ] : $include,
                      ];

                      if ( $sixty == "yes" ) { $args['tag_slug__in'][] = "classes"; }
                      if ( $dementia == "yes" ) { $args['tag_slug__in'][] = "memory-care"; }
                      if ( $caregiving == "yes" ) { $args['tag_slug__in'][] = "caregiving"; }
                      if ( $veteran == "yes" ) { $args['tag_slug__in'][] = "veteran"; }
                      if ( $employed == "yes" ) { $args['tag_slug__in'][] = "employed"; }
                      if ( $healthcare == "yes" ) { $args['tag_slug__in'][] = "healthcare"; }
                      if ( $legal == "yes" ) { $args['tag_slug__in'][] = "legal"; }
                      if ( $finance == "yes" ) { $args['tag_slug__in'][] = "finance"; }
                      if ( $support == "yes" ) { $args['tag_slug__in'][] = "support"; }
                      if ( $selfcare== "yes" ) { $args['tag_slug__in'][] = "selfcare"; }

                      $search_query = new WP_Query( $args );
                    ?>

                      <?php if ( $search_query->have_posts() ): ?>
                        <div class='container form-results'>
                          <div class="row">
                            <div class='col alert resources-found'>
                              <h2>Resources Found.</h2>
                            </div>
                          </div>
                          <div class="row">
                            <?php while ( $search_query->have_posts() ) : $search_query->the_post();?>
                              <div class='col-md-4 form-result'>
                                  <div class='card-body h-100 form-result-card shadow-sm'>
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary active" role="button" aria-pressed="true">Read More</a>
                                  </div>
                              </div>
                            <?php endwhile ?>
                          </div>
                          <div class="row">
                              <div class='col'>
                                  <a href="/questionnaire/" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Reset Assessment</a>

                              </div>
                            </div>
                        </div>
                      <?php else:?>
                        <?php if ($submit == true): ?>
                        <div class="row">
                          <div class='col alert resources-not-found'>
                            <h2>Resources Not Found.</h2>
                         </div>
                        </div>
                        <div class="row">
                            <div class='col'>
                                <a href="/questionnaire/" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Reset Assessment</a>
                            </div>
                        </div>
                        <?php else: ?>
                        <section>
                            <div id="assesment-select" class="container text-center">
                                <div class="row">
                                    <div class='col assesment-select-header'>
                                        <h1>choose quiz length</h1>
                                        <p>Do you want us to recommend resources based on your answers to a questionnaire, or do you want to select from a list of topics yourself?</p>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class='col assesment-select'>
                                        <button class="btn form-button" type="button" id="long">Fill Questionaire</button>
                                    </div>
                                    <div class='col assesment-select'>
                                        <button class="btn form-button" type="button" id="short">Select from list of topics</button>
                                    </div>
                                </div>
                            </div>

                        </section>
                        <?php endif; ?>

                      <?php endif; ?>
                      <?php wp_reset_postdata(); ?>
                  </div>
           </div>
          </div>
      </div>
    </div>
  </section>




<section>
    <div id="short-assesment-form" class="container" style="display:none">
        {{-- this is the short assesment --}}
      </div>
    <div id="long-assesment-form" class="container flex-grow-1 flex-shrink-0 py-5 text-center" style="display:none">
      <div class="mb-5 p-4 bg-white shadow-sm">
        <div id="stepperForm" class="bs-stepper">
          <div class="bs-stepper-header" role="tablist">

            <div class="step" data-target="#tab-1">
              <button type="button" class="step-trigger" role="tab" id="stepperFormtrigger1" aria-controls="tab-1">
                <span class="bs-stepper-circle"></span>
              </button>
            </div>


            <div class="step" data-target="#tab-2">
              <button type="button" class="step-trigger" role="tab" id="stepperFormtrigger2" aria-controls="tab-2">
                <span class="bs-stepper-circle"></span>
              </button>
            </div>


            <div class="step" data-target="#tab-3">
              <button type="button" class="step-trigger" role="tab" id="stepperFormtrigger3" aria-controls="tab-3">
                <span class="bs-stepper-circle"></span>
              </button>
            </div>


            <div class="step" data-target="#tab-4">
              <button type="button" class="step-trigger" role="tab" id="stepperFormtrigger4" aria-controls="tab-4">
                <span class="bs-stepper-circle"></span>
              </button>
            </div>


            <div class="step" data-target="#tab-5">
              <button type="button" class="step-trigger" role="tab" id="stepperFormtrigger5" aria-controls="tab-5">
                <span class="bs-stepper-circle"></span>
              </button>
            </div>


            <div class="step" data-target="#tab-6">
              <button type="button" class="step-trigger" role="tab" id="stepperFormtrigger6" aria-controls="tab-6">
                <span class="bs-stepper-circle"></span>
              </button>
            </div>


            <div class="step" data-target="#tab-7">
              <button type="button" class="step-trigger" role="tab" id="stepperFormtrigger7" aria-controls="tab-7">
                <span class="bs-stepper-circle"></span>
              </button>
            </div>


            <div class="step" data-target="#tab-8">
              <button type="button" class="step-trigger" role="tab" id="stepperFormtrigger8" aria-controls="tab-8">
                <span class="bs-stepper-circle"></span>
              </button>
            </div>


            <div class="step" data-target="#tab-9">
              <button type="button" class="step-trigger" role="tab" id="stepperFormtrigger9" aria-controls="tab-9">
                <span class="bs-stepper-circle"></span>
              </button>
            </div>


            <div class="step" data-target="#tab-10">
              <button type="button" class="step-trigger" role="tab" id="stepperFormtrigger10" aria-controls="tab-10">
                <span class="bs-stepper-circle"></span>
              </button>
            </div>


          </div>
          <div class="bs-stepper-content">

            <form>
                <div id="tab-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepperFormtrigger1">
                  <fieldset class="form-group">
                    <div class="row">
                      <div class="col">
                        <label for="">Are you caring for someone over 60 years old?</label>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" class="form-control" name="sixty" value="yes">
                            <label class="form-check-label" for="sixty">Yes</label>
                           </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" class="form-control" name="sixty" value="no">
                            <label class="form-check-label" for="sixty">No</label>
                          </div>
                      </div>
                    </div>
                  </fieldset>
                  <button class="btn form-button sixty-next-btn" type="button" disabled="disabled" onclick="stepperForm.next()">Next</button>

                </div>

                <div id="tab-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepperFormtrigger2">
                  <fieldset class="form-group">
                      <div class="row">
                        <div class="col">
                          <label for="">Does your loved one have dementia?</label>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" class="form-control" name="dementia" value="yes">
                              <label class="form-check-label" for="dementia">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" class="form-control" name="dementia" value="no">
                              <label class="form-check-label" for="dementia"> No</label>
                            </div>
                            <div class="show-form-error alert alert-danger" role="alert">This website is for caregivers of older adults and individuals with dementia we encouraging you to call United Way 2-1-1</div>
                        </div>
                      </div>
                    </fieldset>
                    <button class="btn form-button" type="button" onclick="stepperForm.previous()">Previous</button>
                    <button class="btn form-button dementia-next-btn" type="button" disabled="disabled" onclick="stepperForm.next()">Next</button>
                </div>

                <div id="tab-3" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepperFormtrigger3">
                  <fieldset class="form-group">
                    <div class="row">
                      <div class="col">
                        <label for="">Are you new to caregiving?</label>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" class="form-control" name="caregiving" value="yes">
                          <label class="form-check-label" for="caregiving"> Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" class="form-control" name="caregiving" value="no">
                          <label class="form-check-label" for="caregiving"> No</label>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <button class="btn form-button" type="button" onclick="stepperForm.previous()">Previous</button>
                  <button class="btn form-button caregiving-next-btn" type="button" disabled="disabled" onclick="stepperForm.next()">Next</button>
                </div>

                <div id="tab-4" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepperFormtrigger4">
                  <fieldset class="form-group">
                    <div class="row">
                      <div class="col">
                        <label for="">Are you or a loved one a veteran?</label>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" class="form-control" name="veteran" value="yes">
                          <label class="form-check-label" for="veteran"> Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" class="form-control" name="veteran" value="no">
                          <label class="form-check-label" for="veteran"> No</label>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <button class="btn form-button" type="button" onclick="stepperForm.previous()">Previous</button>
                  <button class="btn form-button veteran-next-btn" type="button" disabled="disabled" onclick="stepperForm.next()">Next</button>
                </div>

                <div id="tab-5" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepperFormtrigger5">
                  <fieldset class="form-group">
                    <div class="row">
                      <div class="col">
                        <label for="">Are you currently employed?</label>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" class="form-control" name="employed" value="yes">
                          <label class="form-check-label" for="employed"> Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" class="form-control" name="employed" value="no">
                          <label class="form-check-label" for="employed"> No</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" class="form-control" name="employed" value="Decline to State">
                            <label class="form-check-label" for="employed"> Decline to State</label>
                          </div>
                      </div>
                    </div>
                  </fieldset>
                  <button class="btn form-button" type="button" onclick="stepperForm.previous()">Previous</button>
                  <button class="btn form-button employed-next-btn" type="button" disabled="disabled" onclick="stepperForm.next()">Next</button>
                </div>

                <div id="tab-6" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepperFormtrigger6">
                  <fieldset class="form-group">
                    <div class="row">
                      <div class="col">
                        <label for="">Do you need help understanding healthcare benefits such as Medicare and Medicaid?</label>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" class="form-control" name="healthcare" value="yes">
                          <label class="form-check-label" for="healthcare"> Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" class="form-control" name="healthcare" value="no">
                          <label class="form-check-label" for="healthcare"> No</label>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <button class="btn form-button" type="button" onclick="stepperForm.previous()">Previous</button>
                  <button class="btn form-button healthcare-next-btn" type="button" disabled="disabled" onclick="stepperForm.next()">Next</button>
                </div>

                <div id="tab-7" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepperFormtrigger7">
                  <fieldset class="form-group">
                    <div class="row">
                      <div class="col">
                        <label for="">Do you need information on how to get a break from caregiving responsibilities?</label>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" class="form-control" name="caregiving" value="yes">
                          <label class="form-check-label" for="caregiving"> Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" class="form-control" name="caregiving" value="no">
                          <label class="form-check-label" for="caregiving"> No</label>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <button class="btn form-button" type="button" onclick="stepperForm.previous()">Previous</button>
                  <button class="btn form-button caregiving-next-btn" type="button" disabled="disabled" onclick="stepperForm.next()">Next</button>
                </div>

                <div id="tab-8" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepperFormtrigger8">
                  <fieldset class="form-group">
                    <div class="row">
                      <div class="col">
                        <label for="">Do you need information on Legal concerns (i.e. power of attorney, living will, advanced directives)?</label>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" class="form-control" name="legal" value="yes">
                          <label class="form-check-label" for="legal"> Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" class="form-control" name="legal" value="no">
                          <label class="form-check-label" for="legal"> No</label>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <button class="btn form-button" type="button" onclick="stepperForm.previous()">Previous</button>
                  <button class="btn form-button legal-next-btn" type="button" disabled="disabled" onclick="stepperForm.next()">Next</button>
                </div>

                <div id="tab-9" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepperFormtrigger9">
                  <fieldset class="form-group">
                    <div class="row">
                      <div class="col">
                        <label for="">Do you need information on in-home help (i.e. home health providers, home modifications)?</label>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" class="form-control" name="support" value="yes">
                          <label class="form-check-label" for="support"> Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" class="form-control" name="support" value="no">
                          <label class="form-check-label" for="support"> No</label>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <button class="btn form-button" type="button" onclick="stepperForm.previous()">Previous</button>
                  <button class="btn form-button support-next-btn" type="button" disabled="disabled" onclick="stepperForm.next()">Next</button>
                </div>

                <div id="tab-10" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepperFormtrigger10">
                  <fieldset class="form-group">
                    <div class="row">
                      <div class="col">
                        <label for="">Do you need information on how to pay for care?</label>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" class="form-control" name="finance" value="yes">
                          <label class="form-check-label" for="finance"> Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" class="form-control" name="finance" value="no">
                          <label class="form-check-label" for="finance"> No</label>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <button class="btn form-button" type="button" onclick="stepperForm.previous()">Previous</button>
                  <button class="btn btn-success finance-next-btn" type="submit" disabled="disabled" name="submit" value="submit" >Submit</button>
                </div>
            </form>
          </div>
        </div>
      </div>

    </div>
</section>




<script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
<script>

  var stepperForm = new Stepper(document.querySelector('#stepperForm'), {
    animation: true
  })
  // var stepperFormNode = document.querySelector('#stepperForm')
  // stepperFormNode.addEventListener('show.bs-stepper', function (event) {
  //   console.warn('show.bs-stepper', event)
  // })
</script>

