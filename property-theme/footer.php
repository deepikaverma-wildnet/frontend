<?php
/**
 * The Footer template file.
 *
 * @package PropertyTheme
 */
?>

<footer class="bg-dark text-white pt-5 pb-3">
    <div class="container">
        <div class="row g-4">
            
            <div class="col-12 col-md-4">
                <h3 class="h5 fw-bold text-white mb-3">
                    <i class="fa-solid fa-house-chimney text-primary me-2"></i><?php bloginfo( 'name' ); ?>
                </h3>
                <p class="small text-secondary">
                    <?php bloginfo( 'description' ); ?>
                </p>
            </div>

            <div class="col-12 col-md-4">
                <h3 class="h5 fw-bold text-white mb-3"><?php esc_html_e( 'Quick Links', 'property-theme' ); ?></h3>
                <ul class="list-unstyled small">
                    <li class="mb-2"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-secondary text-decoration-none"><i class="fa-solid fa-angle-right me-1"></i> <?php esc_html_e( 'Home', 'property-theme' ); ?></a></li>
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none"><i class="fa-solid fa-angle-right me-1"></i> <?php esc_html_e( 'Featured Properties', 'property-theme' ); ?></a></li>
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none"><i class="fa-solid fa-angle-right me-1"></i> <?php esc_html_e( 'Contact Us', 'property-theme' ); ?></a></li>
                </ul>
            </div>

            <div class="col-12 col-md-4">
                <h3 class="h5 fw-bold text-white mb-3"><?php esc_html_e( 'Contact Information', 'property-theme' ); ?></h3>
                <p class="small text-secondary mb-2"><i class="fa-solid fa-location-dot me-2 text-primary"></i> 123 Real Estate Ave, City, ST 12345</p>
                <p class="small text-secondary mb-2"><i class="fa-solid fa-phone me-2 text-primary"></i> (555) 123-4567</p>
                <p class="small text-secondary mb-2"><i class="fa-solid fa-envelope me-2 text-primary"></i> info@example.com</p>
            </div>

        </div>

        <hr class="my-4 border-secondary">

        <div class="row text-center text-md-start small text-secondary">
            <div class="col-md-6">
                &copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'property-theme' ); ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>