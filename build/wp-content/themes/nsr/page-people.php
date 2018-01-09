<?php // people page
get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();

$param = array(
  'limit' => 5,
);

$people = pods('person', $param);

?>

<div class="container">
  <section>
    <div class="row">
      <div class="col-sm-12 page-title">
        <h1>People</h1>
      </div>
    </div>
  </section>
  <section>
    <?php
    while ($people->fetch()): if ($people->is( 'typeofperson', 'Director')):
    ?>
    <div class="row">
      <div class="col-sm-6">
        <img src="<?php echo pods_image_url($people->display('profile'), null)?>" alt="" class="img-responsive">
      </div>
      <div class="col-sm-6">
        <h1><?php $people->display('fullname')?></h1>
        <h3><?php $people->display('jobTitle')?></h3>
        <p><?php $people->display('description')?></p>
      </div>
    </div>
    <?php endif; endwhile; ?>
  </section>

  <section>
    <div class="row section-title">
      <h2>Current Members</h2>
    </div>
    <div class="row">
    <?php
    $param = array(
      'limit' => 5,
    );

    $people = pods('person', $param);

    $counter = 1;
    while ($people->fetch()):
      if ($people->is( 'typeofperson', 'Current Member')): ?>
      <div class="col-sm-3 person">
        <img src="<?php echo pods_image_url($people->display('profile'), null)?>" alt="" class="img-responsive">
        <h3><?php $people->display('fullname')?></h3>
        <p><?php $people->display('jobTitle')?></p>
        <p><?php $people->display('description')?></p>
      </div>
    <?php
        $counter++;
        if ($counter % 4 == 0) { ?>
    </div>
    <div class="row">
    <?php } endif; endwhile;?>
  </section>
</div>

<?php endwhile; endif; get_footer();
