<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Litemus</title>
    <?php wp_head(); ?>
</head>
<body>
<header class="Site-header">
    <div class="container">
        <div class="logo">
            <a href="<?php echo esc_url(home_url()); ?>">
                <img src="<?php echo get_template_directory_uri() . "/img/litmuslogo.png" ?>" atr="side header" />
            </a>
        </div><!-- logo end-->
        <div class="header-information">
            <div class="socials">
                <?php
                $args = array(
                    'theme_location' => 'social-menu',
                    'container' => 'nav',
                    'container_class' => 'socials',
                    'container_id'    => 'socials',
                    'link_before'     => '<span class="sr-text">',
                    'link_after'      => '</span>'
                );
                wp_nav_menu($args);
                ?>
            </div><!--Social-->
            <div class="address">
                <p> Ballygunge Gardens, Gariahat,</p>
                <p>Kolkata, West Bengal 700019</p>
                <p>+91-7001422237</p>
            </div>
        </div><!--header-information-->
    </div><!--container-->
</header>
<div class="main-nemu"><!--Display nav menu -->
    <div class="navigation">
        <?php
            $args = array(
                'theme_location' => 'header-menu',
                'container' => 'nav',
                'container_class' => 'side-nav'
            );
            wp_nav_menu($args);
            ?>
    </div>
</div>
