<?php
get_header();

include TEMPLATEPATH . '/content-posts.php';

if (is_single()) {
  comments_template();
}

get_footer();
