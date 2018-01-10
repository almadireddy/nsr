<?php // people page
get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();

$param = array(
  'limit' => 0,
);

$people = pods('person', $param);

?>

<div class="container people-page">
  <div class="row">
    <div class="col-sm-12 page-title">
      <h1>People</h1>
    </div>
  </div>

  <section>
    <?php
    while ($people->fetch()): if ($people->is( 'typeofperson', 'Director')):
    ?>
    <div class="row director">
      <div class="col-sm-6">
        <img src="<?php echo pods_image_url($people->display('profile'), null)?>" alt="" class="img-responsive">
      </div>
      <div class="col-sm-6">
        <h2 class="name"><?php echo $people->display('fullname')?></h2>
        <h3><?php echo $people->display('jobtitle')?></h3>
        <p><?php echo $people->display('description')?></p>
      </div>
    </div>
    <?php endif; endwhile; ?>
  </section>

  <section>
    <div class="row section-title">
      <div class="col-sm-12">
        <h2>Current Members</h2>
      </div>
    </div>
    <div class="row current-members">
    <?php
    $param = array(
      'limit' => 0,
    );

    $people = pods('person', $param);

    $counter = 0;
    while ($people->fetch()):
      if ($people->is( 'typeofperson', 'Current Member')): ?>
      <div class="col-sm-3 person">
        <img src="<?php echo pods_image_url($people->display('profile'), null)?>" alt="" class="img-responsive">
        <h3 class="name"><?php echo $people->display('fullname')?></h3>
        <h4><?php echo $people->display('jobtitle')?></h4>
        <p><?php echo $people->display('description')?></p>
      </div>
    <?php $counter++; if ($counter % 4 == 0): ?>
    </div>
    <div class="row">
    <?php endif; endif; endwhile;?>
    </div>
  </section>

  <!--<section>
    <div class="row section-title">
      <div class="col-sm-12">
        <h2>Alumni</h2>
      </div>
    </div>
    <div class="row">
      <?php
/*      $param = array(
        'limit' => 0,
      );

      $people = pods('person', $param);

      $counter = 0;
      while ($people->fetch()):
      if ($people->is( 'typeofperson', 'Alumni')): */?>
      <div class="col-sm-3 person">
        <img src="<?php /*echo pods_image_url($people->display('profile'), null)*/?>" alt="" class="img-responsive">
        <h3><?php /*echo $people->display('fullname')*/?></h3>
        <h4><?php /*echo $people->display('jobtitle')*/?></h4>
        <p><?php /*echo $people->display('description')*/?></p>
      </div>
      <?php /*$counter++; if ($counter % 4 == 0): */?>
    </div>
    <div class="row">
      <?php /*endif; endif; endwhile;*/?>
    </div
  </section>-->

</div>

<?php endwhile; endif; get_footer();
