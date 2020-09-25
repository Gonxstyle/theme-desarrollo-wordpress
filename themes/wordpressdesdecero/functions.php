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


?>