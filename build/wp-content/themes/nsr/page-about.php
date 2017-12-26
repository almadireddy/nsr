<?php // about page
get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-12 page-title">
      <h1>About</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-8">
      <p>this is the about paragraph.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <?php the_content(); ?>
    </div>
  </div>
</div>



<?php endwhile; endif;

get_footer();
