<div>
  <?php if (catch_that_image()) { ?>
    <img src="<?php echo catch_that_image() ?>" alt="" class="img-responsive">
  <?php } ?>
  <h3 class="news-listing-title"><a href="<?php echo get_post_permalink(get_the_ID()) ?>"><?php the_title() ?></a></h3>
  <p class="news-listing-meta"><?php the_date(); ?></p>

  <p><?php echo get_the_excerpt() ?></p>
  <p><a href="<?php echo get_post_permalink(get_the_ID()) ?>">Read more</a></p>
  <hr>
</div>