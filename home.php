<nav>
    <div class="nav-opener">
        <p>Menu</p>
    </div>
    <?php wp_nav_menu(
        array(
            'theme_location' => 'main_menu',
            'container' => false,
            'menu_class' => 'kfg-nav'
        )
    );?>
</nav>
<?php get_header(); ?>
<?php get_sidebar("Sidebar-l") ?>
<?php get_sidebar("Sidebar-R") ?>
<?php if (have_posts()) : while(have_posts()) : the_post();?>
<?php the_title();?>
<?php the_content();?>
<?php endwhile; endif;?>
<?php get_footer(); ?>