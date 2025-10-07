



<?php wp_footer() ?>
<footer>
    <div class="footer-container">
        <div class="footer-logo">
            <a href="#">Logo</a>
        </div>
        <nav class="footer-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'menu_class' => 'footer-menu',
            ));
            ?>
        </nav>
    </div>
</footer>
</body>
</html>