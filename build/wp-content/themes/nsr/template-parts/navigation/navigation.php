<?php
/**
 * Created by PhpStorm.
 * User: aahladmadireddy
 * Date: 10/10/17
 * Time: 5:35 PM
 */

$navOptions = array(
  'theme_location'  => 'main_nav',
  'container'       => 'ul',
  'menu_class'      => 'nav navbar-nav navbar-right'
); ?>

<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">Narrative Systems</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <?php wp_nav_menu( $navOptions ); ?>
    </div>
  </div>
</nav>
