<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo( 'name' ); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/style/css/common/layout.css'; ?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/style/css/page/products.css'; ?>" type="text/css" />
		<script src="<?php echo get_template_directory_uri().'/style/js/common/jquery-1.8.js'; ?>"></script>
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
								<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://127.0.0.1/wordpress/"><span class="menu-link-left"></span><span class="menu-link">Home</span><span class="menu-link-right"></span></a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14 last_item"><a href="http://google.com"><span class="menu-link-left"></span><span class="menu-link">Company</span><span class="menu-link-right"></span></a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14 last_item current-menu-item current_page_item menu-item-home menu-item-13 first_item"><a href="http://google.com"><span class="menu-link-left"></span><span class="menu-link">Products</span><span class="menu-link-right"></span></a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14 last_item"><a href="http://google.com"><span class="menu-link-left"></span><span class="menu-link">Motif Design</span><span class="menu-link-right"></span></a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14 last_item"><a href="http://google.com"><span class="menu-link-left"></span><span class="menu-link">How To Apply</span><span class="menu-link-right"></span></a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14 last_item"><a href="http://google.com"><span class="menu-link-left"></span><span class="menu-link">Contact Us</span><span class="menu-link-right"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="mod-content clr">
				<div class="products-cata">
					<h3>Products Category</h3>
					<ul>
						<li class="products-cata-lv1"><a href="#">College Student</a></li>
						<li class="products-cata-lv1"><a href="#">College</a></li>
						<li class="products-cata-lv1"><a href="#">CollegeStudent</a></li>
						<li class="products-cata-lv1"><a href="#">College Student Abc</a></li>
						<li class="products-cata-lv1 products-cata-current"><a href="#">Hot Fix Copper Studs Abcdef</a></li>
						<li class="products-cata-lv1"><a href="#">College Student</a></li>
						<li class="products-cata-lv1"><a href="#">College Student</a></li>
						<li class="products-cata-lv1"><a href="#">College Student</a></li>
						<li class="products-cata-lv1"><a href="#">College Student</a></li>
					</ul>
				</div>
				<div class="products-con">
					<h3>Hot Fix Copper Studs Abcdef</h3>
					<div class="products-discription">
						Dome stud is also called half round.The material is aluminum. 
						It can be electroplated for more than twenty colors. 
						The quality is much similar to that of rhinestuds. 
					</div>
					<h3>Photo</h3>
					<ul class="products-photo clr">
						<li><a href="#"><img src="http://www.cstarintl.com/product/proimage/62(1).jpg" /></a></li>
						<li><a href="#"><img src="http://www.cstarintl.com/product/proimage/60.jpg" /></a></li>
						<li><a href="#"><img src="http://www.cstarintl.com/product/proimage/59.jpg" /></a></li>
						<li><a href="#"><img src="http://www.cstarintl.com/product/proimage/dome%20stud.jpg" /></a></li>
					</ul>
					<h3>Size&Packing</h3>
					<table class="products-size">
						<tr><th class="col80">TYPE</th><th class="col80">SIZE</th><th>PACKING</th><th class="col130">PCS PER PACKING</th></tr>
						<tr><td>1.5MM</td><td>2MM</td><td>1000gross/bag</td><td>144,000</td></tr>
						<tr><td>1.5MM</td><td>2MM</td><td>1000gross/bag</td><td>144,000</td></tr>
						<tr><td>1.5MM</td><td>2MM</td><td>1000gross/bag</td><td>144,000</td></tr>
						<tr><td>1.5MM</td><td>2MM</td><td>1000gross/bag</td><td>144,000</td></tr>
					</table>
					<h4 class="products-standard">1 GROSS=144 PCS</h4>
				</div>
			</div>
		</div>

	</body>
</html>
