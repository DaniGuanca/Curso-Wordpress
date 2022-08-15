<?php
printf('<main class="container  main">');

if (have_posts()) :
  while (have_posts()) :
    the_post();

    $template_html = '
      <a href="%s" class="search-link">
        <figure class="container post">
            <img src="%s" class="item i-b  md-30">
            <figcaption class="item i-b  md-70">
              <h2>%s</h2>
              <p class="the-excerpt">%s</p>
            </figcaption>
          </figure>
      </a>
      <hr>
    ';

    printf(
      $template_html,
      get_the_permalink(),
      main_image_url('medium'),
      get_the_title(),
      get_the_excerpt()
    );

  endwhile;
  rewind_posts();
else :
  printf('<p class="error">No hay entradas</p>');

endif;

printf('</main>');
