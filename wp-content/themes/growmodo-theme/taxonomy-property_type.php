<?php get_header(); ?>
<main class="container">
    <h1>Tipo de Propriedade: <?php single_term_title(); ?></h1>
    <div class="property-grid">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="property-item">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php the_excerpt(); ?>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>
<?php get_footer(); ?>
