<?php // News Page
get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="container">
    <div class="row">
      <div class="col-sm-8 news-post">
        <?php get_template_part('template-parts/content/content', get_post_format()); ?>
      </div>

      <?php if (is_latest()): ?>
      <div class="col-sm-4 categories-panel">
        <h4>Categories</h4>
        <?php
        $categories = get_categories(array(
          'orderby' => 'name',
          'order'   => 'ASC'
        ));

        foreach ($categories as $category): ?>

          <a href="<?php echo get_category_link($category) ?>"><?php  echo $category->name ?></a>

        <?php endforeach; endif;?>


  </div>
    </div>
  </div>

<?php endwhile; ?>

  <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
  <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

<?php endif;

get_footer();
