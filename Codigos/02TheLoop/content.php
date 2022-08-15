<?php
//Las explicaciones de como funciona el loop estan en content-malas-practicas.php
//En este content voy a hacer lo mismo que en el anterior pero con buenas practicas sin combinar codigo php y html
//Como ya hacia en el curso de POO con PHP, osea creando variables html con el cuerpo y donde van las variables usando los comodines %s que al usar la funcion printf puedo mandar los valores a reemplazar por esos comodines
//GUARDA que los comodines varian segun la variable, hay uno para texto uno para numero etc
//En la documentacion esta todo: 
//http://php.net/manual/es/function.printf.php
//http://php.net/manual/es/function.sprintf.php

printf('<main class="item i-b w-70 main">');

if (have_posts()) :
  while (have_posts()) :
    the_post();

    $template_html = '
      <article class="post">
					<h1>%s</h1>
					<a href="%s">%s</a>
					<p>%s - %s</p>
					<p>%s</p>
					<p class="post-categories">%s</p>
					<p>%s</p>
					<p>%s</p>
					<div class="the-content">%s</div>
				</article>
				<hr>
    ';

    //los metodos the_title() the_time() etc. ignoran el template por eso hay que ver la documentacion y ver que opciones dan las funciones por eso las funciones difieren del otro content con malas practicas, las funciones con get adelante como get_the_title() devuelve en modo texto
    printf(
      $template_html,
      get_the_title(),
      get_the_permalink(),
      get_the_permalink(),
      get_the_date(),
      get_the_time(),
      get_the_excerpt(),
      //get_the_category() y tags va a dar error porque devuelve un array asi que tengo que usar la funcion que devuelve en forma de lista separadas por espacio - espacio
      get_the_category_list(' - '),
      get_the_tag_list('<i>', ', ', '</i>'),
      get_the_author(),
      get_the_content()
    );

  endwhile;
  //Siempre limpiar el cache con rewind_posts()
  rewind_posts();
else :
  printf('<p class="error">No hay entradas</p>');

endif;

printf('</main>');
