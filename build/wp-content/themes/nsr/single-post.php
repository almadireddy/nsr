<?php // a template to view a post
get_header(); ?>

<div class="container">
  <div class="row single-post">
    <div class="col-sm-8 col-sm-push-2">
      <?php if (have_posts()): while (have_posts()): the_post(); ?>

      <h1 class="post-title"><?php the_title() ?></h1>
      <p class="text-center post-meta"><?php the_date(); ?></p>

      <?php the_content(); ?>
      <?php endwhile; endif; ?>

    </div>
  </div>
</div>

<?php get_footer();
