<<?php
  get_header();

  printf('
      <h1 class="item  title-template">El archivo <em>category-7.php</em> es el archivo que toma por defecto Wordpress para mostrar la categoria con el id 7 (Gigantes) en la BD.</h1>
');


  include TEMPLATEPATH . '/content.php';

  get_sidebar();
  get_footer();
