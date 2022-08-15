<<?php
  get_header();

  printf('
      <h1 class="item  title-template">El archivo <em>tag-12.php</em> es el archivo que toma por defecto Wordpress para mostrar la etiqueta con el id 12 (Lanudos) en la BD.</h1>
');


  include TEMPLATEPATH . '/content.php';

  get_sidebar();
  get_footer();
