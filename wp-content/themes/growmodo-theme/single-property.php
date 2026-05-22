<?php get_header(); ?>
<main class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article>
            <h1><?php the_title(); ?></h1>
            <div class="property-content">
                <?php the_content(); ?>
            </div>
            <?php 
            $essential = get_field('essential_info');
            $price = (isset($essential['sale_price'])) ? $essential['sale_price'] : get_field('price');
            $location = get_field('location');
            $bedrooms = get_field('bedrooms');

            if( $price || $location || $bedrooms ): ?>
                <div class="property-details">
                    <?php if( $price ): ?>
                        <p><strong>Preço:</strong> $<?php echo esc_html($price); ?></p>
                    <?php endif; ?>
                    <?php if( $location ): ?>
                        <p><strong>Localização:</strong> <?php echo esc_html($location); ?></p>
                    <?php endif; ?>
                    <?php if( $bedrooms ): ?>
                        <p><strong>Quartos:</strong> <?php echo esc_html($bedrooms); ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </article>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
