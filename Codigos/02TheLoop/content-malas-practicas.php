<main class="item   i-b  w-70  main">
  <?php
  //PARA BUSQUEDAS PERSONALIZADAS USAMOS query_posts(''), lo que escriba en query post se va a reflejar en lo que traiga el loop
  //El paso de variables es con &
  //query_posts('order=ASC&category_name=gigantes&posts_per_page=3');
  //DOCUMENTACION DE QUERY POSTS
  //https://codex.wordpress.org/Function_Reference/query_posts
  //https://core.trac.wordpress.org/browser/trunk/src/wp-includes/query.php#L89



  //Logica del loop, el loop trae las ultimas entradas
  //SI (hay entradas)
  //  mientras(hay entrada)
  //    muestra la info de las entradas
  //Si no
  //  no hay entradas publicadas

  //En wordpress se puede hacer el if con : en vez de llaves
  //The loop tiene varios metodos, el mas importante es have_posts() que dice si hay o no posts
  if (have_posts()) :
    //Mientras hayan entradas
    while (have_posts()) :
      //Para ver la entrada tengo que usar la funcion the_post() que es para inicializar y entrar a la informacion de un post 
      the_post();

      //Puedo acceder a la informacion del post mediante funciones, como the_title(), the_category(), the_content() y otras mas que estan en la documentacion
  ?>
      <article class="post">
        <h1>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h1>
        <p>
          <!-- the_date() solo muestra la fecha de la ultima publicacion si todas tienen las misma fehca, asi que uso the_time() que si muestra de cada una pero solo pasa la hora asi que entre parentesis le mando lo que quiero ver ('d-M-Y')-->
          <?php the_time('d-M-Y'); ?>
        </p>
        <p>
          <!-- El abstracto -->
          <?php the_excerpt(); ?>
        </p>
        <p>
          <?php the_category(); ?>
        </p>
        <p>
          <?php the_tags(); ?>
        </p>
        <p>
          <?php the_author(); ?>
        </p>
        <!-- La publicacion completa -->
        <div class="the-content">
          <?php the_content(); ?>
        </div>
      </article>
      <hr>
  <?php
    endwhile;
    //Siempre limpiar el cache con rewind_posts()
    rewind_posts();
  else :
    echo '<p class="error">No hay entradas</p>';
  endif;
  ?>
</main>