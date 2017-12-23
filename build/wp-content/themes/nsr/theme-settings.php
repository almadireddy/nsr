<?php
/* Add the media uploader script */
function media_script_enqueue() {
wp_enqueue_media();
wp_enqueue_script( 'media_script',get_template_directory_uri() . '/js/media_script.js');
}

add_action('admin_enqueue_scripts', 'media_script_enqueue');