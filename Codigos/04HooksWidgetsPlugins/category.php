<?php
get_header();

printf('
      <h1 class="item  title-template">El archivo <em>category.php</em> es el archivo que toma por defecto Wordpress para mostrar busquedas de categorias</h1>
');


include TEMPLATEPATH . '/content.php';

get_sidebar();
get_footer();
