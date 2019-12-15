<?php wp_footer(); ?>

<footer>
<?php wp_nav_menu(
        array(
            'theme_location' => 'footer_menu',
            'container' => false,
            'menu_class' => 'kfg-nav'
            )
        );?>
</footer>

</body>

</html>