<?php 
//registrar nuevos menus
function agregar_menu(){
register_nav_menu('principal', __('principal'));
}



//enganchamos el menu
add_action('init','agregar_menu');
function mostrar_menu(){
wp_nav_menu([
    'menu-principal' => 'Menú Principal'

    
    ]);
}

///funcion para controlar el excerpt    
function excerpt_personalizada($length){
    return 20;
}
add_filter('excerpt_length','excerpt_personalizada');
///añadimos imagenes destacadas a las entradas
add_theme_support( 'post-thumbnails' );
///shortcode
function sufirma (){
    return 'Soy Jose';
}
add_shortcode('mifirma','sufirma');
?>