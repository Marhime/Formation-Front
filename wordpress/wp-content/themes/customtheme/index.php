<?php get_header(); ?>

<?php
// La boucle wordpress (wordpress loop) permet d'afficher un ou plusieurs contenus selon la page visitée.
// Si la page en question affiche seulement un article, cette boucle sera parcourue qu'une seule fois.
// sur une page contenant une liste d'article,n selle sera parcourue autant de fois qu'il y a d'article.

while(have_posts()) : // while (i < nbPosts) en gros comme une boucle for
    the_post(); // i++ (en gros)
    if(is_front_page() && is_home()): ?>
        <h2><?php the_title(); ?></h2>
    <?php else: ?>
        <h1><?php the_title(); ?></h1>
    <?php endif;?>

    <article>
        <?php the_content(); ?>
    </article>

<?php 
   the_posts_pagination( array(
    'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
    'next_text'          => __( 'Next page', 'twentyfifteen' ),
    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
) );
?>

<?php endwhile;
?>

<?php get_footer(); ?>