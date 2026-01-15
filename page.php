<?php get_header(); ?>

<div class="container" style="padding-top: 120px; padding-bottom: 80px;">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header" style="margin-bottom: 40px;">
                <h1 class="entry-title" style="font-size: 36px; color: var(--primary);"><?php the_title(); ?></h1>
            </header>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>