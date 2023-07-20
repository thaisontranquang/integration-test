<?php

use Carbon_Fields\Field;
use Carbon_Fields\Container;

function title_text_carbon()
{
    \Carbon_Fields\Block::make('Titre et texte')
        ->set_description(__("Un bloc constitué d'un titre et d'un texte."))
        ->set_category('Blocs Kaizen Agency')
        ->add_fields(array(
            Field::make('separator', 'crb_separator', __('Bloc titre et texte')),
            Field::make('text', 'title', 'Titre'),
            Field::make('text', 'text', 'Texte'),
        ))
        ->set_render_callback(function ($fields) {
?>
        <section class="block_title_text">
            <h2><?php echo esc_html($fields['title']); ?></h2>
            <p><?php echo esc_html($fields['text']); ?></p>
        </section>
<?php
        });
}

add_action('carbon_fields_register_fields', 'title_text_carbon');
