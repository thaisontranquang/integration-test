<?php

use Carbon_Fields\Field;
use Carbon_Fields\Container;

function introduction()
{
    \Carbon_Fields\Block::make('Présentation')
        ->set_description(__("Un bloc constitué de trois blocs avec image et texte."))
        ->set_category('Blocs Kaizen Agency')
        ->add_fields(array(
            Field::make('separator', 'crb_separator', __('Bloc présentation')),
            Field::make('text', 'title', 'Titre'),
            Field::make('image', 'image1', __('Image bloc 1'))
                ->set_value_type('url'),
            Field::make('text', 'subtitle1', 'Sous-titre bloc 1'),
            Field::make('text', 'text1', 'Texte bloc 1'),
            Field::make('image', 'image2', __('Image bloc 2'))
                ->set_value_type('url'),
            Field::make('text', 'subtitle2', 'Sous-titre bloc 2'),
            Field::make('text', 'text2', 'Texte bloc 2'),
            Field::make('image', 'image3', __('Image bloc 3'))
                ->set_value_type('url'),
            Field::make('text', 'subtitle3', 'Sous-titre bloc 3'),
            Field::make('text', 'text3', 'Texte bloc 3'),
        ))
        ->set_render_callback(function ($fields) {
?>
        <section class="block_introduction">
            <div>
                <h2><?php echo $fields['title'] ?></h2>
                <div class="grid">
                    <div>
                        <img src="<?php echo $fields['image1'] ?>">
                        <p><?php echo $fields['subtitle1'] ?></p>
                        <p><?php echo $fields['text1'] ?></p>
                    </div>
                    <div>
                        <img src="<?php echo $fields['image2'] ?>">
                        <p><?php echo $fields['subtitle2'] ?></p>
                        <p><?php echo $fields['text2'] ?></p>
                    </div>
                    <div>
                        <img src="<?php echo $fields['image3'] ?>">
                        <p><?php echo $fields['subtitle3'] ?></p>
                        <p><?php echo $fields['text3'] ?></p>
                    </div>
                </div>
            </div>
        </section>
<?php

        });
}

add_action('carbon_fields_register_fields', 'introduction');
