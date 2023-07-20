<?php

use Carbon_Fields\Field;
use Carbon_Fields\Container;

function cta_shop()
{
    \Carbon_Fields\Block::make('Appel au clic boutique')
        ->set_description(__("Un bloc constitué d'une image et d'un titre pour inciter à se rendre sur une page."))
        ->set_category('Blocs Kaizen Agency')
        ->add_fields(array(
            Field::make('separator', 'crb_separator', __('Bloc appel au clic boutique')),
            Field::make('image', 'image', __('Image'))
                ->set_value_type('url'),
            Field::make('text', 'title', 'Titre'),
            Field::make('text', 'url', 'URL du bouton'),
            Field::make('text', 'button', 'Texte du bouton'),
        ))
        ->set_render_callback(function ($fields) {
            $image_url = esc_url($fields['image']);
            $title = esc_html($fields['title']);
            $url = esc_url($fields['url']);
            $button_text = esc_html($fields['button']);
?>
        <section class="block_cta_shop container">
            <div style="background-image:url('<?php echo $image_url; ?>')">
                <h2><?php echo $title; ?></h2>

                <?php
                if (!empty($url) && !empty($button_text)) {
                ?>
                    <a href="<?php echo $url; ?>" class="btn btn-primary">
                        <?php echo $button_text; ?>
                        <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y="6" width="14" height="1" fill="white" />
                            <path d="M8.5 1L14 6.5L8.5 11.5" stroke="white" />
                        </svg>
                    </a>
                <?php
                } ?>

            </div>
        </section>
<?php

        });
}

add_action('carbon_fields_register_fields', 'cta_shop');
