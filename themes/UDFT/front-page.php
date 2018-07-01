<?php /* Template Name: Demo Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<?php

                echo udft::section_header( 'catering', 'Welcome to the Best Catering Company' );
                echo udft::get_archives_links( array( 'event' => array( 'title' => 'events' ),
                                                      'product' => array( 'title' => 'Food & Drinks' ),
                                                      'project' => array( 'title' => 'Venues' )
                                             )  );

			?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>