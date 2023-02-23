<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet"> 

		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" />
			
		<link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
		<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>

		<?php wp_head(); ?>
		
	</head>
	<body <?php body_class(); ?>>

		

		<header class="top">
	    <div class="wrapper">
			<!-- logo -->
		    <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/mt.png" alt="MT Truck parts" /><br />
			<span>Monday to Saturday 7a-5p</span>
			</a>
				<!-- <div class="top_contact"> CONTACT INFO AT THE TOP OF THE WEBSITE
				<span class="phone"><a href="tel:940-382-6020">940-382-6020</a></span>
                <a class="address" href="https://goo.gl/maps/AHqR4gVdRofQr9wA6" target="_blank">3845 Masch Branch Road Krum, Texas 76249</a>
                <a class="facebook" href="https://www.facebook.com/mttruckparts" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/fb.png" alt="follow us on facebook" /></a>
            </div> -->
            <nav class="menu">
                <?php
				wp_nav_menu( $args = array('menu' => "main") );
				?>
            </nav>
			<a href="#" class="burger"></a>
	</div>
</header>
						
					

					

			