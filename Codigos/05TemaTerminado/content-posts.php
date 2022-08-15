<?php

printf('<main class="container  main">');

if (have_posts()) :
  while (have_posts()) :
    the_post();

    $template_html = '
      <section class="container post">
          <div class="main-image" style="background-image:url(%s)">
            <h1 class="title">%s</h1>
          </div>
          <article class="item">
            <div class="the-content">%s</div>
            <div class="info-post">
              <p>
                <i class="far fa-user"></i>
                %s
              </p>
              <p>
                <i class="far fa-calendar-alt"></i>
                %s
              </p>
              <p class="post-categories">%s</p>
              <p>%s</p>
            </div>
          </article>
				</section>
    ';

    printf(
      $template_html,
      main_image_url('full'),
      get_the_title(),
      get_the_content(),
      get_the_author_posts_link(),
      get_the_date(),
      get_the_category_list(',&nbsp;'),
      get_the_tag_list('<i class="fas fa-tags"></i><i>', ',&nbsp;', '</i>'),
    );

  endwhile;
  rewind_posts();
else :
  printf('<p class="error">No hay entradas</p>');

endif;

printf('</main>');
