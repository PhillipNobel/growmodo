<?php get_header(); ?>

<main id="main-content" class="site-main">
    <section class="hero-section">
        <div class="container">
            <div class="hero-flex">
                <div class="hero-content">
                    <h1 class="hero-title">Discover Your Dream Property with Estatein</h1>
                    <p class="hero-description">Your journey to finding the perfect property begins here. Explore our listings to find the home that matches your dreams.</p>
                    
                    <div class="hero-actions">
                        <a href="#" class="btn-primary" aria-label="Learn more about our services">Learn More</a>
                        <a href="#" class="btn-secondary" aria-label="Browse all properties">Browse Properties</a>
                    </div>

                    <div class="hero-stats-grid">
                        <div class="stat-card" role="article" aria-label="Happy Customers Statistics">
                            <h2 class="stat-number">200+</h2>
                            <p class="stat-label">Happy Customers</p>
                        </div>
                        <div class="stat-card" role="article" aria-label="Properties For Clients Statistics">
                            <h2 class="stat-number">10k+</h2>
                            <p class="stat-label">Properties For Clients</p>
                        </div>
                        <div class="stat-card" role="article" aria-label="Years of Experience Statistics">
                            <h2 class="stat-number">16+</h2>
                            <p class="stat-label">Years of Experience</p>
                        </div>
                    </div>
                </div>
                <div class="hero-media">
                    <?php 
                    $hero_image = get_field('hero_section_image');
                    if( is_array($hero_image) ): ?>
                        <img src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>" class="hero-img">
                    <?php elseif( is_numeric($hero_image) ): ?>
                        <?php echo wp_get_attachment_image( $hero_image, 'full', false, array('class' => 'hero-img') ); ?>
                    <?php else: ?>
                        <img src="<?php echo esc_url($hero_image); ?>" alt="Hero image" class="hero-img">
                    <?php endif; ?>
                </div>
        </div>
    </section>

    <section class="growmodo-features">
        <div class="features-grid">
            <div class="feature-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/growmodo-feature-card-arrow-link.svg" alt="Arrow" class="feature-arrow">
                    <div class="feature-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/growmodo-feature-icon-1.svg" alt="Feature 1">
                    </div>
                    <h2 class="feature-title">Find Your Dream Home</h2>
                </div>
                <div class="feature-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/growmodo-feature-card-arrow-link.svg" alt="Arrow" class="feature-arrow">
                    <div class="feature-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/growmodo-feature-icon-2.svg" alt="Feature 2">
                    </div>
                    <h2 class="feature-title">Unlock Property Value</h2>
                </div>
                <div class="feature-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/growmodo-feature-card-arrow-link.svg" alt="Arrow" class="feature-arrow">
                    <div class="feature-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/growmodo-feature-icon-3.svg" alt="Feature 3">
                    </div>
                    <h2 class="feature-title">Effortless Management</h2>
                </div>
                <div class="feature-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/growmodo-feature-card-arrow-link.svg" alt="Arrow" class="feature-arrow">
                    <div class="feature-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/growmodo-feature-icon-4.svg" alt="Feature 4">
                    </div>
                    <h2 class="feature-title">Smart Investments</h2>
                </div>
        </div>
    </section>

    <section class="featured-properties">
        <div class="container">
            <div class="section-header">
                <div class="header-left">
                    <h2 class="section-title">Featured Properties</h2>
                    <p class="section-description">Explore our handpicked selection of premium properties. From luxury villas to modern lofts, find the perfect place to call home.</p>
                </div>
                <div class="header-right">
                    <a href="#" class="btn-black" aria-label="View all testimonials">View All Properties</a>
                </div>
            </div>
            
            <div class="properties-container swiper properties-slider">
                <div class="swiper-wrapper">
                    <?php
                    $args = array(
                        'post_type'      => 'property',
                        'posts_per_page' => 3,
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                    );
                    $query = new WP_Query( $args );

                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) : $query->the_post(); ?>
                            <div class="swiper-slide">
                                <article class="property-card">
                                    <div class="property-thumb">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <?php the_post_thumbnail( 'large' ); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="property-info">
                                        <h3 class="property-title"><?php the_title(); ?></h3>
                                        <div class="property-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 17 ); ?></div>
                                        
                                        <div class="property-meta-grid">
                                            <?php $essential = get_field('essential_info'); ?>
                                            <div class="meta-item">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/property-card-meta-bedroom-icon.svg" alt="Bedrooms">
                                                <span><?php echo (isset($essential['bedrooms'])) ? esc_html($essential['bedrooms']) : '0'; ?>-Bedrooms</span>
                                            </div>
                                            <div class="meta-item">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/property-card-meta-bathroom-icon.svg" alt="Bathrooms">
                                                <span><?php echo (isset($essential['bathrooms'])) ? esc_html($essential['bathrooms']) : '0'; ?>-Bathrooms</span>
                                            </div>
                                            <div class="meta-item">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/property-card-meta-type-icon.svg" alt="Type">
                                                <span><?php 
                                                    $terms = get_the_terms( get_the_ID(), 'property-type' );
                                                    if ( $terms && ! is_wp_error( $terms ) ) :
                                                        echo esc_html( $terms[0]->name );
                                                    else:
                                                        echo 'Property';
                                                    endif;
                                                ?></span>
                                            </div>
                                        </div>
                                        
                                        <div class="property-footer">
                                            <div class="property-price">
                                                $<?php echo (isset($essential['sale_price'])) ? esc_html($essential['sale_price']) : '0'; ?>
                                            </div>
                                            <a href="<?php the_permalink(); ?>" class="btn-primary" aria-label="View details of <?php the_title_attribute(); ?>">View Property Details</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    else : ?>
                        <p><?php _e( 'No properties found.', 'growmodo-theme' ); ?></p>
                    <?php endif; ?>
                </div>
                <!-- Navigation Arrows -->
                <div class="slider-controls">
                    <div class="swiper-button-prev prop-prev" aria-label="Previous slide">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 15H10M10 15L15 10M10 15L15 20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="swiper-button-next prop-next" aria-label="Next slide">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 15H20M20 15L15 10M20 15L15 20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-section">
        <div class="container">
            <div class="section-header">
                <div class="header-left">
                    <h2 class="section-title">What Our Clients Say</h2>
                    <p class="section-description">Read the success stories and experiences of those who found their perfect homes with Growmodo. Your satisfaction is our priority.</p>
                </div>
                <div class="header-right">
                    <a href="#" class="btn-black" aria-label="View all testimonials">View All Testimonials</a>
                </div>
            </div>

            <div class="swiper testimonials-slider">
                <div class="swiper-wrapper">
                    <?php
                    $args = array(
                        'post_type'      => 'testimonial',
                        'posts_per_page' => 6,
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                    );
                    $testimonials_query = new WP_Query( $args );

                    if ( $testimonials_query->have_posts() ) :
                        while ( $testimonials_query->have_posts() ) : $testimonials_query->the_post(); 
                            $rating = get_field('rating');
                            $customer_name = get_field('customer_name');
                            $customer_location = get_field('customer_location');
                            ?>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-rating">
                                        <?php 
                                        $stars = intval($rating);
                                        for($i=1; $i<=5; $i++) {
                                            $icon = ($i <= $stars) ? 'testimonial-star-rating.svg' : 'testimonial-star-rating.svg'; // Se não houver versão vazia, usamos a mesma ou opacidade
                                            ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo $icon; ?>" alt="Star" class="star-icon <?php echo ($i > $stars) ? 'star-empty' : ''; ?>">
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="testimonial-content">
                                        <h3 class="testimonial-title"><?php the_title(); ?></h3>
                                        <div class="testimonial-text"><?php the_content(); ?></div>
                                    </div>
                                    <div class="testimonial-client">
                                        <div class="client-photo">
                                            <?php if ( has_post_thumbnail() ) : ?>
                                                <?php the_post_thumbnail( array(60, 60) ); ?>
                                            <?php else: ?>
                                                <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($customer_name); ?>&background=703BF7&color=fff" alt="<?php echo esc_attr($customer_name); ?>">
                                            <?php endif; ?>
                                        </div>
                                        <div class="client-info">
                                            <h4 class="client-name"><?php echo esc_html($customer_name); ?></h4>
                                            <p class="client-location"><?php echo esc_html($customer_location); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    else : ?>
                        <p><?php _e( 'No testimonials found.', 'growmodo-theme' ); ?></p>
                    <?php endif; ?>
                </div>
                <!-- Navigation Arrows -->
                <div class="slider-controls">
                    <div class="swiper-button-prev" aria-label="Previous slide">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 15H10M10 15L15 10M10 15L15 20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="swiper-button-next" aria-label="Next slide">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 15H20M20 15L15 10M20 15L15 20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faqs-cards-section">
        <div class="container">
            <div class="section-header">
                <div class="header-left">
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    <p class="section-description">Find answers to common questions about our services and the property buying process.</p>
                </div>
                <div class="header-right">
                    <a href="#" class="btn-black" aria-label="View all FAQs">View All FAQs</a>
                </div>
            </div>

            <div class="swiper faqs-slider">
                <div class="swiper-wrapper">
                    <?php
                    $args = array(
                        'post_type'      => 'faq',
                        'posts_per_page' => 6,
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                    );
                    $faq_query = new WP_Query( $args );

                    if ( $faq_query->have_posts() ) :
                        while ( $faq_query->have_posts() ) : $faq_query->the_post(); ?>
                            <div class="swiper-slide">
                                <div class="faq-card">
                                    <h3 class="faq-card-title"><?php the_title(); ?></h3>
                                    <div class="faq-card-content">
                                        <?php echo wp_trim_words( get_the_content(), 25 ); ?>
                                    </div>
                                    <div class="faq-card-footer">
                                        <a href="#" class="btn-black btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>
                <!-- Navigation Arrows -->
                <div class="slider-controls">
                    <div class="swiper-button-prev faq-prev" aria-label="Previous slide">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 15H10M10 15L15 10M10 15L15 20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="swiper-button-next faq-next" aria-label="Next slide">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 15H20M20 15L15 10M20 15L15 20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="homepage-cta">
        <div class="container">
            <div class="cta-banner">
                <div class="section-header">
                    <div class="header-left">
                        <h2 class="section-title">Start Your Real Estate Journey Today</h2>
                        <p class="section-description">Your dream property is just a click away. Whether you're looking to buy, sell, or invest, Growmodo is here to guide you every step of the way.</p>
                    </div>
                    <div class="header-right">
                        <a href="#" class="btn-primary" aria-label="Explore properties now">Explore Properties</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="container">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
