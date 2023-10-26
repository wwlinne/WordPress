<?php
function add_normalize_CSS() {
    wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
 }
 add_action('wp_enqueue_scripts', 'add_normalize_CSS');
// Register a new sidebar simply named 'sidebar'
function add_widget_support() {
               register_sidebar( array(
                               'name'          => 'Sidebar',
                               'id'            => 'sidebar',
                               'before_widget' => '<div>',
                               'after_widget'  => '</div>',
                               'before_title'  => '<h2>',
                               'after_title'   => '</h2>',
               ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_widget_support' );
// Register a new navigation menu
function add_Main_Nav() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  // Hook to the init action hook, run our navigation menu function
  add_action( 'init', 'add_Main_Nav' );

function register_footer_widget() {
  register_sidebar( array(
      'name' => 'Footer Widget Area',
      'id' => 'footer-widget',
      'description' => 'Widgets added here will appear in the footer.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
  ) );
}
add_action( 'widgets_init', 'register_footer_widget' );

function register_custom_menus() {
  register_nav_menus(
      array(
          'section-menu' => 'Section Menu', 
      )
  );
}
add_action('init', 'register_custom_menus');

function custom_theme_customize_register($wp_customize) {
  $wp_customize->add_section('front_page_sections', array(
      'title' => 'Front Page Sections',
      'priority' => 30,
  ));

  $wp_customize->add_setting('display_section_one', array(
      'default' => true,
  ));
  $wp_customize->add_control('display_section_one', array(
      'label' => 'Enjoy Sushi!',
      'section' => 'front_page_sections',
      'type' => 'checkbox',
  ));

  $wp_customize->add_setting('display_section_two', array(
      'default' => true,
  ));
  $wp_customize->add_control('display_section_two', array(
      'label' => 'About Tokyo in April',
      'section' => 'front_page_sections',
      'type' => 'checkbox',
  ));
  $wp_customize->add_setting('display_section_three', array(
    'default' => true,
));
$wp_customize->add_control('display_section_three', array(
    'label' => 'Online Order',
    'section' => 'front_page_sections',
    'type' => 'checkbox',
));

$wp_customize->add_setting('display_section_four', array(
    'default' => true,
));
$wp_customize->add_control('display_section_four', array(
    'label' => 'Gallery',
    'section' => 'front_page_sections',
    'type' => 'checkbox',
));

$wp_customize->add_setting('display_section_five', array(
    'default' => true,
));
$wp_customize->add_control('display_section_five', array(
    'label' => 'Contact Us',
    'section' => 'front_page_sections',
    'type' => 'checkbox',
));

}

add_action('customize_register', 'custom_theme_customize_register');

?>
