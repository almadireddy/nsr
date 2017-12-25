<?php // a template to view a post
get_header(); ?>

<div class="container">
  <div class="row single-post">
    <div class="col-sm-8 col-sm-push-2">
      <?php if (have_posts()): while (have_posts()): the_post(); ?>

      <h1 class="post-title"><?php the_title() ?></h1>
      <p class="text-center post-meta"><?php the_date(); ?> by <a
          href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ?>"><?php the_author() ?></a></p>

      <?php
        the_content();
        endwhile; endif;
        ?>
    </div>
  </div>
</div>

<?php get_footer();
