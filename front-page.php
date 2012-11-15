<?php
/**
 * index file
 */

get_header(); ?>
			<!-- 网站公告区，有公告内容时把注释去掉 -->
			<div class="clare">
				<div class="division"></div>
				<h2>This website is under Construction.Plead contact us by E-mail,<span style="color:#0066cc;">cstarintl@gmail.com</span></h2>
				<div class="division"></div>
			</div>
			<div class="mod-content">
				<div class="carousel-v1">
					<ul id="mycarousel">
						<!-- 顶部轮播 -->
						<li><a href="#"><img src="http://www.cstarintl.com/wordpress/wp-content/uploads/2012/11/lunbo-index01.png" /></a></li>
						<li><a href="#"><img src="http://www.cstarintl.com/wordpress/wp-content/uploads/2012/11/lunbo-index02.png" /></a></li>
						<li><a href="#"><img src="http://www.cstarintl.com/wordpress/wp-content/uploads/2012/11/lunbo-index03.png" /></a></li>
						<li><a href="#"><img src="http://www.cstarintl.com/wordpress/wp-content/uploads/2012/11/lunbo-index04.png" /></a></li>
					</ul>
					<div class="jcarousel-prev jcarousel-prev-horizontal"></div>
					<div class="jcarousel-next jcarousel-next-horizontal"></div>
				</div>
				<h3 class="commontitle">Hot Products</h3>
				<div class="division" style="margin:10px 0 25px 0;"></div>
				<!-- 产品区products -->
				<ul class="showlist1 clr">
					<li><a href="#"><span>Rhinestone</span><img src="http://www.cstarintl.com/wordpress/wp-content/uploads/2012/11/product-index01.png" /></a></li>
					<li><a href="#"><span>Nailhead</span><img src="http://www.cstarintl.com/wordpress/wp-content/uploads/2012/11/product-index02.png" /></a></li>
					<li><a href="#"><span>Rhine stud</span><img src="http://www.cstarintl.com/wordpress/wp-content/uploads/2012/11/product-index03.png" /></a></li>
					<li><a href="#"><span>Dome stud</span><img src="http://www.cstarintl.com/wordpress/wp-content/uploads/2012/11/product-index04.png" /></a></li>	
					<li><a href="#"><span>Copper stud</span><img src="http://www.cstarintl.com/wordpress/wp-content/uploads/2012/11/product-index05.png" /></a></li>
					<li><a href="#"><span>Epoxy Beads</span><img src="http://www.cstarintl.com/wordpress/wp-content/uploads/2012/11/product-index06.png" /></a></li>
					<li><a href="#"><span>Hot fix paper</span><img src="http://www.cstarintl.com/wordpress/wp-content/uploads/2012/11/product-index07.png" /></a></li>
					<li><a href="#"><span>Transfer Film</span><img src="http://www.cstarintl.com/wordpress/wp-content/uploads/2012/11/product-index08.png" /></a></li>
				</ul>
			</div>
			<div class="showblock">
				<div class="mod-content">
					<h3 class="commontitle">New Designs Show Case</h3>
					<!-- 首页热门motifs区 -->
					<ul class="showlist clr">
						<li><a href="#"><img src="http://www.cstarintl.com/wordpress/wp-content/uploads/2012/11/motif-index01.png" /></a></li>			
						<li><a href="#"><img src="http://www.cstarintl.com/wordpress/wp-content/uploads/2012/11/motif-index02.png" /></a></li>			
						<li><a href="#"><img src="http://www.cstarintl.com/wordpress/wp-content/uploads/2012/11/motif-index03.png" /></a></li>			
						<li><a href="#"><img src="http://www.cstarintl.com/wordpress/wp-content/uploads/2012/11/motif-index04.png" /></a></li>			
						<li><a href="#"><img src="http://www.cstarintl.com/wordpress/wp-content/uploads/2012/11/motif-index05.png" /></a></li>			
						<li><a href="#"><img src="http://www.cstarintl.com/wordpress/wp-content/uploads/2012/11/motif-index06.png" /></a></li>			
						<li><a href="#"><img src="http://www.cstarintl.com/wordpress/wp-content/uploads/2012/11/motif-index07.png" /></a></li>			
						<li><a href="#"><img src="http://www.cstarintl.com/wordpress/wp-content/uploads/2012/11/motif-index08.png" /></a></li>					
					</ul>
				</div>
			</div>
			<div class="mod-content">
				<div id="footer">
					<h3 class="commontitle contacttitle">Contact Us</h3>
					<div class="division" style="margin:20px 0 35px 0;"></div>
					<div class="contactlist clr">
						<ul>
							<li><h3>CHINA</h3></li>
							<li><b>TEL</b><span>86-571-85333051</span></li>
							<li><b>FAX</b><span>86-571-85333052</span></li>
							<li><b>E-MAIL</b><span>info@cstarintl.com</span></li>
							<li><b>MSN</b><span>swasky@swasky.com</span></li>
							<li><b>SKYPE</b><span>caleb_c</span></li>
							<li><b>HOURS</b><span>Monday-Saturday 9:00AM-6:00PM</span></li>
							<li><b>OFFICE ADDRESS(in China)</b><br/><span>15/F, Dongguan Building, No.4288 Jiangnan Road, Binjiang District, Hangzhou, China</span></li>
						</ul>
						<div class="division2"></div>
						<ul>
							<li><h3>U.S.A</h3></li>
							<li><b>TEL</b><span>(408)705-4409</span></li>
							<li><b>E-MAIL</b><span>cstarintl@gmail.com</span></li>
							<li><b>SKYPE</b><span>caleb_c</span></li>
							<li><b>HOURS</b><span>Monday-Saturday 9:00AM-6:00PM</span></li>
							<li><b>OFFICE ADDRESS(in U.S.A)</b><br/><span>1520 South Mary Ave Sunnyvale, CA, 94087, USA</span></li>
						</ul>
					</div>	
					<div class="supportpic"></div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			<!-- 网站上线前先藏起来 -->
			//jQuery('.mod-content').hide();
			jQuery(document).ready(function() {
				new Tabs('div.carousel-v1', {
					event: 'click',
					prevNav: 'div.jcarousel-prev',
					nextNav: 'div.jcarousel-next',
					pane: '#mycarousel li',
					effect: 'leftright',
					autoSwitch: 'liner'
				});
			});
		</script>

	</body>
</html>
