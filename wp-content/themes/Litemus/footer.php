<footer>
    <?php
        $args = array(
            'theme_location' => 'header-menu',
            'container'      => 'nav',
            'after'          => '<span class="separetor">|</span>'
        );
        wp_nav_menu($args);
    ?>
    <div class="location">
        <p>4th Floor, 401, Camex House, Stadium </p>
        <p>Phone Number:079-40038388</p>
    </div>
    <p class="copyright">All rights reserved <?php echo date("year"); ?></p>
</footer>
<?php wp_footer(); ?>
</body>
</html>