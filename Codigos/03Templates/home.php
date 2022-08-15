<?php
get_header();

printf('
      <h1 class="item  title-template">El archivo <em><b>home.php</b></em> es el archivo que toma por defecto Wordpress para mostrar la pagina de inicio(home) de nuestro sitio</h1>
');


include TEMPLATEPATH . '/content.php';

get_sidebar();
get_footer();
