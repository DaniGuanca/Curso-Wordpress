<?php
printf('<main class="container  main">');

if (have_posts()) :
  while (have_posts()) :
    the_post();

    $template_html = '
      <a href="%s">
        <figure class="item  i-b  ph-100  sm-50  md-33  lg-25  main-items">
            <img src="%s">
            <figcaption><h2>%s</h2></figcaption>
          </figure>
      </a>
    ';

    printf(
      $template_html,
      get_permalink(),
      main_image_url('thumbnail'),
      get_the_title()
    );

  endwhile;
  rewind_posts();
else :
  printf('<p class="error">No hay entradas</p>');

endif;

printf('</main>');
