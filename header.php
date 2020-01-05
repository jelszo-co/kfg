<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest">
<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/safari-pinned-tab.svg" color="#c43532">
<meta name="msapplication-TileColor" content="#c43532">
<meta name="theme-color" content="#ffffff">
</head>

<body <?php body_class();?>>

<header>
    <img id="header-img" async=on src="<?php echo get_template_directory_uri(); ?>/header.png">
    <p>Nyíregyházi Kölcsey Ferenc Gimnázium</p>
</header>

<div class="header-placeholder"></div>