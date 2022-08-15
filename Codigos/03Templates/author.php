<?php
get_header();

printf('
      <h1 class="item  title-template">
        El archivo <em><b>author.php</b></em> es el archivo que toma por defecto Wordpress para mostrar la pagina de perfil del autor (usuario actual).
      </h1>
');

$template_author = '
      <ul class="item">
        <li>Autor: <b>%s</b></li>
        <li>Correo: <b>%s</b></li>
        <li>Login: <b>%s</b></li>
        <li>Password: <b>%s</b></li>
        <li>NiceName: <b>%s</b></li>
        <li>URL Autor: <b>%s</b></li>
        <li>URL Pagina Autor: <b>%s</b></li>
        <li>Fecha y Hora de Registro: <b>%s</b></li>
		    <li>Rol: <b>%s</b></li>
	  	  <li>Nombre para mostrar: <b>%s</b></li>
		    <li>Alias: <b>%s</b></li>
		    <li>Nombre: <b>%s</b></li>
		    <li>Apellido: <b>%s</b></li>
		    <li>Descripción: <b>%s</b></li>
		    <li>Número de Publicaciones: <b>%s</b></li>
		    <li>Avatar: %s</li>
      </ul>
      ';

//get_the_author_meta(texto) devuelve los metadatos del autor, la informacion que necesitamos la mandamos en texto,
printf(
  $template_author,
  get_the_author(),
  get_the_author_meta('user_email'),
  get_the_author_meta('user_login'),
  get_the_author_meta('user_pass'),
  get_the_author_meta('user_nicename'),
  get_the_author_meta('user_url'),
  get_the_author_posts_link(),
  get_the_author_meta('user_registered'),
  get_the_author_meta('roles')[0],
  get_the_author_meta('display_name'),
  get_the_author_meta('nickname'),
  get_the_author_meta('first_name'),
  get_the_author_meta('last_name'),
  get_the_author_meta('description'),
  get_the_author_posts(),
  get_avatar(get_the_author_meta('ID'), 50)
);


include TEMPLATEPATH . '/content.php';

get_sidebar();
get_footer();
