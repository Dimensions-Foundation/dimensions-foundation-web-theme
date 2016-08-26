<?php
function derf_customizer_hero_photo($wp_customize) {
  /* Add Section Title */
  $wp_customize->add_section( 'homepage_hero' , array(
    'title'      => __( 'Homepage Hero', 'derf' ),
    'priority'   => 100,
    ) );
    //  =============================
    //  = Image Upload              =
    //  =============================

    $wp_customize->add_setting('derf_theme_options[homepage_hero_photo]', array(
      'default'           => ' ',
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
    )
  );



  $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'homepage_hero_photo', array(
    'label'    => __('Homepage Hero Photo Upload', 'derf'),
    'section'  => 'homepage_hero',
    'settings' => 'derf_theme_options[homepage_hero_photo]',
    )
    )
  );


  //  =============================
  //  = Text Input                =
  //  =============================
  $wp_customize->add_setting('derf_theme_options[homepage_hero_caption]', array(
    'default'        => ' ',
    'capability'     => 'edit_theme_options',
    'type'           => 'option',

  ));

  $wp_customize->add_control('derf_homepage_hero_caption', array(
    'label'      => __('Hero Caption', 'derf'),
    'section'  => 'homepage_hero',
    'settings'   => 'derf_theme_options[homepage_hero_caption]',
  ));


  //  =============================
  //  = Text Input                =
  //  =============================
  $wp_customize->add_setting('derf_theme_options[homepage_hero_url]', array(
    'default'        => '/ ',
    'capability'     => 'edit_theme_options',
    'type'           => 'option',

  ));

  $wp_customize->add_control('derf_homepage_hero_url', array(
    'label'      => __('Hero URL', 'derf'),
    'section'  => 'homepage_hero',
    'settings'   => 'derf_theme_options[homepage_hero_url]',
  ));

}
add_action( 'customize_register', 'derf_customizer_hero_photo' );


function derf_customizer( $wp_customize ) {





  // add setting for page comment toggle checkbox
  $wp_customize->add_setting( 'link_color', array(
    'default' => '#5c1218'
  ) );

  // add control for page comment toggle checkbox
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
    'label' => 'Link Color',
    'section' => 'colors',
    'settings' => 'link_color',
  ) ) );
  ////////////////////

  // add setting for page comment toggle checkbox
  $wp_customize->add_setting( 'header_color', array(
    'default' => '#5c1218'
  ) );

  // add control for page comment toggle checkbox
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_color', array(
    'label' => 'Header Color',
    'section' => 'colors',
    'settings' => 'header_color',
  ) ) );





}
add_action( 'customize_register', 'derf_customizer' );

function derf_customizer_head_styles() {
  $link_color = get_theme_mod( 'link_color' );

  if ( $link_color != '#5c1218' ) :
    ?>
    <style type="text/css">
    a {
      color: <?php echo $link_color; ?>;
    }
    </style>
    <?php
  endif;

  $header_color = get_theme_mod( 'header_color' );

  if ( $header_color != '#5c1218' ) :
    ?>
    <style type="text/css">
    #header-top {
      background: <?php echo $header_color; ?>;
    }
    </style>
    <?php
  endif;


}
add_action( 'wp_head', 'derf_customizer_head_styles' );



/*
$wp_customize->add_control(
new WP_Customize_Image_Control(
$wp_customize,
'logo',
array(
'label'      => __( 'Upload a logo', 'theme_name' ),
'section'    => 'your_section_id',
'settings'   => 'your_setting_id',
'context'    => 'your_setting_context'
)
)
);
*/
