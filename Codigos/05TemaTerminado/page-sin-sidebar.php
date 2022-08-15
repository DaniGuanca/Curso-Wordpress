<?php

/* 
Template name: Plantilla de pagina estatica sin sidebar 
*/

get_header();

printf('
      <h1 class="item  title-template">El archivo <em>page-sin-sidebar.php</em> es un archivo de template para paginas estaticas en WordPress se activan en el administrador si en el mismo archivo al inicio de este un comentario php que diga <br> <code>/*Template name: nombre de la plantilla*/</code></h1>
');


include TEMPLATEPATH . '/content.php';

get_footer();
