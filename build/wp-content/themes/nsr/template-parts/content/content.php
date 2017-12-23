<div class="blog-post">
  <h3 class="blog-post-title"><a href="<?php echo get_post_permalink(get_the_ID()) ?>"><?php the_title() ?></a></h3>
  <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author() ?></p>

  <p><?php echo trimString(20, get_the_excerpt()) ?></p>
  <hr>

  <!-- the rest of the content -->

</div><!-- /.blog-post -->