<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo( 'name' ); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/style/css/common/layout.css'; ?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/style/css/page/products.css'; ?>" type="text/css" />
		<script src="<?php echo get_template_directory_uri().'/style/js/common/jquery-1.8.js'; ?>"></script>
		<script src="<?php echo get_template_directory_uri().'/style/js/common/jcarousel.js'; ?>"></script>
		<base target="_self" />
	</head>
	
	<body>
		<div class="mod">
			<div class="mod-content">
				<div id="header" class="clr">
					<div class="logo">
						<a href="http://127.0.0.1/wordpress">
							<img alt="cstar" src="http://127.0.0.1/wordpress/wp-content/themes/orange/style/img/common/logo.gif" />
						</a>
					</div>
					<div class="navigation">
						<?php wp_nav_menu( array( 
							'theme_location' => 'primary',
							'container'       => 'div',
							'container_class' => 'menu-juzi-container',
							'menu_class'      => 'menu', 
  							'menu_id'         => 'menu-juzi'
						) ); ?>
					</div>
				</div>
			</div>