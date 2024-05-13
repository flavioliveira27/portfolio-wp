<!DOCTYPE html>
   <html <?php language_attributes(); ?> >
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/assets/img/favicon.ico" type="image/x-icon">
      <title><?php bloginfo(''); ?><?php echo ' - '; ?><?php bloginfo('description'); ?></title>
      <?php wp_head(); ?>
   </head>

    <body <?php body_class(); ?> >
      <header class="header" id="header">
         <nav class="nav container">
            <a href="#" class="nav__logo">
               Flávio <span>Oliveira</span>
            </a>

            <div class="nav__menu" id="nav-menu">
            <?php

               if ( has_nav_menu( 'menu-main' ) ) {

                  $argss = array(
                     'theme_location'  => 'menu-main',
                     'container'       => '',
                     'menu_class'      => 'nav__list'
                  );

                  wp_nav_menu($argss);

               }

               ?>
               
               <div class="nav__close" id="nav-close">
                  <i class="ri-close-line"></i>
               </div>
            </div>

            <!-- Botão Menu (responsivo)-->
            <div class="nav__toggle" id="nav-toggle">
               <i class="ri-menu-line"></i>
            </div>
         </nav>
      </header>