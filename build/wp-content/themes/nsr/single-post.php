<?php // a template to view a post
get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php
  the_content();

endwhile; endif;

get_footer();
