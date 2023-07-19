<?php

use Carbon_Fields\Field;
use Carbon_Fields\Container;

// Enregistrement des options du thème avec Carbon Fields
add_action('carbon_fields_register_fields', 'logo');

function logo()
{
    Container::make('theme_options', __('Theme Options'))
        ->add_fields(array(
            Field::make('image', 'logo', 'Logo')
        ));
}
