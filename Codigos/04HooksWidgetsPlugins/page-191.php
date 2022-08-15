<<?php
  get_header();

  printf('
      <h1 class="item  title-template">El archivo <em>page-191.php</em> es el archivo que toma por defecto Wordpress para mostrar la pagina con el id 191 (Sentidos) en la BD.</h1>
');


  include TEMPLATEPATH . '/content.php';

  get_sidebar();
  get_footer();
