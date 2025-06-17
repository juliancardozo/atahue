<?php
// Cargar estilos de Astra y del tema hijo
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('astra-parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('astra-child-style', get_stylesheet_directory_uri() . '/style.css', ['astra-parent-style']);
});

// Forzar layout específico para CPT perros
add_filter('astra_get_content_layout', function($layout) {
    if (is_singular('perros') || is_post_type_archive('perros')) {
        return 'content-boxed-container'; // podés usar 'plain-container', 'boxed-container', etc.
    }
    return $layout;
});

// Personalizar loop Astra solo para CPT perros
add_action('astra_content_loop', function() {
    if ('perros' === get_post_type()) {
        remove_action('astra_template_parts_content', [Astra_Loop::get_instance(), 'template_parts_default']);
        remove_action('astra_template_parts_content', [Astra_Loop::get_instance(), 'template_parts_post']);

        if (have_posts()) {
            while (have_posts()) {
                the_post();

                echo '<h1>' . get_the_title() . '</h1>';

                // Mostrar campos ACF
                $raza = get_field('raza');
                
                echo '<div class="acf-perro-info" style="padding:15px;background:#f4f4f4;border:1px solid #ddd;margin-bottom:20px;">';
                if ($raza) echo '<p><strong>Raza:</strong> ' . esc_html($raza) . '</p>';
                echo '</div>';

                the_content();
            }
        }
    }
});
