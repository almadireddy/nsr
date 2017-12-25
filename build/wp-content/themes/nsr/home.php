<?php // News Page
get_header(); ?>


<div class="container news-listing">
  <?php
  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="row news-listing-item">
      <div class="col-sm-8 news-post">
        <?php get_template_part('template-parts/content/news-listing', get_post_format()); ?>
      </div>

      <?php if (is_latest()): ?>
        <div class="col-sm-4 categories-panel">
          <h4>Categories</h4>
          <?php $categories = get_categories(array('orderby' => 'name', 'order'   => 'ASC')); ?>

          <ul class="categories-list">
            <?php foreach ($categories as $category): ?>
              <li><a href="<?php echo get_category_link($category) ?>"><?php  echo $category->name ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif;?>
    </div>
  <?php endwhile; ?>

  <div class="row pagination-container">
    <!--<div class="nav-previous alignleft"><?php /*next_posts_link( 'Older posts' ); */?></div>
    <div class="nav-next alignright"><?php /*previous_posts_link( 'Newer posts' ); */?></div>-->
    <div class="col-sm-8 text-center">
      <?php wpbeginner_numeric_posts_nav() ?>
    </div>
  </div>
</div>

<?php endif;

get_footer();
