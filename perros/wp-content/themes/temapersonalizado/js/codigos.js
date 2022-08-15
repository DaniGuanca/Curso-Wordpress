$(document).ready(function() {
    var $btn = $('#mobile-nav'),
      $nav = $('#main-nav'),
      $search = $('#search'),
      $icon = $('#mobile-nav').find('.fas')

    var $iconCategories = $('.post-categories').find('a:first-child')

    $iconCategories.before('<i class="far fa-folder"></i>&nbsp;')

    $btn.click(function() {
      $nav.slideToggle()
      $search.slideToggle()

      if ($icon.hasClass('fa-bars')) {
        $icon
          .removeClass('fa-bars')
          .addClass('fa-times')
      } else {
        $icon
          .removeClass('fa-times')
          .addClass('fa-bars')
      }
    })

  })