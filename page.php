<?php get_header(); ?>
<h1><?php the_title();?></h1>
<?php if (have_posts()) : while(have_posts()) : the_post();?>
<?php the_content();?>
<?php endwhile; endif;?>
<!-- <?php get_sidebar("Sidebar-l") ?>
<?php get_sidebar("Sidebar-R") ?> -->
<!-- <nav>
<h3>Main menu</h3>
    <?php wp_nav_menu(
        array(
            'theme_location' => 'main_menu',
            'container' => false,
            'menu_class' => 'kfg-nav'
            )
        );?>
    </nav> -->
<?php get_footer(); ?>