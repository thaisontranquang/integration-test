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
                )),
        ))
        ->set_render_callback(function ($fields) {
            $slides = ($fields['crb_slides']);

?>
        <section class="block_slider">
            <div class="owl-carousel">
                <?php
                foreach ($slides as $slide) {
                ?>
                    <div class="owl-item">
                        <?php echo wp_get_attachment_image($slide['image']); ?>
                        <h3><?php echo $slide['title']; ?></h3>
                        <p><?php echo $slide['subtitle']; ?></p>
                    </div>
                <?php
                }
                ?>
            </div>

        </section>
<?php

        });
}

add_action('carbon_fields_register_fields', 'slider_carbon');
