<?php

use Carbon_Fields\Field;
use Carbon_Fields\Container;

function cta()
{
    \Carbon_Fields\Block::make('Appel à l\'action')
        ->set_description(__("Un bloc constitué d'un titre et d'un bouton d'appel à l'action."))
        ->set_category('Blocs Kaizen Agency')
        ->add_fields(array(
            Field::make('separator', 'crb_separator', __('Bloc appel à l\'action')),
            Field::make('text', 'title', 'Titre'),
            Field::make('text', 'text', 'Contenu du bouton'),
            Field::make('text', 'url', 'Lien du bouton'),
        ))
        ->set_render_callback(function ($fields) {
?>
        <section class="block_cta">
            <h2><?php echo esc_html($fields['title']); ?></h2>
            <a href="<?php echo esc_html($fields['url']); ?>">
                <?php echo esc_html($fields['text']); ?>
            </a>
        </section>
<?php
        });
}

add_action('carbon_fields_register_fields', 'cta');
