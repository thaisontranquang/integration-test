<?php

use Carbon_Fields\Field;
use Carbon_Fields\Container;

function form_carbon()
{
    \Carbon_Fields\Block::make('Formulaire de contact')
        ->set_description(__("Un bloc constitué d'une image, d'un titre et d'un formulaire de contact."))
        ->set_category('Blocs Kaizen Agency')
        ->add_fields(array(
            Field::make('separator', 'crb_separator', __('Bloc formulaire de contact')),
            Field::make('image', 'image', __('Image')),
            Field::make('text', 'title', 'Titre'),
        ))
        ->set_render_callback(function ($fields) {
?>
        <section class="block_form">
            <div>
                <div class="contact-image">
                    <?php echo wp_get_attachment_image($fields['image'], 'full'); ?>
                    <div class="title">
                        <h1><?php echo esc_html($fields['title']); ?></h1>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <?= do_shortcode('[contact-form-7 id="13" title="Formulaire de contact 1"]'); ?>
            </div>
        </section>
<?php
        });
}

add_action('carbon_fields_register_fields', 'form_carbon');
