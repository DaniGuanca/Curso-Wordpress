<?php
get_header();

printf('
      <p class="item search-message">
        Los resultados para la busqueda <mark>%s</mark> son:
      </p>
', get_search_query());

include TEMPLATEPATH . '/content-search.php';

get_footer();
