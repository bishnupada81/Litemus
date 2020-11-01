
<?php get_header() ?>
<?php 
$blogPage = get_option('page_for_posts');
$image = get_post_thumbnail_id($blogPage);
$image = wp_get_attachment_image_src($image,'full');
?>


<div class="hero" style="background-image:url(<?php echo $image[0]; ?>)">
    <div class="hero-content">
        <div class="hero-text">
        <h1><?php echo get_the_title($blogPage);?></h1>
        </div>
    </div>
</div>
<div class="main-content container">
    <div class="container-blog">
        <main class="text-center content-text">
            <?php while(have_posts()):the_post(); ?>
                <article class="entry">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('blog'); ?>
                    </a>
                    <header class="header-entry clear">
                        <div class="date">
                            <time>
                                <?php echo the_time('d'); ?>
                                <span><?php echo the_time('M'); ?></span>
                            </time>
                        </div><!--date-->
                        <div class="entry-title">
                            <h2><?php the_title(); ?></h2>
                            <p class="author">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <?php the_author(); ?>  
                            </p><!--author-->
                        </div>
                    </header>
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="button primary">Read More</a>
                    </div>
                </article>
            <?Php endwhile; ?>
        </main>
    </div>
</div>


<?php get_footer() ?>