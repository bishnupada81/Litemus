
<?php get_header() ?>

<?php while(have_posts()):the_post(); ?>
<div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
    <div class="hero-content">
        <div class="hero-text">
        <h1><?php the_title() ?></h1>
        </div>
    </div>
</div>
<div class="main-content container">
    <main class="text-center content-text">
        <div class="entry-information clear">
            <div class="date">
                <time>
                <?php echo the_time('d'); ?>
                <span><?php echo the_time('M'); ?></span>
                </time>
            </div><!--date-->
            <p class="author">
                <i class="fa fa-user" aria-hidden="true"></i>
                <?php the_author(); ?>  
            </p><!--author-->
        </div>
            <div class="thumbnail">
            <?php echo the_post_thumbnail('blog') ?>
            </div>
         <p><?php the_content() ?></p>
    </main>
</div>
<div class="comment container">
    <?php comment_form(); ?>
</div>


<?Php endwhile; ?>

<?php get_footer() ?>