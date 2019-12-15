<!DOCTYPE html>
<html lang="en">

<head>

    <?php wp_head(); ?>

</head>

<body <?php body_class();?>>

<header>

    <nav>
    <?php wp_nav_menu(
        array(
            'theme_location' => 'top_menu',
            'container' => false,
            'menu_class' => 'kfg-nav'
            )
        );?>
    </nav>

</header>