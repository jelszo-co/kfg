<?php wp_footer(); ?>

<footer>
<div class="footer-item footer-left">
<?php wp_nav_menu(
    array(
        'theme_location' => 'footer_menu',
        'container' => false,
        'menu_class' => 'kfg-nav-footer'
        )
    );?>
</div>
<div class="footer-item footer-right">
    <div class="sitename">
        <p><span>Nyíregyházi Kölcsey Ferenc Gimnázium</span><br />https://kolcseynyh.hu</p>
    </div>
    <div class="footer-center-wrapper">
        <div class="footer-center-item" id="social">
            <p><i class="fab fa-facebook"></i><a href="https://www.facebook.com/kolcsey.nyh/" target="_blank">Facebook</a></p>
            <p> <i class="fab fa-instagram"></i><a href="#" target="_blank">Instagram</a></p>
            <p> <i class="far fa-envelope"></i><a href="mailto:kolcsey.nyiregyhaza@gmail.com" target="_blank">E-mail</a></p>
        </div>
        <div class="totop footer-center-item">
            <p><i class="fas fa-chevron-up"></i>Az oldal</br>tetejére</p>
        </div>
    </div>

    <div class="footer-copyright">
        <p>&copy;<span></span>. Minden jog fenntarva.</p>
    </div>

    <div class="designby">
        <p>Designed by<span></span>jelszo co.</p>
    </div>
</div>
</footer>
</body>
</html>