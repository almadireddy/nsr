<?php
get_header();
?>

  <div class="container">
    <div class="row callout">
      <div class="col-sm-6 callout-text">
        <p><?php echo get_option('nsr_settings_home_page_description') ?></p>
      </div>
      <div class="col-sm-6">
        <img src="<?php echo pods_image_url(get_option('nsr_settings_home_page_feature_image')[0], null) ?>" alt="" class="img-responsive">
      </div>
    </div>

    <hr class="section-divider">

    <div class="row section-title">
      <h2>Recent News</h2>
    </div>

    <?php $query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>3)); ?>

    <div class="row recent-news">
    <?php
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();?>

      <div class="col-sm-4 blog-post-feature">
        <?php get_template_part('template-parts/content/content', get_post_format()); ?>
      </div>

      <?php endwhile; endif; ?>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h3 class="text-center"><a href="./news">More <i class="fa fa-chevron-right"></i></a></h3>
      </div>
    </div>

    <hr class="section-divider">

    <div class="row section-title">
      <div class="col-sm-12">
        <h2>Featured Games</h2>
      </div>
    </div>

    <div class="row">
      <?php
      $params = array(
        'limit' => 4,
        'where'=> "featured.meta_value = 1"
      );

      $games = pods( 'game', $params );

      for ($i = 0; $i < 4; $i++):
      $games->fetch();
      $screenshots = array_filter(explode(" ", $games->display('screenshots')), 'parse_url');
      ?>

      <div class="col-sm-6 featured-game">
        <div class="col-sm-6" style="background-image: url(<?php echo $screenshots[0] ?>); background-size: cover; background-position: center;">
        </div>
        <div class="col-sm-6 featured-game-description">
          <h3><?php echo $games -> display('game_title') ?></h3>
          <p class="featured-game-description-paragraph"><?php echo trimString(15, $games -> display('description')) ?></p>
          <a href="<?php echo get_site_url() . '/game/' . $games -> display('slug') ?>">View More</a>
        </div>
      </div>

      <?php  if ($i == 1) { ?>
    </div>
    <div class="row">
      <?php } ?>

      <?php
      endfor;
      ?>

    </div>
  </div>
<?php
get_footer();