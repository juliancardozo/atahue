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

    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();

            // Mostrar título
            the_title('<h1>', '</h1>');
			echo 'RAZA???';
            // Mostrar campos personalizados usando ACF
            $raza = get_field('raza');

            echo '<div class="perros-meta" style="margin-bottom:20px;">';
            if ($raza) {
                echo '<p><strong>Raza:</strong> ' . esc_html($raza) . '</p>';
            }
           
            echo '</div>';

            // Mostrar contenido principal
            the_content();
        }
    }
    ?>

    <?php astra_primary_content_bottom(); ?>
</div>

<?php
if ( astra_page_layout() === 'right-sidebar' ) {
    get_sidebar();
}

get_footer();
