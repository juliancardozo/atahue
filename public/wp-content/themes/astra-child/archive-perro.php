<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

if ( astra_page_layout() === 'left-sidebar' ) {
    get_sidebar();
}
?>

<div id="primary" <?php astra_primary_class(); ?>>
    <?php astra_primary_content_top(); ?>

    <h1>Listado de Perros</h1>

    <?php
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'perros',
        'posts_per_page' => 10,
        'paged' => $paged,
    );
    $query = new WP_Query($args);

    if ( $query->have_posts() ) {
        echo '<ul>';
        while ( $query->have_posts() ) {
            $query->the_post();
            echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        }
        echo '</ul>';
        the_posts_pagination();
    } else {
        echo '<p>No hay perros registrados.</p>';
    }
    wp_reset_postdata();
    ?>

    <?php astra_primary_content_bottom(); ?>
</div>

<?php
if ( astra_page_layout() === 'right-sidebar' ) {
    get_sidebar();
}

get_footer();
