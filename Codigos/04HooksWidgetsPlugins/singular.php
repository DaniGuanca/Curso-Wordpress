<?php
get_header();

printf('
      <h1 class="item  title-template">El archivo <em>singular.php</em> es el archivo que toma por defecto Wordpress para mostrar una entrada (post) o una pagina estatica. Disponible a partir de Wordpress 4.3</h1>
');


include TEMPLATEPATH . '/content.php';

get_sidebar();
get_footer();
