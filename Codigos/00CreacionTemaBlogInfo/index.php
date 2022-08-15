<!DOCTYPE html>
<html lang="<?php bloginfo("language"); ?>">

<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta http-equiv=" X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo("description"); ?>">
  <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
  <title><?php bloginfo("name"); ?></title>
</head>

<body>
  <h1>Hola Wordpress</h1>
  <h2><code>bloginfo()</code></h2>
  <p>Nombre: <mark><?php bloginfo("name"); ?></mark></p>
  <p>Descripcion: <mark><?php bloginfo("description"); ?></mark></p>
  <p>URL HOME: <mark><?php bloginfo("home"); ?></mark></p>
  <p>URL HOJA DE ESTILO: <mark><?php bloginfo("stylesheet_url"); ?></mark></p>
  <p>URL DEL TEMA: <mark><?php bloginfo("template_url"); ?></mark></p>
  <p>Idioma: <mark><?php bloginfo("language"); ?></mark></p>
  <p>Juego de caracteres: <mark><?php bloginfo("charset"); ?></mark></p>
  <img src="<?php bloginfo("template_url"); ?>/screenshot.png" alt="Screenshot del tema">
</body>

</html>