<?php
get_header();
?>

<?php
if ( have_posts() ) : while ( have_posts() ) :
  the_post();

  $slug = get_post_field( 'post_name', get_post() );
  $game = pods('game', $slug);

  $description = $game -> display('description');
  $featuredImage = $game -> display('header_image');
  $playLink = $game -> display('file');

  $gameAuthor = $game -> display('game_author');
  $gameAuthorDescription = $game -> display('author_description');
  $gameAuthorPicture = $game -> display('author_picture');
?>

<div class="container-fluid post-header" style="background-image: url(<?php echo $featuredImage ?>)">
  <div class="row">
    <div class="col-sm-12 game-title">
      <h1><?php echo $game->display('game_title') ?></h1>
    </div>
  </div>
  <?php if ($playLink != null): ?>
  <div class="row">
    <div class="col-sm-12">
      <a href="<?php echo $playLink?>" class="game-link">Play</a>
    </div>
  </div>
  <?php endif; ?>
</div>

<div class="container game-content">
  <div class="row game-description">
    <div class="col-sm-6 col-sm-push-3 callout-text">
      <p><?php echo $description; ?></p>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-8 col-sm-push-2 author">
      <div class="col-sm-6">
        <img src="<?php echo pods_image_url($gameAuthorPicture, null) ?>" alt="" class="img-responsive author-picture">
      </div>
      <div class="col-sm-6 author-text">
        <h3><?php echo $gameAuthor ?></h3>
        <p><?php echo $gameAuthorDescription ?></p>
      </div>
    </div>
  </div>

  <?php
  $screenshots = array_filter(explode(" ", $game->display('screenshots')), 'parse_url');

  $length = count($screenshots);

  ?>

  <div class="row">
    <div class="col-sm-8 col-sm-push-2">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

          <?php for ($i = 1; $i < $length; $i++): ?>
            <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>"></li>
          <?php endfor; ?>

        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="<?php echo $screenshots[0]; ?>" alt="screenshot">
          </div>

          <?php
          foreach (array_slice($screenshots, 1) as $url):
            ?>
            <div class="item">
              <img src="<?php echo $url; ?>" alt="screenshot">
            </div>

            <?php
          endforeach;
          ?>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="fa fa-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="fa fa-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>

  <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
</div>


<?php
get_footer();