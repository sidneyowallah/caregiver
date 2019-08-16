<?php if( get_field('page_intro_text') == 'yes' ): ?>
  <section>
    <div class="page-intro-container">
      <p><?php the_field('intro_text'); ?></p>
    </div>
  </section>
<?php endif; ?>
<?php if( get_field('page_intro_text') == 'no' ): ?><?php endif; ?>


<?php if( get_field('page_form_display') == 'yes' ): ?>
  <?php if( have_rows('page_form') ):
      while( have_rows('page_form') ): the_row();
        // vars
          $formTitle = get_sub_field('page_form_title');
          $formShortCode = get_sub_field('page_form_shortcode');
      ?>
        <section>
            <div class="container form-modal-container">
              <div class="row">
                <div class="col text-center">

                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-outline-primary form-modal-button" data-toggle="modal" data-target="#formModal">
                      <?php echo $formTitle; ?>
                  </button>

                    <!-- Modal -->
                    <div class="modal fade form-modal" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="formModalLongTitle"><?php echo $formTitle; ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="container">
                              <div class="row">
                                <div class="col">
                                  <?php echo do_shortcode($formShortCode); ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </section>
      <?php endwhile; ?>
    <?php endif; ?>
  <?php endif; ?>
<?php if( get_field('page_form_display') == 'no' ): ?><?php endif; ?>

<section>
  <div class="container page-container">
    <div class="row">
      <div class="col">
        @php the_content() @endphp
      </div>
    </div>
  </div>
</section>
