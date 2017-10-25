<?php
/**
 * Created by PhpStorm.
 * User: aahladmadireddy
 * Date: 10/4/17
 * Time: 2:49 PM
 */

get_header();
?>

<div class="container">
  <div class="row callout">
    <div class="col-sm-6 callout-text">
      <p><?php echo get_option('mainDescription') ?></p>
    </div>
    <div class="col-sm-6">
      <img src="<?php echo get_option('mainImage')?>" alt="" class="img-responsive">
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
    // Here's how to use find()
    $params = array(
      'limit' => 4,
      'where'=> "featured.meta_value = 1"
    );

    $games = pods( 'game', $params );
    $regex = '/https?\:\/\/[^\" ]+/i';



    for ($i = 0; $i < 4; $i++):
      $games->fetch();
    ?>

      <div class="col-sm-6 featured-game">
        <?php preg_match($regex, $games->display('screenshots'), $matches) ?>
        <div class="col-sm-6" style="background-image: url(<?php echo $matches[0] ?>); background-size: cover; background-position: center;">
        </div>
        <div class="col-sm-6 featured-game-description">
          <h3><?php echo $games -> display('game_title') ?></h3>
          <p><?php echo mb_strimwidth($games -> display('description'), 0, 100, "...") ?></p>
        </div>
      </div>

    <?php   if ($i == 1) { ?>
       </div>
       <div class="row">
    <?php } ?>

    <?php
      endfor;
    ?>

  </div>

<?php
get_footer();