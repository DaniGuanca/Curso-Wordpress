<?php
get_header();

printf('
      <article class="item  error">
            <h2>ERROR 404</h2>
            <p>Lo que buscas no se encuentra</p>
            <img src="%s/img/loading-dog.gif">
      </article>
', get_bloginfo('template_url'));
get_footer();
