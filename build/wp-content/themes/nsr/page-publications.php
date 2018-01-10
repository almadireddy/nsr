<?php // publications page
get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container about-page">
  <div class="row">
    <div class="col-sm-12 page-title">
      <h1>Publications</h1>
    </div>
  </div>

  <?php
  the_content();

endwhile; endif;

get_footer();
