<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function crb_attach_theme_options()
{
    \Carbon_Fields\Container::make('theme_options', __('Theme Options'))
        ->add_fields(array(
            Field::make('image', 'logo', 'Ajouter un logo')
                ->set_value_type('url')
        ));
}
add_action('carbon_fields_register_fields', 'crb_attach_theme_options');


add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once('vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

//BLOCKS

require_once 'components/form.php';
