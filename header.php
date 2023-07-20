<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/owl_carousel/owl.carousel.min.css">

</head>

<body>

    <header class="container">
        <img src="<?php echo carbon_get_theme_option('logo'); ?>" alt="logo">
    </header>