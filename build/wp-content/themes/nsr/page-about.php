<?php // about page
get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container about-page">
  <div class="row">
    <div class="col-sm-12 page-title">
      <h1>About</h1>
    </div>
  </div>

  <section>
    <div class="row about-image">
      <div class="col-sm-12">
        <img src="http://unsplash.it/1280/720" alt="" class="img-responsive">
      </div>
    </div>
  </section>

  <section>
    <div class="row ">
      <div class="col-sm-8 col-sm-push-2 callout-text">
        <p><?php echo get_option('nsr_settings_about_paragraph') ?></p>
      </div>
    </div>
  </section>

  <section>
    <div class="row section-title">
      <div class="col-sm-12">
        <h3>History</h3>
      </div>
    </div>
    <div class="row ">
      <div class="col-sm-8">
        <p><?php echo get_option('nsr_settings_history_paragraph') ?></p>
      </div>
      <div class="col-sm-4">
        <img src="http://unsplash.it/800/600" alt="" class="img-responsive">
      </div>
    </div>
  </section>

  <section>
    <div class="row section-title">
      <div class="col-sm-12">
        <h3>Partners</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <img src="http://unsplash.it/800/600?blur" alt="" class="img-responsive">
      </div>
      <div class="col-sm-3">
        <img src="http://unsplash.it/800/600?blur" alt="" class="img-responsive">
      </div>
      <div class="col-sm-3">
        <img src="http://unsplash.it/800/600?blur" alt="" class="img-responsive">
      </div>
      <div class="col-sm-3">
        <img src="http://unsplash.it/800/600?blur" alt="" class="img-responsive">
      </div>
    </div>
  </section>
</div>



<?php endwhile; endif;

get_footer();
