<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
    <?php endwhile;
    else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    <?php wp_footer(); ?>
</body>
</html>
