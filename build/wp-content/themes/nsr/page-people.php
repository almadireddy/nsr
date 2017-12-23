<?php // people page
get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php

  echo "people page";
  the_content();

endwhile; endif;

get_footer();
