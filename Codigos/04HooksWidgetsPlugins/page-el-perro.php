<?php
get_header();

printf('
      <h1 class="item  title-template">El archivo <em>page-el-perro.php</em> es el archivo que toma por defecto Wordpress para mostrar la pagina con el slug: el-perro.</h1>
');


include TEMPLATEPATH . '/content.php';

get_sidebar();
get_footer();
