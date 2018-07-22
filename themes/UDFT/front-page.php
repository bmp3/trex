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
			     echo '<a class="btn" href="#">' . __( 'more about us' , 'thm-tpl' ) . '</a>';

			?>

            </div>
		</section>


        <section class="story-section">
            <div class="bg-box"></div>
            <div class="container">

				<?php

				echo udft::section_header( 'chef', 'A Short Story About Our Company' );
				echo
				'<div class="shifted-box story-box">
                     <div class="sb-content-box lefted row">
                         <div class="sb-col pic col"></div>
                         <div class="sb-col text col">
                             <div class="sb-content">
                                 <div class="sb-title">A Perfect Blend of Sensational Food, Inspiring Ideas and Professional Staff</div>
                                 <div class="sb-text">
                                     <span class="capitalized">1997</span>                                 
                                     <span>Lorem ipsum dolor sit amet, consecte adipiscing elit, sed diam Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure. dolor in hendrerit in vulputate velit.</span>
                                 </div>
                                 <a class="btn" href="#">' . __( 'read full story' , 'thm-tpl' ) . '</a>
                             </div>
                         </div>
                     </div>   
                </div>';

				?>

            </div>
        </section>


        <section class="menu-section">
            <div class="container">

				<?php

				echo udft::section_header( 'catering', 'Our Menu' );
				echo udft::get_product_cats();
				echo '<div class="subtitle">' . __( '& much more sensatial food & drinks', 'tmp-tpl' ) . '</div>';
                echo '<a class="btn" href="#">' . __( 'view full menu' , 'thm-tpl' ) . '</a>';

				?>

            </div>
        </section>


        <section class="services">
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
				echo '<a class="btn" href="#">' . __( 'more services' , 'thm-tpl' ) . '</a>';

				?>

            </div>
        </section>


        <section class="book-section">
            <div class="bg-box"></div>
            <div class="container">
	            <?php

	            echo udft::section_header( 'book today!', 'Book Your Tasting Session or Discuss Your Project' );
	            echo '<a class="btn" href="#">' . __( 'send free request' , 'thm-tpl' ) . '</a>';

	            ?>

            </div>
        </section>


        <section class="testimonials-section">
            <div class="container">

				<?php

				echo udft::section_header( 'testimonials', 'Clients About Us' );
				echo udft::get_testimonials_block();

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
				echo '<a class="btn" href="#">' . __( 'more articles' , 'thm-tpl' ) . '</a>';

				?>

            </div>
        </section>



        <section class="chef-section">
            <div class="bg-box"></div>
            <div class="container">

				<?php

				echo udft::section_header( 'about us', 'A Short Story About Our Company' );
				echo
				'<div class="shifted-box story-box">
                     <div class="sb-content-box lefted row">
                         <div class="sb-col pic col"></div>
                         <div class="sb-col text col">
                             <div class="sb-content">
                                 <!--<div class="sb-title">A Perfect Blend of Sensational Food, Inspiring Ideas and Professional Staff</div>-->
                                 <div class="sb-text">                                
                                     <span>Lorem ipsum dolor sit amet, consecte adipiscing elit, sed diam Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure. dolor in hendrerit in vulputate velit.</span>
                                     <div class="team-member">
                                         <span class="name">Andreo Moreno,</span>
                                         <span class="job"> Master-Chef</span>
                                     </div>
                                 </div>
                                 <a class="btn" href="#">' . __( 'view all team' , 'thm-tpl' ) . '</a>
                             </div>
                         </div>
                     </div>   
                </div>';

				?>

            </div>
        </section>



        <section class="team-section">
            <div class="container">

				<?php

				echo udft::section_header( 'staff', 'Meet the Team' );
				echo udft::get_team_block();
				echo '<a class="btn" href="#">' . __( 'send free request' , 'thm-tpl' ) . '</a>';

				?>

            </div>
        </section>


        <section class="projects-section">
            <div class="container-fluid">

				<?php

				echo udft::section_header( 'gallery', 'Check Out Our Recent Projects' );
				echo udft::get_projects_block();
				echo '<a class="btn" href="#">' . __( 'view more projects' , 'thm-tpl' ) . '</a>';

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