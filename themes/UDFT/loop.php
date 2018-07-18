<div class="posts-box row">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <?php
        udft::get_template_part( 'tpl/blog-single-archive', null, 'echo');
    ?>
<?php endwhile; ?>
</div>

<?php else: ?>

	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'thm-tpl' ); ?></h2>
	</article>

<?php endif; ?>
