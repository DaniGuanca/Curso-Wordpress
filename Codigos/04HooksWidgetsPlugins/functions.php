<?php
//El archivo functions.php  es como una biblioteca personal de funciones, es una manera fácil de agregar o modificar el comportamiento por defecto de WordPress. Se comporta exactamente igual que un plugin, añadiendo características y funcionalidad a un tema, y se puede utilizar tanto para definir nuevas funciones PHP como para modificar las que ya incorpora WordPress.

/*
https://developer.wordpress.org/reference/
Hooks - https://codex.wordpress.org/Plugin_API
Listado de acciones - http://codex.wordpress.org/Plugin_API/Action_Reference
Listado de filtros - http://codex.wordpress.org/Plugin_API/Filter_Reference
https://codex.wordpress.org/Function_Reference/add_action
http://codex.wordpress.org/Plugin_API/Action_Reference/after_setup_theme
https://codex.wordpress.org/Function_Reference/add_theme_support
https://codex.wordpress.org/Function_Reference/the_post_thumbnail
https://developer.wordpress.org/reference/functions/get_the_post_thumbnail/
https://codex.wordpress.org/Function_Reference/add_filter
http://codex.wordpress.org/Plugin_API/Filter_Reference/excerpt_more
https://codex.wordpress.org/Function_Reference/register_nav_menus
https://codex.wordpress.org/Widgets_API
https://developer.wordpress.org/reference/functions/wp_widgets_init/
http://codex.wordpress.org/Function_Reference/register_sidebar
http://codex.wordpress.org/Function_Reference/register_sidebars
*/


//AGREGO IMAGEN MINIATURA

function custom_theme_setup()
{
  //add_theme_support es para el soporte de configuraciones de temas
  //llamo al soporte para fotos miniatura que permite mostrar imagenes destacadas
  add_theme_support('post-thumbnails');

  //Aca meto lo del menu que hice mas abajo, la explicacion esta ahi
  $locations = array(
    'main_nav' => 'Navegacion Principal',
    'social_nav' => 'Navegacion Social Media'
  );

  register_nav_menus($locations);
}


//add_action(hook, accion) es para agregar una accion cuando ocurra un determinado hook
//El hook 'after_setup_theme' se invoca cuando la pagina esta cargando luego de inicializar el tema
add_action('after_setup_theme', 'custom_theme_setup');


//CAMBIO EL [...] DEL ABSTRACTO POR leer mas...
function read_more()
{
  $url_post = get_permalink();

  return "&nbsp;<a href='$url_post'><small>leer mas...</small></a>";
}

//Filtros sirven para modificar datos internos de un hook
//el hook 'excerpt_more' es el [...] que se muestra en el abstracto
add_filter('excerpt_more', 'read_more');



//MENU
/* Para hacer menus personalizados hay que usar la funcion register_nav_menus(arreglo de menus) eso va a hacer que aparezca la opcion de menus en el administrador */

//hago el arreglo del menu
/* $locations = array(
  'menu_principal' => 'Menu Principal',
  'menu_social' => 'Menu Social Media'
);

register_nav_menus($locations); */

//LO DEL MENU PODRIA DEJARLO AHI PERO SIEMPRE ES RECOMENDABLE METERLO DENTRO DE UNA ACTION, DE UN EVENTO, ASI QUE LO METO EN EL custom_theme_setup que se ejecuta durante la action after_setup_theme


/* WIDGETS
WordPress Widgets add content and features to your Sidebars. Examples are the default widgets that come with WordPress; for Categories, Tag cloud, Search, etc. Plugins will often add their own widgets.*/


function widgets_activation()
{
  $args = array(
    'name' => __('widget %d'),
    'before_widget' => '<div class="item  widgets">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  );


  register_sidebars(3, $args);


  //Otro widget con una clase css aparte
  register_sidebar(array(
    'name' => 'widget personalizado',
    'before_widget' => '<article class="item  widgets  other-widget">',
    'after_widget' => '</article>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));
}


/*Para crear uno se hace un hook a la accion widgets_init */
add_action('widgets_init', 'widgets_activation');
