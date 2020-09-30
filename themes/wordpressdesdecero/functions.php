<?php 
//registrar nuevos menus
function agregar_menus(){
register_nav_menus([
    'principal'=>__('principal'),
    'footer'=>__('footer')

]);
}



//enganchamos el menu
add_action('init','agregar_menus');
function mostrar_menu_principal(){
wp_nav_menu([
    'theme_location'    => 'principal',
        'container'       => 'div',
        'container_id'    => 'principal',
        'container_class' => 'collapse navbar-collapse justify-content-end',
        'menu_class'      => 'navbar-nav mr-auto',
        'depth'           => 2,
        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
        'walker'          => new wp_bootstrap_navwalker()
    
    
    ]);
}
function mostrar_menu_footer(){
wp_nav_menu([
    'theme_location'    => 'footer',
        'container'       => 'div',
        'container_id'    => 'footer',
        'container_class' => 'nav',
        'menu_class'      => 'navbar',
        'depth'           => 2,
        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
        'walker'          => new wp_bootstrap_navwalker()
    
    ]);
}
// Registramos un nueva (o nuevas) zona de widgets simple denominada 'sidebar'
function agregar_widgets() {
                register_sidebar( [
                                'name'          => 'widget-footer-1',
                                'id'            => 'wf1',
                                'before_widget' => '<div>',
                                'after_widget'  => '</div>',
                                'before_title'  => '<h2>',
                                'after_title'   => '</h2>'
                                ] );
                                 register_sidebar( [
                                'name'          => 'widget-footer-2',
                                'id'            => 'wf2',
                                'before_widget' => '<div>',
                                'after_widget'  => '</div>',
                                'before_title'  => '<h2>',
                                'after_title'   => '</h2>'
                                ] );
                                 register_sidebar( [
                                'name'          => 'widget-footer-3',
                                'id'            => 'wf3',
                                'before_widget' => '<div>',
                                'after_widget'  => '</div>',
                                'before_title'  => '<h2>',
                                'after_title'   => '</h2>'
                                ] );
                                 register_sidebar( [
                                'name'          => 'lateral derecho',
                                'id'            => 'ld',
                                'before_widget' => '<div>',
                                'after_widget'  => '</div>',
                                'before_title'  => '<h2>',
                                'after_title'   => '</h2>'
                                ] );
}

// Hook o gancho del widget para que se inicie
add_action( 'widgets_init', 'agregar_widgets' );





///funcion para controlar el excerpt    
function excerpt_personalizada($length){
    return 20;
}
add_filter('excerpt_length','excerpt_personalizada');
///añadimos imagenes destacadas a las entradas
add_theme_support( 'post-thumbnails' );
//añadimos soporte para custom_header
function imagen_custom_header() {
    $args = array(
        'default-image'  	=> get_template_directory_uri() . '/img/default.jpg',
        'default-text-color' => '000',
        'width'          	=> 1500,
        'height'         	=> 250,
        'flex-width'     	=> true,
        'flex-height'    	=> true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'imagen_custom_header' );
//añadimos soporte al logotipo
function logo_custom() {
 $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
'unlink-homepage-logo' => true, 
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'logo_custom' );

///shortcode
function sufirma (){
    return 'Soy Jose';
}
add_shortcode('mifirma','sufirma');

require_once (get_template_directory() . '/inc/wp_bootstrap_navwalker.php');







// registramos
wp_register_style('bootstrap',get_theme_file_uri() . '/inc/bootstrap.min.css');
wp_register_style('dw_style',get_stylesheet_uri(),array('bootstrap'));
//encolamos

function encolar_estilos(){wp_enqueue_style('dw_style', get_stylesheet_uri());
}
//gancho
add_action('wp_enqueue_scripts','encolar_estilos');


wp_register_script ('jquery',get_theme_file_uri().'/inc/jquery.min.js','','3.5.1',true);
wp_register_script ('bootstrapjs',get_theme_file_uri().'/inc/bootstrap.min.js',['jquery'],'4.0.0',true);
wp_register_script ('dw_script',get_theme_file_uri().'/script.js',['bootstrapjs','jquery'],'',true);

function encolar_script(){

wp_enqueue_script('dw_script');
}
add_action('wp_enqueue_scripts','encolar_script');



?>

