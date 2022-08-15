<?php
get_header();

printf('
      <h1 class="item  title-template">El archivo <em><b>archive.php</b></em> es el archivo que toma por defecto Wordpress para mostrar busquedas de categorias, etiquetas o autores</h1>
');


include TEMPLATEPATH . '/content.php';

get_sidebar();
get_footer();
