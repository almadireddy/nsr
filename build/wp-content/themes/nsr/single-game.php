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
?>

<div class="container-fluid post-header" style="background-image: url(<?php echo $featuredImage ?>)">
  <div class="row">
    <div class="col-sm-12 game-title">
      <h1><?php echo the_title() ?></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <a href="<?php echo $playLink?>" class="game-link">Play</a>
    </div>
  </div>
</div>

<div class="container game-content">
  <div class="row game-description">
    <div class="col-sm-6 col-sm-push-3 callout-text">
      <p><?php echo $description; ?></p>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-8 col-sm-push-2">
      <div class="col-sm-6">
        <img src="http://unsplash.it/400" alt="" class="img-responsive author-picture">
      </div>
      <div class="col-sm-6 author-text">
        <h3>Firstname Lastname</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores dolores harum itaque quaerat repellendus. A blanditiis cum, debitis delectus deleniti enim esse illo laboriosam, natus nostrum perspiciatis quidem reiciendis tenetur unde veritatis voluptas voluptatem. Adipisci at consectetur consequuntur dicta, ea illum in, ipsa magni nulla, optio placeat quibusdam sed temporibus?</p>
      </div>
    </div>
  </div>

  <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
</div>


<?php
get_footer();