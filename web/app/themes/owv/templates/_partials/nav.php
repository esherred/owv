<nav class="navbar navbar-expand-md navbar-dark mb-5">
  <div class="container">
    <a class="navbar-brand" href="/">Our Western Values</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php
      wp_nav_menu([
        'menu'            => 'main',
        'theme_location'  => 'main',
        'container'       => 'div',
        'container_id'    => 'main-nav',
        'container_class' => 'collapse navbar-collapse justify-content-end',
        'menu_id'         => false,
        'menu_class'      => 'navbar-nav',
        'depth'           => 2,
        'fallback_cb'     => 'bs4navwalker::fallback',
        'walker'          => new bs4navwalker()
      ]);
    ?>
  </div>
</nav>