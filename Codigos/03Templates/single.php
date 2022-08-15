<?php
get_header();

printf('
      <h1 class="item  title-template">El archivo <em>single.php</em> es el archivo que toma por defecto Wordpress para mostrar una entrada (post)</h1>
');


include TEMPLATEPATH . '/content.php';

get_sidebar();
//Usando la funcion comments_template() llamo al comments.php
comments_template();

get_footer();
