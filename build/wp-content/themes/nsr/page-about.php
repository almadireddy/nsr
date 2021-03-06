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
        <img src="<?php echo pods_image_url(get_option('nsr_settings_about_picture'), null) ?>" alt="" class="img-responsive">
      </div>
    </div>
  </section>

  <section>
    <div class="row">
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
    <div class="row">
      <div class="col-sm-8">
        <p><?php echo get_option('nsr_settings_history_paragraph') ?></p>
      </div>
      <div class="col-sm-4">
        <img src="<?php echo pods_image_url(get_option('nsr_settings_history_picture'), null) ?>" alt="" class="img-responsive">
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
    <?php
    for ($i = 1; $i < 5; $i++):
    ?>

      <div class="col-sm-3">
        <img src="<?php echo pods_image_url(get_option('nsr_settings_partner_logos')[$i-1], null) ?>" alt="" class="img-responsive">
      </div>

    <?php endfor; ?>
    </div>
  </section>
</div>



<?php endwhile; endif;

get_footer();
