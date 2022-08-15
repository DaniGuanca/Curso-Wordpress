<?php
get_header();

$search_template = '
      <h1 class="item  title-template">
        El archivo <em>search.php</em> es el archivo que toma por defecto Wordpress para mostrar busquedas del formulario search (<code>?s=mi+busqueda</code>).
      </h1>
      <p class="item">
        Los resultados para la busqueda <mark>%s</mark> son:
      </p>
';

//get_search_query() devuelve lo que se busca por el formulario, osea la variable s

printf($search_template, get_search_query());


include TEMPLATEPATH . '/content.php';

get_sidebar();
get_footer();
