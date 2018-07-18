<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( has_post_thumbnail()) :  ?>
        <a href="<?php the_permalink(); ?>" class="post-archive-thumb" title="<?php the_title(); ?>">
            <?php the_post_thumbnail(array( 370, 190 ));  ?>
        </a>
    <?php endif; ?>

    <span class="date"><?php the_time('F j, Y'); ?></span>

    <h2>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    </h2>

    <!--<span class="author"><?php _e( 'Published by', 'thm-tpl' ); ?> <?php the_author_posts_link(); ?></span>-->
    <!--<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'thm-tpl' ), __( '1 Comment', 'thm-tpl' ), __( '% Comments', 'thm-tpl' )); ?></span>-->

    <?php edit_post_link(); ?>

</article>