<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo( 'name' ); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/style/css/common/layout.css'; ?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/style/css/page/index.css'; ?>" type="text/css" />
		<script src="<?php echo get_template_directory_uri().'/style/js/common/jquery-1.8.js'; ?>"></script>
		<script src="<?php echo get_template_directory_uri().'/style/js/common/jcarousel.js'; ?>"></script>
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
						<!-- <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?> -->
						<div class="menu-juzi-container">
							<ul class="menu" id="menu-juzi">
								<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-13 first_item" id="menu-item-13"><a href="http://127.0.0.1/wordpress/"><span class="menu-link-left"></span><span class="menu-link">menus01</span><span class="menu-link-right"></span></a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14 last_item" id="menu-item-14" style="background:none!important;height:22px!important;"><a href="http://google.com"><span class="menu-link-left"></span><span class="menu-link">guge</span><span class="menu-link-right"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mod">
			<div class="mod-content">
				<div class="division">
					21312312366<br/>
					21312312355<br/>
				</div>
				<div class="carousel-v1">
					<ul id="mycarousel">
						<li><a href="#"><img src="http://www.cstarintl.com/images/1.jpg" /></a></li>
						<li><a href="#"><img src="http://www.cstarintl.com/images/2.jpg" /></a></li>
						<li><a href="#"><img src="http://www.cstarintl.com/images/3.jpg" /></a></li>
						<li><a href="#"><img src="http://www.cstarintl.com/images/4.jpg" /></a></li>
						<li><a href="#"><img src="http://www.cstarintl.com/images/5.jpg" /></a></li>
						<li><a href="#"><img src="http://www.cstarintl.com/images/6.jpg" /></a></li>
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