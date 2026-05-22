<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ( is_front_page() ) : ?>
<meta name="description" content="Discover your dream property, explore premium listings, and start your real estate journey with Growmodo." />
<?php endif; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="masthead" class="site-header" role="banner">
    <!-- Container Topo (Boas-vindas) -->
    <div class="header-top">
        <div class="container">
            <div class="welcome-text">
                <?php _e( '✨ Bem-vindo ao Growmodo!', 'growmodo-theme' ); ?>
            </div>
        </div>
    </div>

    <!-- Container Baixo (Logo, Menu, Botão) -->
    <div class="header-main">
        <div class="container">
            <div class="header-flex">
                <div class="site-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Growmodo Home">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                </div>

                <nav id="site-navigation" class="main-navigation" aria-label="Main Navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                        <span class="hamburger-line"></span>
                        <span class="hamburger-line"></span>
                        <span class="hamburger-line"></span>
                    </button>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                    ) );
                    ?>
                </nav>

                <div class="header-action">
                    <a href="#" class="btn-primary" aria-label="Contact Growmodo Team"><?php _e( 'Contact Us', 'growmodo-theme' ); ?></a>
                </div>
            </div>
        </div>
    </div>
</header>
