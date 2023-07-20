<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


//THEME OPTIONS 

function theme_options()
{
    \Carbon_Fields\Container::make('theme_options', __('Theme Options'))
        ->add_fields(array(
            Field::make('image', 'logo', 'Ajouter un logo')
                ->set_value_type('url'),
            Field::make('textarea', 'contact', 'Informations de contact'),
            Field::make('textarea', 'location', 'Nous situer'),
            Field::make('complex', 'networks', 'Réseaux sociaux')
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('image', 'icon', 'Icon du réseau social'),
                    Field::make('text', 'url', 'Lien de votre compte'),
                )),
            Field::make('complex', 'footer_menu', 'Footer Menu')
                ->add_fields(array(
                    \Carbon_Fields\Field::make('text', 'menu_item_title', 'Titre lien menu'),
                    \Carbon_Fields\Field::make('text', 'menu_item_url', 'Lien menu'),
                ))
        ));
}
add_action('carbon_fields_register_fields', 'theme_options');


add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once('vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

//BLOCKS

require_once 'components/form.php';
require_once 'components/title_text.php';
require_once 'components/cta_shop.php';
require_once 'components/slider.php';
require_once 'components/introduction.php';
require_once 'components/cta.php';
