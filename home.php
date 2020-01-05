<nav>
    <div class="nav-opener">
        <p>Menü</p>
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
<div class="posts-home">
    <?php if (have_posts()) : while(have_posts()) : the_post();?>
    <div class="post">
        <h2 class="post__title"><?php the_title();?></h2>
        <div class="post__excerpt"><?php the_excerpt();?></div>
        <h6 class="post__permalink"><a href=<?php the_permalink();?>>Cikk megtekintése</a></h6>
    </div>
    <?php endwhile; endif;?>
</div>
<?php get_footer(); ?>