<?php
/**
 * Main Template - Static 3-Column Featured Properties Grid.
 *
 * @package PropertyTheme
 */

get_header();
?>

<main id="main-content" class="py-5 bg-light">
    <div class="container">
        
        <!-- FEATURED PROPERTIES SECTION -->
        <header class="text-center mb-5">
            <h1 class="fw-bold display-5"><?php esc_html_e( 'Featured Properties', 'property-theme' ); ?></h1>
            <p class="text-muted lead"><?php esc_html_e( 'Explore our handpicked selection of top-rated real estate listings.', 'property-theme' ); ?></p>
        </header> 

        <!-- 3-Column Grid -->
        <div class="row g-4 mb-5">

            <div class="col-12 col-md-6 col-lg-4">
                <article class="card h-100 border-0 shadow-sm property-card">
                    <a href="#">
                        <img 
                            src="<?php echo esc_url( get_template_directory_uri() . '/images/property2.png' ); ?>" 
                            class="card-img-top img-fluid" 
                            alt="<?php esc_attr_e( '17 Carter villas Brockenhurst', 'property-theme' ); ?>"
                        />
                    </a>
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title h5 mb-2">
                            <a href="#" class="text-decoration-none text-dark">
                                <?php esc_html_e( '17 Carter villas Brockenhurst', 'property-theme' ); ?>
                            </a>
                        </h2>
                        <p class="text-muted small mb-3">
                            <i class="fa-solid fa-location-dot me-1 text-danger"></i><?php esc_html_e( '742 Evergreen Terrace, Springfield', 'property-theme' ); ?>
                        </p>
                        <p class="card-text text-secondary small mb-3">
                            <?php esc_html_e( 'Beautiful two-story home with a spacious backyard, modern kitchen appliances, and updated interiors throughout.', 'property-theme' ); ?>
                        </p>
                        <div class="property-meta mt-auto pt-3 border-top d-flex justify-content-between align-items-center text-muted small">
                            <span><i class="fa-solid fa-bed me-1"></i> <?php esc_html_e( '4 Beds', 'property-theme' ); ?></span>
                            <span><i class="fa-solid fa-bath me-1"></i> <?php esc_html_e( '3 Baths', 'property-theme' ); ?></span>
                            <span><i class="fa-solid fa-ruler-combined me-1"></i> <?php esc_html_e( '2,400 sqft', 'property-theme' ); ?></span>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center pb-3">
                        <span class="h5 text-primary mb-0 fw-bold"><?php esc_html_e( '$550,000', 'property-theme' ); ?></span>
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <?php esc_html_e( 'View Details', 'property-theme' ); ?> <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </article>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <article class="card h-100 border-0 shadow-sm property-card">
                    <a href="#">
                        <img 
                            src="<?php echo esc_url( get_template_directory_uri() . '/images/property2.png' ); ?>" 
                            class="card-img-top img-fluid" 
                            alt="<?php esc_attr_e( '17 Carter villas Brockenhurst', 'property-theme' ); ?>"
                        />
                    </a>
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title h5 mb-2">
                            <a href="#" class="text-decoration-none text-dark">
                                <?php esc_html_e( '17 Carter villas Brockenhurst', 'property-theme' ); ?>
                            </a>
                        </h2>
                        <p class="text-muted small mb-3">
                            <i class="fa-solid fa-location-dot me-1 text-danger"></i><?php esc_html_e( '742 Evergreen Terrace, Springfield', 'property-theme' ); ?>
                        </p>
                        <p class="card-text text-secondary small mb-3">
                            <?php esc_html_e( 'Beautiful two-story home with a spacious backyard, modern kitchen appliances, and updated interiors throughout.', 'property-theme' ); ?>
                        </p>
                        <div class="property-meta mt-auto pt-3 border-top d-flex justify-content-between align-items-center text-muted small">
                            <span><i class="fa-solid fa-bed me-1"></i> <?php esc_html_e( '4 Beds', 'property-theme' ); ?></span>
                            <span><i class="fa-solid fa-bath me-1"></i> <?php esc_html_e( '3 Baths', 'property-theme' ); ?></span>
                            <span><i class="fa-solid fa-ruler-combined me-1"></i> <?php esc_html_e( '2,400 sqft', 'property-theme' ); ?></span>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center pb-3">
                        <span class="h5 text-primary mb-0 fw-bold"><?php esc_html_e( '$550,000', 'property-theme' ); ?></span>
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <?php esc_html_e( 'View Details', 'property-theme' ); ?> <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </article>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <article class="card h-100 border-0 shadow-sm property-card">
                    <a href="#">
                        <img 
                            src="<?php echo esc_url( get_template_directory_uri() . '/images/property2.png' ); ?>" 
                            class="card-img-top img-fluid" 
                            alt="<?php esc_attr_e( '17 Carter villas Brockenhurst', 'property-theme' ); ?>"
                        />
                    </a>
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title h5 mb-2">
                            <a href="#" class="text-decoration-none text-dark">
                                <?php esc_html_e( '17 Carter villas Brockenhurst', 'property-theme' ); ?>
                            </a>
                        </h2>
                        <p class="text-muted small mb-3">
                            <i class="fa-solid fa-location-dot me-1 text-danger"></i><?php esc_html_e( '742 Evergreen Terrace, Springfield', 'property-theme' ); ?>
                        </p>
                        <p class="card-text text-secondary small mb-3">
                            <?php esc_html_e( 'Beautiful two-story home with a spacious backyard, modern kitchen appliances, and updated interiors throughout.', 'property-theme' ); ?>
                        </p>
                        <div class="property-meta mt-auto pt-3 border-top d-flex justify-content-between align-items-center text-muted small">
                            <span><i class="fa-solid fa-bed me-1"></i> <?php esc_html_e( '4 Beds', 'property-theme' ); ?></span>
                            <span><i class="fa-solid fa-bath me-1"></i> <?php esc_html_e( '3 Baths', 'property-theme' ); ?></span>
                            <span><i class="fa-solid fa-ruler-combined me-1"></i> <?php esc_html_e( '2,400 sqft', 'property-theme' ); ?></span>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center pb-3">
                        <span class="h5 text-primary mb-0 fw-bold"><?php esc_html_e( '$550,000', 'property-theme' ); ?></span>
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <?php esc_html_e( 'View Details', 'property-theme' ); ?> <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </article>
            </div>

        </div>

    </div>

    <!-- 3-COLUMN REVIEWS SLIDER SECTION -->
    <section id="reviews-section" class="py-5" style="background-color: #d99a0a;">
            <div class="container">
                
                <header class="text-center mb-5 text-white">
                    <h2 class="fw-bold display-6 text-white"><?php esc_html_e( 'Client Reviews', 'property-theme' ); ?></h2>
                    <p class="lead opacity-90"><?php esc_html_e( 'See what our satisfied homeowners and buyers have to say about working with us.', 'property-theme' ); ?></p>
                </header>

                <!-- Bootstrap 5 Carousel Container -->
                <div id="reviewsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

                    <!-- Carousel Slides -->
                    <div class="carousel-inner pb-2">

                        <!-- SLIDE 1 (Reviews 1 to 3) -->
                        <div class="carousel-item active">
                            <div class="row g-4">

                                <!-- Review 1 -->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card h-100 border-0 shadow-sm p-4 text-center">
                                        <div class="mb-3 text-warning">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <p class="card-text text-secondary mb-4">
                                            <?php esc_html_e( '"The team helped us find our dream home in less than two weeks! Their attention to detail and market expertise made the process seamless."', 'property-theme' ); ?>
                                        </p>
                                        <div class="mt-auto">
                                            <h5 class="fw-bold mb-1 text-dark"><?php esc_html_e( 'Sarah Jenkins', 'property-theme' ); ?></h5>
                                            <span class="small text-muted"><?php esc_html_e( 'Home Buyer', 'property-theme' ); ?></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Review 2 -->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card h-100 border-0 shadow-sm p-4 text-center">
                                        <div class="mb-3 text-warning">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <p class="card-text text-secondary mb-4">
                                            <?php esc_html_e( '"Selling our property above asking price was something we didn\'t think was possible in this market. Professional from start to finish!"', 'property-theme' ); ?>
                                        </p>
                                        <div class="mt-auto">
                                            <h5 class="fw-bold mb-1 text-dark"><?php esc_html_e( 'Michael Miller', 'property-theme' ); ?></h5>
                                            <span class="small text-muted"><?php esc_html_e( 'Property Seller', 'property-theme' ); ?></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Review 3 -->
                                <div class="col-12 col-md-6 col-lg-4 d-none d-lg-block">
                                    <div class="card h-100 border-0 shadow-sm p-4 text-center">
                                        <div class="mb-3 text-warning">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <p class="card-text text-secondary mb-4">
                                            <?php esc_html_e( '"Outstanding service and incredible guidance throughout the home negotiation phase. Highly recommend to anyone looking to buy."', 'property-theme' ); ?>
                                        </p>
                                        <div class="mt-auto">
                                            <h5 class="fw-bold mb-1 text-dark"><?php esc_html_e( 'David Thompson', 'property-theme' ); ?></h5>
                                            <span class="small text-muted"><?php esc_html_e( 'First-time Buyer', 'property-theme' ); ?></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- SLIDE 2 (Reviews 4 to 6) -->
                        <div class="carousel-item">
                            <div class="row g-4">

                                <!-- Review 4 -->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card h-100 border-0 shadow-sm p-4 text-center">
                                        <div class="mb-3 text-warning">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <p class="card-text text-secondary mb-4">
                                            <?php esc_html_e( '"Fantastic real estate experience. They answered all our questions promptly and made escrow clear and easy to navigate."', 'property-theme' ); ?>
                                        </p>
                                        <div class="mt-auto">
                                            <h5 class="fw-bold mb-1 text-dark"><?php esc_html_e( 'Emily Roberts', 'property-theme' ); ?></h5>
                                            <span class="small text-muted"><?php esc_html_e( 'Property Investor', 'property-theme' ); ?></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Review 5 -->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card h-100 border-0 shadow-sm p-4 text-center">
                                        <div class="mb-3 text-warning">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <p class="card-text text-secondary mb-4">
                                            <?php esc_html_e( '"We couldn\'t be happier with our luxury apartment. The communication and dedication from the agent were top-notch!"', 'property-theme' ); ?>
                                        </p>
                                        <div class="mt-auto">
                                            <h5 class="fw-bold mb-1 text-dark"><?php esc_html_e( 'James Wilson', 'property-theme' ); ?></h5>
                                            <span class="small text-muted"><?php esc_html_e( 'Condo Buyer', 'property-theme' ); ?></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Review 6 -->
                                <div class="col-12 col-md-6 col-lg-4 d-none d-lg-block">
                                    <div class="card h-100 border-0 shadow-sm p-4 text-center">
                                        <div class="mb-3 text-warning">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <p class="card-text text-secondary mb-4">
                                            <?php esc_html_e( '"Relocating from out of state was stressful, but this agency managed everything smoothly for our family. Exceptional service!"', 'property-theme' ); ?>
                                        </p>
                                        <div class="mt-auto">
                                            <h5 class="fw-bold mb-1 text-dark"><?php esc_html_e( 'Lisa Martinez', 'property-theme' ); ?></h5>
                                            <span class="small text-muted"><?php esc_html_e( 'Homeowner', 'property-theme' ); ?></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- Slider Controls & Indicators -->
                    <div class="d-flex justify-content-center align-items-center gap-3 mt-4">
                        <button class="btn btn-outline-light rounded-circle p-2 d-flex align-items-center justify-content-center" type="button" data-bs-target="#reviewsCarousel" data-bs-slide="prev" style="width: 42px; height: 42px;" aria-label="<?php esc_attr_e( 'Previous reviews slide', 'property-theme' ); ?>">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                        <div class="carousel-indicators position-static m-0">
                            <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="0" class="active bg-white" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="1" class="bg-white" aria-label="Slide 2"></button>
                        </div>
                        <button class="btn btn-outline-light rounded-circle p-2 d-flex align-items-center justify-content-center" type="button" data-bs-target="#reviewsCarousel" data-bs-slide="next" style="width: 42px; height: 42px;" aria-label="<?php esc_attr_e( 'Next reviews slide', 'property-theme' ); ?>">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div>

                </div>

            </div>
    </section>

    
</main>
        
<?php
get_footer();
?>