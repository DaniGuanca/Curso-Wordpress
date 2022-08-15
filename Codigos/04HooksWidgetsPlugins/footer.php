<?php
//El plugin del wp-page-navi
printf('<div class="item i-b w-70 paged">');
wp_pagenavi();
printf('</div>');
?>

</section>
<footer class="container  footer">
  <?php
  $default = array(
    'theme_location' => 'social_nav',
    //voy a meterlo dentro de un nav con las clases item nav i-b w-70
    'container' => 'nav',
    'container_class' => 'item nav'
  );
  //https://developer.wordpress.org/reference/functions/wp_nav_menu/
  wp_nav_menu($default);

  //Esto es de los widgets la explicacion esta en function.php y sidebar.php
  dynamic_sidebar(3);

  ?>
  <!-- Funciones de inclusión obligatorias:
  Si queremos que nuestro tema permita el correcto funcionamiento de plugins de terceros, debemos activar las siguientes funciones de esta manera WordPress permite a los plugins imprimir información en el header o el footer: -->
  <?php wp_footer(); ?>
</footer>
</body>

</html>