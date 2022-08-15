<?php
printf('
<!DOCTYPE html>
<html lang="' . get_bloginfo("language") . '">

<head>
  <meta charset="' . get_bloginfo("charset") . '">
  <meta http-equiv=" X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="' . get_bloginfo("description") . '">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="' . get_bloginfo("stylesheet_url") . '">
  <link rel="stylesheet" href="' . get_bloginfo("template_url") . '/css/all.css">
  <title>' . get_bloginfo("name") . '</title>
');

wp_head();

if (is_admin_bar_showing()) {
  printf('
    <style>
      .mobile-nav { top: 3.25rem; }
      .header { top: 3rem; }
      
      @media screen and (min-width: 768px) {
        .fixed-top {
          padding-top: 8rem;
        }
      }
    </style>
  ');
}

printf('
</head>
<body>
  <header id="header" class="header">
    <div class="container">
    <h1 class="item  logo  i-b  ph-100  lg-20" style="background-image:url(' . get_bloginfo('template_url') . '/img/perro.png)">
      ' . get_bloginfo('name') . '
    </h1>
    <div id="mobile-nav" class="mobile-nav">
      <i class="fas  fa-bars"></i>
    </div>
');

$args = array(
  'theme_location' => 'main_nav',
  'container' => 'nav',
  'container_class' => 'item  nav  i-b  ph-100  lg-60  main-nav',
  'container_id' => 'main-nav'
);

wp_nav_menu($args);

printf('
<aside id="search" class="item  i-b  ph-100  lg-20  search">' . get_search_form(false) . '</aside>
</div>
</header>
<section class="container  fixed-top">
');
