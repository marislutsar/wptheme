<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <?=get_bloginfo('name')?>
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <?php $menuParameters = [
         'theme_location' => 'primary',
         'echo' => false,
         'container' => '',
         'items_wrap' => '%3$s',
         'link_class' => 'navbar-item'
      ];
      echo strip_tags(wp_nav_menu( $menuParameters), '<a>' );
      ?>
   </div>
  </div>
</nav>