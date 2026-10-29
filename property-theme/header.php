<?php
/**
 * The Header template file.
 * @package PropertyTheme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <i class="fa-solid fa-house-chimney text-primary me-2"></i><?php bloginfo( 'name' ); ?>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'property-theme' ); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <?php
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'navbar-nav ms-auto mb-2 mb-lg-0',
                        'fallback_cb'    => false,
                    ) );
                } else {
                    ?>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'property-theme' ); ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><?php esc_html_e( 'Properties', 'property-theme' ); ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><?php esc_html_e( 'Contact', 'property-theme' ); ?></a></li>
                    </ul>
                    <?php
                }
                ?>
            </div>
        </div>
    </nav>
</header>