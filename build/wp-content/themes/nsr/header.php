<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <?php wp_head();?>
</head>

<body>

<?php  if (is_home()) :  ?>

  <div class="jumbotron">
    <h1>Narrative Systems Research Lab</h1>
    <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, sit. Lorem ipsum dolor sit amet.</h2>
  </div>

<?php endif;

get_template_part( 'template-parts/navigation/navigation', 'nav' );

?>