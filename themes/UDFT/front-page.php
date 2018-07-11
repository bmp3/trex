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
                echo
                '<div class="services-box">
                     <div class="sv-list left">' .
                         udft::get_service_excerpt( 'weddings, corporate, socials', 1 ) .
                     '</div>
                     <div class="sv-pic"></div>
                     <div class="sv-list right">' .
                         udft::get_service_excerpt( 'picnics, festivals, private_paties', 4 ) .
                     '</div>
                </div>';
				
				?>

            </div>
        </section>

	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>