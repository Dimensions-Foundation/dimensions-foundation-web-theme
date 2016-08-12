<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/* -----------------------------------------------------------------------------
*  Add Theme Options Page
* ------------------------------------------------------------------------------
*/

function derf_add_theme_page() {
  add_theme_page (
  __( 'Theme Options', 'wpsettings'),
  __( 'Theme Options', 'wpsettings'),
  'edit_theme_options',
  'derf-settings',
  'derf_theme_options_page'
);
}

add_action('admin_menu', 'derf_add_theme_page');

function derf_theme_options_page() { ?>
  <div class="wrap">
    <h2>Theme Options - <?php echo get_current_theme(); ?></h2>
    <form method="post" action="options.php">
      <?php
      settings_fields( 'derf-settings-group');
      do_settings_sections( 'derf-settings');
      submit_button();
      ?>
    </form>
  </div>


  <?php }

  /* -----------------------------------------------------------------------------
  *  Register Theme Option Settings
  * ------------------------------------------------------------------------------
  */
  function derf_theme_init() {
    register_setting (
    'derf-settings-group',
    'derf-footer-settings'
  );

  register_setting (
  'derf-settings-group',
  'derf-blog-settings'
);


// Footer Alert Section

add_settings_section (
'derf-footer-settings-section',
'Footer Settings',
'derf_footer_section_callback',
'derf-settings'
);

add_settings_field (
'derf-footer-background-color',
'Footer BackgroundColor',
'derf_footer_bg_color_callback',
'derf-settings',
'derf-footer-settings-section'
);

add_settings_field (
'derf-footer-alert-checkbox',
'Show Footer Alert',
'derf_footer_alert_checkbox_callback',
'derf-settings',
'derf-footer-settings-section'
);
add_settings_field (
'derf-footer-alert-textbox',
'Footer Alert Text',
'derf_footer_alert_textbox_callback',
'derf-settings',
'derf-footer-settings-section'
);
add_settings_field (
'derf-footer-alert-select',
'Footer Alert Background Color',
'derf_footer_alert_background_color_callback',
'derf-settings',
'derf-footer-settings-section'
);

add_settings_field (
'derf-footer-copyright-textarea',
'Footer Copyright Text',
'derf_footer_copyright_textarea_callback',
'derf-settings',
'derf-footer-settings-section'
);

// New Section
add_settings_section (
'derf-blog-settings-section',
'Blog Settings',
'derf_blog_settings_callback',
'derf-settings'
);

add_settings_field (
'derf-blog-name-textarea',
'Blog Name',
'derf_blog_name_textarea_callback',
'derf-settings',
'derf-blog-settings-section'
);

}

add_action('admin_init', 'derf_theme_init');

function derf_footer_section_callback() {
  // Nothing Needed
}

function derf_footer_alert_checkbox_callback() {

  $options = get_option( 'derf-footer-settings' );
  if( !isset( $options['show_alert'] ) ) $options['show_alert'] = '';

  $html = '<input type="checkbox" id="derf-footer_alert_show" name="derf-footer-settings[show_alert]" value="1" ' . checked(1, $options['show_alert'],false)  . ' />';
  $html .= '<label for="derf-footer-alert">Show Footer Alert</label>';
  echo $html;
}


function derf_footer_alert_textbox_callback() {

  $options = get_option( 'derf-footer-settings' );
  if( !isset( $options['alert_text'] ) ) $options['alert_text'] = '';

  $html= "<textarea id='derf-footer-alert-text' name='derf-footer-settings[alert_text]' style='width:100%' > " . $options['alert_text']. " </textarea>";

  echo $html;


}

function derf_footer_alert_background_color_callback() {

  $options = get_option( 'derf-footer-settings' );
  if( !isset( $options['alert_bg_color'] ) ) $options['alert_bg_color'] = '';

  ?>

  <select name="derf-footer-settings[alert_bg_color] ">
    <option value="background-green-medium" <?php selected( $options['alert_bg_color'], 'background-green-medium' ); ?>>Green</option>
    <option value="background-red-light" <?php selected( $options['alert_bg_color'], 'background-red-light' ); ?>>Red</option>
  </select>
  <?php
}

function derf_footer_bg_color_callback() {

  $options = get_option( 'derf-footer-settings' );
  if( !isset( $options['bg_color'] ) ) $options['bg_color'] = 'background-green-medium';

  ?>

  <select name="derf-footer-settings[bg_color] ">
    <option value="background-green-medium" <?php selected( $options['bg_color'] , 'background-green-medium' ); ?>>Green</option>
    <option value="background-blue" <?php selected( $options['bg_color'], 'background-blue' ); ?>>Blue</option>
    <option value="background-brown" <?php selected( $options['bg_color'], 'background-brown' ); ?>>Brown</option>
  </select>
  <?php
}


function derf_footer_copyright_textarea_callback() {
  $options = get_option( 'derf-footer-settings' );
  if( !isset( $options['copyright_text'] ) ) $options['copyright_text'] = '';

  $html= "<textarea id='derf-footer-copyright-textarea' name='derf-footer-settings[copyright_text]' style='width:100%' > " . $options['copyright_text']. " </textarea>";

  echo $html;
}

function derf_blog_settings_callback() {
  // Nothing Needed
}

function derf_blog_name_textarea_callback() {
  $options = get_option( 'derf-blog-settings' );
  if( !isset( $options['blog_name_text'] ) ) $options['blog_name_text'] = '';

  $html= "<textarea id='derf-blog-name-textarea' name='derf-blog-settings[blog_name_text]' style='width:100%' > " . $options['blog_name_text']. " </textarea>";

  echo $html;
}
