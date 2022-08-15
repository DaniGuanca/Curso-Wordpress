<!DOCTYPE html>
<html lang="<?php bloginfo("language"); ?>">

<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta http-equiv=" X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo("description"); ?>">
  <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
  <title><?php bloginfo("name"); ?></title>
  <!-- Funciones de inclusión obligatorias:
  Si queremos que nuestro tema permita el correcto funcionamiento de plugins de terceros, debemos activar las siguientes funciones de esta manera WordPress permite a los plugins imprimir información en el header o el footer: -->
  <?php wp_head(); ?>
</head>

<body>
  <header id="header" class="container  header">
    <h1 class="item  logo i-b w-30">Logo</h1>
    <nav class="item nav i-b w-70">Menu</nav>
  </header>
  <section class="container">
    <!-- El cierre lo llevo al footer -->