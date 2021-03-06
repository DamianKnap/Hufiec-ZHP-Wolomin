<?php
/**
 * Template for a content card (excerpt card on home page)
 *
 * This template renders excerpts from a single post on a home page
 *
 * @author		Edwin Jabłoński & Damian Knap <https://ejdk.pl>
 * @copyright	Copyright (c) 2016, Edwin Jabłoński & Damian Knap
 * @package		Zola Template
 * @category	Template
 * @since		1.0.0
 */
?>

<div class="homecard-wrap">
    <div class="post-excerpt">
        <div class="post-excerpt-thumb">

            <?php
                if( has_post_thumbnail() ) {
                    the_post_thumbnail( 'large' );
                } else {
                    echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/bg/def_post.jpg" class="attachment-large size-large wp-post-image" alt="' . sanitize_text_field( get_the_title() ) . '" sizes="(max-width: 1024px) 100vw, 1024px" height="576" width="1024">';
                }
            ?>

        </div><!-- .post-excerpt-thumb -->
        <div class="post-excerpt-text" data-equalizer-watch>
            <h2><?php the_title(); ?></h2>

            <?php the_content(); ?>

        </div><!-- .post-excerpt-text -->
        <hr>
        <div class="post-excerpt-author">

            <?php echo get_avatar( get_the_author_meta( "user_email" ), 60 ); ?>

            <div class="post-excerpt-author-date">
                <p><?php the_time('d');?></p>
    			<p><?php the_time('M');?></p>
            </div><!-- .post-excerpt-author-date -->
            <div class="post-excerpt-author-tags">

                <?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>

            </div><!-- .post-excerpt-author-tags -->
            <div class="post-excerpt-author-button">
                <a href="<?php the_permalink(); ?>"><span><?php _e( 'Read more', 'zola' ) ?></span> &rsaquo;</a>
            </div><!-- .post-excerpt-author-button -->
        </div><!-- .post-excerpt-author -->
    </div><!-- .post-excerpt -->
</div><!-- .post-excerpt-wrap -->
