<?php

use Carbon_Fields\Field;
use Carbon_Fields\Container;

//THEME OPTIONS

function crb_attach_theme_options()
{
    Container::make('theme_options', __('Theme Options'))
        ->add_fields(array(
            Field::make('image', 'logo', 'Logo'),
        ));
}
add_action('carbon_fields_register_fields', 'crb_attach_theme_options');


//BLOCKS

include_once('blocks/form.php');
