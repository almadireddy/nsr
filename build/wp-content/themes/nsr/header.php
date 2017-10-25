<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head();?>
</head>

<body>

<?php  if (is_home()) :  ?>

  <div class="jumbotron">
    <div class="container">
      <h1>Narrative Systems Research Lab</h1>
      <h2><?php echo get_option('subtitle') ?></h2>
    </div>
  </div>

<?php endif;

get_template_part( 'template-parts/navigation/navigation', 'nav' );

?>