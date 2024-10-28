<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ritesh</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body>

<header class=" border-bottom">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <?php bloginfo('name'); ?>
                <?php endif; ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary_menu',
                    'container'      => false,
                    'menu_class'     => 'navbar-nav ms-auto',
                    'fallback_cb'    => '__return_false',
                    'depth'          => 2,
                    // 'walker'         => new Bootstrap_5_WP_Navwalker(), // Custom Bootstrap 5 Navwalker
                ));
                ?>
            </div>
        </nav>
  




