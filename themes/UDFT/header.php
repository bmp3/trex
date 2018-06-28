<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php

            global $udft, $woocommerce;;

		    $udft = udft::correct_global_var();
            wp_head();

        ?>

	</head>
	<body <?php body_class(); ?>>

        <div class="site-box container-fluid">

		<div class="wrapper site-content container">

			<header class="header clear" role="banner">

                <nav class="nav" role="navigation">
                    <?php wp_nav_menu( array( 'container_class' => 'top-menu-box', 'menu_class' => 'top-menu' ) ); ?>
                </nav>

                <div class="top-info-box row">
                    <div class="info-block top-contacts col">
                        <div class="info-line">
                            <a class="top-phone fa-phone" href="tel:123-456-7890">123-456-7890</a>
                            <a class="top-mail" href="mailto:123-456-7890">info@yoursite.com</a>
                        </div>
                    </div>
                    <div class="info-block logo-box col">
                        <div class="top-logo-box">
                            <!--<div class="top-logo-decor"></div>-->
                            <div class="title">royal<br>event</div>
                            <div class="sub-title">catering</div>
                        </div>
                    </div>
                    <div class="info-block wc-box col">
                        <div class="wc info-line">
                            <a class="fa-shopping-cart" href="<?php echo wc_get_cart_url(); ?>">your cart:</a>
                            <div class="wc-info info-line">
                                <span class="wc-items"><?php echo $woocommerce->cart->cart_contents_count; ?> items - </span><span class="wc-price"><?php echo $woocommerce->cart->get_cart_total(); ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider-box">
                    <?php echo do_shortcode('[metaslider id="6"]'); ?>
                </div>

			</header>

            <?php

                global $udft;
                $header_layout = udft::start_content_layout( false );

                echo

                '<div class="content-body-wrap ' . $udft['box-type'] . '">
    
                    <div class="content-wrap row">';

                    echo $header_layout;


            ?>