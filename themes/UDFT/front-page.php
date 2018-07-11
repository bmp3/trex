<?php /* Template Name: Front Page Template */ get_header(); ?>

	<main role="main">

		<section class="welcome-section">
            <div class="container">

			<?php

                echo udft::section_header( 'catering', 'Welcome to the Best Catering Company' );
                echo udft::get_archives_links( array( 'event' => array( 'title' => 'events' ),
                                                      'product' => array( 'title' => 'Food & Drinks' ),
                                                      'project' => array( 'title' => 'Venues' )
                                             )  );

			?>

            </div>
		</section>

        <section class="menu-section">
            <div class="container">

			<?php

			echo udft::section_header( 'catering', 'Our Menu' );
            echo udft::get_product_cats();

			?>

            </div>
        </section>

        <section class="services full-width">
            <div class="container">

				<?php

				echo udft::section_header( 'services', 'Planning a Fabulous Event?' );

				?>

            </div>
        </section>

	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>