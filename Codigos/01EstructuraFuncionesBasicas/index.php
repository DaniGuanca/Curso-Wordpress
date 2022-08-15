<?php
//get_header() ya es una funcion de wordpress que llama al archivo header.php
get_header();

//Tambien puedo llamar otros header, pero tienen que tener la siguiente estructura header_NOMBRE.php, entonces al usar get header lo hago asi: get_header("NOMBRE.php") osea entre parentesis lo que esta despues del guion bajo
//get_header("secundario");

//TEMPLATEPATH tiene la ruta del template, no uso el bloginfo porque no te deja usar dentro del include, entonces se usa TEMPLATEPATH
include TEMPLATEPATH . '/content.php';
//Otra opcion es esta:
//get_template_part('content');

//Y asi hay funciones para footer y sidebar
//Solo admite header, sidebar y footer
get_sidebar();
get_footer();
