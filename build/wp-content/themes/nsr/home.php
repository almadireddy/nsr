<?php // News Page
get_header(); ?>


<div class="container">
  <div class="row">
    <div class="col-sm-12 page-title">
      <h1>News</h1>
    </div>
  </div>
  <?php
  if (have_posts()): $postCount = 0; while (have_posts()):
    $postCount ++;
    the_post(); ?>

    <div class="row news-listing-item">
      <div class="col-sm-8 col-sm-push-2 news-post">
        <?php get_template_part('template-parts/content/news-listing', get_post_format()); ?>
      </div>

      <?php /*if ($postCount == 1): */?><!--
        <div class="col-sm-4 categories-panel">
          <h4>Categories</h4>
          <?php /*$categories = get_categories(array('orderby' => 'name', 'order'   => 'ASC')); */?>

          <ul class="categories-list">
            <?php /*foreach ($categories as $category): */?>
              <li><a href="<?php /*echo get_category_link($category) */?>"><?php /* echo $category->name */?></a></li>
            <?php /*endforeach; */?>
          </ul>
        </div>
      --><?php /*endif;*/?>
    </div>
  <?php endwhile; ?>

  <div class="row pagination-container">
    <div class="col-sm-8 col-sm-push-2 text-center">
      <?php numeric_pagination() ?>
    </div>
  </div>
</div>

<?php endif;

get_footer();
