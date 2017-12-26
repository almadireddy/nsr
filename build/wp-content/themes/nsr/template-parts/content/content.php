<div class="blog-post">
  <h3 class="blog-post-title"><a href="<?php echo get_post_permalink(get_the_ID()) ?>"><?php the_title() ?></a></h3>
  <p class="blog-post-meta"><?php the_date(); ?></p>

  <p><?php echo get_the_excerpt() ?></p>
  <p><a href="<?php echo get_post_permalink(get_the_ID()) ?>">Read more</a></p>
</div>
