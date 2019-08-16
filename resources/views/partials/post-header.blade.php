
<section class="post-header-section">
  <div class="jumbotron jumbotron-fluid"
  style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
  url(
    <?php if( get_field('post_header_background') == 'yes' ): ?>
    <?php $pageBackgroundImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
    <?php echo $pageBackgroundImage[0]; ?>
    <?php endif; ?>
    <?php if( get_field('post_header_background') == 'no' ): ?>
      @asset('images/br-hero.jpg')
    <?php endif; ?>);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 50% 50%;">
    <div class="container hero-container post-header">
      <a href="/"><img class="text-center header-logo" src="@asset('images/br-logo.png')" alt="Baker Ripley logo"></a>
      <h1>{!! App::title() !!}</h1>
    </div>
  </div>
</section>
