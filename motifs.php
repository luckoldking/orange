<?php
/**
 * motifs page file
 */

get_header(); ?>
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
					<ul class="motifs-cata clr">
						<?php
						$motifs_cats = get_categories(array(
							'hide_empty' => false, 
							'orderby' => 'id', 
							'child_of' => 31, 
							'title_li' => false
						));
						?>

						<?php foreach ($motifs_cats as $cat): ?>
						<li><a href="#"><span><?php echo $cat->name ?></span><img src="http://i03.c.aliimg.com/cms/upload/2012/102/444/444201_898491320.jpg" /></a></li>
						<?php endforeach ?>
						<li><a href="#"><span>catagory1</span><img src="http://i03.c.aliimg.com/cms/upload/2012/102/444/444201_898491320.jpg" /></a></li>
					</ul>
				</div>
			</div>
			<div class="motifs-detailblock">
				<div class="mod-content">
					<ul class="motifs-detail clr">
						<li><a href="#"><img src="http://www.cstarintl.com/product/proimage/0165(1).jpg" /></a></li>
						<li><a href="#"><img src="http://www.cstarintl.com/images/2.jpg" /></a></li>
						<li><a href="#"><img src="http://www.cstarintl.com/images/3.jpg" /></a></li>
						<li><a href="#"><img src="http://www.cstarintl.com/images/4.jpg" /></a></li>
						<li><a href="#"><img src="http://www.cstarintl.com/images/5.jpg" /></a></li>
						<li><a href="#"><img src="http://www.cstarintl.com/images/6.jpg" /></a></li>
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
