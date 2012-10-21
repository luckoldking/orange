<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo( 'name' ); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/style/css/common/layout.css'; ?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/style/css/page/motifs.css'; ?>" type="text/css" />
		<script src="<?php echo get_template_directory_uri().'/style/js/common/jquery-1.8.js'; ?>"></script>
		<script src="<?php echo get_template_directory_uri().'/style/js/common/jcarousel.js'; ?>"></script>
	</head>
	
	<body>
		<div class="mod">
			<div class="mod-content">
				<div id="header" class="clr">
					<div class="logo">
						<a href="http://127.0.0.1/wordpress">
							<img alt="cstar" src="http://127.0.0.1/wordpress/wp-content/themes/orange/style/img/common/logo.gif1" />
						</a>
					</div>
					<div class="navigation">
						<!-- <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?> -->
						<div class="menu-juzi-container">
							<ul class="menu" id="menu-juzi">
								<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://127.0.0.1/wordpress/"><span class="menu-link-left"></span><span class="menu-link">Home</span><span class="menu-link-right"></span></a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14 last_item"><a href="http://google.com"><span class="menu-link-left"></span><span class="menu-link">Company</span><span class="menu-link-right"></span></a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14 last_item"><a href="http://google.com"><span class="menu-link-left"></span><span class="menu-link">Products</span><span class="menu-link-right"></span></a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14 last_item current-menu-item current_page_item menu-item-home menu-item-13 first_item"><a href="http://google.com"><span class="menu-link-left"></span><span class="menu-link">Motif Design</span><span class="menu-link-right"></span></a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14 last_item"><a href="http://google.com"><span class="menu-link-left"></span><span class="menu-link">How To Apply</span><span class="menu-link-right"></span></a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14 last_item"><a href="http://google.com"><span class="menu-link-left"></span><span class="menu-link">Contact Us</span><span class="menu-link-right"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="mod-content">
				<div class="motifs">
					<div class="carousel-v2">
						<ul id="mycarousel">
							<li><a href="#"><img src="http://www.cstarintl.com/images/1.jpg" /></a></li>
							<li><a href="#"><img src="http://www.cstarintl.com/images/2.jpg" /></a></li>
							<li><a href="#"><img src="http://www.cstarintl.com/images/3.jpg" /></a></li>
							<li><a href="#"><img src="http://www.cstarintl.com/images/4.jpg" /></a></li>
							<li><a href="#"><img src="http://www.cstarintl.com/images/5.jpg" /></a></li>
							<li><a href="#"><img src="http://www.cstarintl.com/images/6.jpg" /></a></li>						
						</ul>
					</div>
					<ul class="motifs-list clr">
						<?php
						$motifs_cats = orange_get_image_cats(31);		
						?>

						<?php foreach ($motifs_cats as $cat): ?>
						<li><a href="<?php echo esc_url(get_category_link($cat->term_id)) ?>" title="<?php echo esc_attr($cat->name) ?>"><span><?php echo $cat->name ?></span><img src="<?php echo $cat->image ?>" /></a></li>
						<?php endforeach ?>
					</ul>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			jQuery(document).ready(function() {
    			jQuery('#mycarousel').jcarousel({
    				scroll:1,
    				auto:3,
    				animation:1000,
    				wrap:'circular'
    			});
			});
		</script>

	</body>
</html>
