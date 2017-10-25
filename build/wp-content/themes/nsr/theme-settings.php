<?php
/* Add the media uploader script */
function media_script_enqueue() {
wp_enqueue_media();
wp_enqueue_script( 'media_script',get_template_directory_uri() . '/js/media_script.js');
}

add_action('admin_enqueue_scripts', 'media_script_enqueue');


// Global Settings
function custom_settings_add_menu() {
  add_menu_page( 'NSR Theme Settings', 'NSR Theme Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );


// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
      <?php
      settings_fields( 'section1' );
      do_settings_sections( 'theme-options' );
      submit_button();
      ?>
    </form>
  </div>
<?php }


function custom_settings_page_setup() {
  add_settings_section( 'section1', 'NSR Theme Settings', null, 'theme-options' );
  add_settings_field(
      'subtitle',
    'Home Page Subtitle',
    'subtitle_setting',
    'theme-options',
    'section1'
  );
  add_settings_field(
      'mainImage',
    'Home Page Feature Image',
    'main_image_setting',
    'theme-options',
    'section1'
  );
  add_settings_field(
      'mainDescription',
      'Home Page Description',
      'home_page_description',
    'theme-options',
    'section1'
  );

  register_setting('section1', 'subtitle');
  register_setting('section1', 'mainImage');
  register_setting('section1', 'mainDescription');
}

function main_image_setting() { ?>
  <input id="image-url" type="text" name="mainImage" value="<?php echo get_option('mainImage') ?>" />
  <input id="upload-button" type="button" class="button" value="Upload Image" />
  <p>Preview:</p>
  <img style="width: 250px" src="<?php echo get_option('mainImage') ?>" alt="">
<?php }

function subtitle_setting() { ?>
  <textarea rows="10" type="text" name="subtitle" id="subtitle"><?php echo get_option( 'subtitle' ); ?></textarea>
<?php }

function home_page_description() { ?>
  <textarea rows="10" type="text" name="mainDescription" id="mainDescription"><?php echo get_option( 'mainDescription' ); ?></textarea>
<?php }

add_action( 'admin_init', 'custom_settings_page_setup' );