<?php get_header(); ?>
<?php while(have_posts()): the_pst(); ?>

<article>
<header>
<h1><?php the_title(); ?></h1>
</header
<div class="content">
    <?php the_content(); ?>
</div>
</article>
<?php endwhile ?>
<?php get_footer(); ?>