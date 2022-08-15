<?php
get_header();

printf('
      <h1 class="item  title-template">El archivo <em>category-pequenos.php</em> es el archivo que toma por defecto Wordpress para mostrar la categoria con el slug: pequenos.</h1>
');


include TEMPLATEPATH . '/content.php';

get_sidebar();
get_footer();
