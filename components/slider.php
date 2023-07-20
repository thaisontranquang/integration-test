<?php

use Carbon_Fields\Field;
use Carbon_Fields\Container;

function slider_carbon()
{
    \Carbon_Fields\Block::make('Slider')
        ->set_description(__("Un bloc constitué d'une image et d'un titre pour inciter à se rendre sur une page."))
        ->set_category('Blocs Kaizen Agency')
        ->add_fields(array(
            Field::make('separator', 'crb_separator', __('Bloc slider')),
            Field::make('complex', 'crb_slides', 'Slides')
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('image', 'image', 'Image'),
                    Field::make('text', 'title', 'Title'),
                    Field::make('text', 'subtitle', 'Sous-titre'),
                    Field::make('url', 'url', 'Lien de la page du produit'),
                )),
        ))
        ->set_render_callback(function ($fields) {
            $slides = ($fields['crb_slides']);
?>
        <section class="block_slider splide" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                    foreach ($slides as $slide) {
                        $image_url = wp_get_attachment_url($slide['image']);
                        $link_url = isset($slide['url']) ? esc_url($slide['url']) : '#';
                    ?>
                        <li class="splide__slide">
                            <a href="<?php echo $link_url; ?>">
                                <?php
                                if (!empty($image_url)) {
                                ?>
                                    <img src="<?php echo esc_url($image_url); ?>">
                                <?php
                                } else { ?>
                                    <div class="alt_text">
                                        <p>Consulter le produit</p>
                                        <svg width="50" height="39" viewBox="0 0 50 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="18.9048" width="47.3333" height="3.38095" fill="#1D1D1B" />
                                            <path d="M28.7381 2L47.3333 20.5952L28.7381 37.5" stroke="#1D1D1B" stroke-width="3.38095" />
                                        </svg>
                                    </div>
                                <?php
                                }
                                ?>
                                <h3><?php echo $slide['title']; ?></h3>
                                <p><?php echo $slide['subtitle']; ?></p>
                            </a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </section>
<?php

        });
}

add_action('carbon_fields_register_fields', 'slider_carbon');
