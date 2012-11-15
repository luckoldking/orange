<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo( 'name' ); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<script src="<?php echo get_template_directory_uri().'/style/js/common/jquery-1.8.js'; ?>"></script>
		<script src="<?php echo get_template_directory_uri().'/style/js/common/tabs.js'; ?>"></script>
		<script src="<?php echo get_template_directory_uri().'/style/js/common/lightview/lightview-merge.js'; ?>"></script>
		<script src="<?php echo get_template_directory_uri().'/style/js/page/motifs.js'; ?>"></script>
		<base target="_self" />
	</head>
	
	<body>
		<div class="mod">
			<div class="mod-content">
				<div id="header" class="clr">
					<div class="logo">
						<a href="http://orange/wordpress">
							<img style="margin-left:60px;" alt="cstar" src="<?php echo get_template_directory_uri().'/style/img/common/logo.jpg'; ?>" />
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

					<?php get_search_form(); ?>

				</div>
			</div>
