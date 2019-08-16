{{-- Post Intro Section --}}
<?php if( get_field('post_intro_display') == 'yes' ): ?>
  <section class="post-intro-section">
    <div class="container post-container">
      <div class="row">
        <div class="col post-intro">
          <p><?php the_field('post_intro_text'); ?></p>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<?php if( get_field('post_intro_display') == 'no' ): ?><?php endif; ?>


{{-- Post Video Section --}}
<?php if( get_field('post_video_display') == 'yes' ): ?>
  <section class="post-video-section">
    <div class="container post-container">
      <div class="row">
        <div class="col post-video">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php the_field('post_video_link'); ?>" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<?php if( get_field('post_video_display') == 'no' ): ?><?php endif; ?>


{{-- Post Content Section --}}
<section class="post-content-section">
  <div class="container post-container">
    <div class="row">
      <div class="col post-content">
        @php the_content() @endphp
      </div>
    </div>
  </div>
</section>








{{--

<article @php post_class() @endphp>
  <header>
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article> --}}
