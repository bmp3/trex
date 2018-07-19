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


        <section class="projects-section">
            <div class="container-fluid">

				<?php

				echo udft::section_header( 'gallery', 'Check Out Our Recent Projects' );
                echo udft::get_projects_block();

				?>

            </div>
        </section>


        <section class="team-section">
            <div class="container-fluid">

				<?php

				echo udft::section_header( 'stuff', 'Meet the Team' );
				echo udft::get_team_block();

				?>

            </div>
        </section>


        <section class="testimonials-section">
            <div class="container-fluid">

				<?php

				echo udft::section_header( 'testimonials', 'Clients About Us' );
				echo udft::get_testimonials_block();

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

        <section class="posts-section">
            <div class="container">

                <?php

                global $post;
                $store = $post;

                $posts = get_posts( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC' ) );

                echo udft::section_header( 'blog', 'Recent Articles' );
                echo '<div class="posts-box row">';
                foreach ( $posts as $p ) {
                    $post = $p;
                    udft::get_template_part( 'tpl/blog-single-archive', null, 'echo' );
                }
                echo '</div>';
                $post = $store;

                ?>

            </div>
        </section>


        <section class="contact-form-section">
            <div class="container-fluid">

				<?php

				echo udft::section_header( 'contact us', 'Leave a Feedback or Ask a Question' );
				echo do_shortcode( '[contact-form-7 id="58" title="Form 1"]' );

				?>

            </div>
        </section>

	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>