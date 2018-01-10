<?php // research page
get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();

$param = array(
  'limit' => 0,
);
$research = pods('game', $param);

?>

<div class="container about-page">
  <div class="row">
    <div class="col-sm-12 page-title">
      <h1>Research</h1>
    </div>
  </div>

  <section>
    <div class="row ">
      <div class="col-sm-8 col-sm-push-2 callout-text">
        <p><?php echo get_option('nsr_settings_research_paragraph') ?></p>
      </div>
    </div>
  </section>

  <section>
    <div class="row section-title">
      <div class="col-sm-12">
        <h2>Featured Games</h2>
      </div>
    </div>
    <div class="featured-games">
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
          <div class="col-sm-6 featured-game-img" style="background-image: url(<?php echo $screenshots[0] ?>); background-size: cover; background-position: center;">
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

      </div> <!-- close row -->
    </div>
  </section>

  <section>
    <div class="row section-title">
      <div class="col-sm-12">
        <h2>All Games</h2>
      </div>
    </div>
    <div class="row games">
    <?php
    $counter = 0;
    while ($research->fetch()):
      $screenshots = array_filter(explode(" ", $research->display('screenshots')), 'parse_url');
    ?>

    <div class="col-sm-4 game">
      <img src="<?php echo $screenshots[0] ?>" alt="" class="img-responsive">
      <a href="<?php echo get_site_url() . '/game/' . $research->display('slug') ?>"><h3 class="game-title"><?php echo $research->display('game_title') ?></h3></a>
      <p><?php echo trimString(15, $research -> display('description')) ?></p>
      <a href="<?php echo get_site_url() . '/game/' . $research->display('slug') ?>">View More</a>
    </div>

    <?php $counter++; if ($counter % 3 == 0): ?>
    </div>
    <div class="row games">
    <?php endif; endwhile; ?>
    </div>
  </section>

<?php endwhile; endif; get_footer();
