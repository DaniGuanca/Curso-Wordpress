<?php
//get_header() ya es una funcion de wordpress que llama al archivo header.php
get_header();

//TEMPLATEPATH tiene la ruta del template, no uso el bloginfo porque no te deja usar dentro del include, entonces se usa TEMPLATEPATH
include TEMPLATEPATH . '/content.php';
//Otra opcion es esta:
//get_template_part('content');

//Y asi hay funciones para footer y sidebar
//Solo admite header, sidebar y footer
get_sidebar();
get_footer();
