<?php
/**
 * motifs page file
 */
get_header(); ?>
			<div class="mod-content" style="position:relative;">
				<div class="motifs">
					<div class="carousel-v2">
						<ul id="mycarousel">
						<!-- 增加类似下面的结构来增加轮播图，图片的src换成想要图片的地址，a标签的href换成想跳转到的类目链接 -->
							<li><a href="#"><img src="http://www.cstarintl.com/images/1.jpg" /></a></li>
							<li><a href="#"><img src="http://www.cstarintl.com/images/2.jpg" /></a></li>
							<li><a href="#"><img src="http://www.cstarintl.com/images/3.jpg" /></a></li>
							<li><a href="#"><img src="http://www.cstarintl.com/images/4.jpg" /></a></li>
							<li><a href="#"><img src="http://www.cstarintl.com/images/5.jpg" /></a></li>
							<li><a href="#"><img src="http://www.cstarintl.com/images/6.jpg" /></a></li>						
						</ul>
						<div class="jcarousel-prev jcarousel-prev-horizontal"></div>
						<div class="jcarousel-next jcarousel-next-horizontal"></div>
					</div>
					<ul class="motifs-cata clr">
						<?php
						$motifs_cats = orange_get_image_cats(CAT_MOTIFS_ID);		
						?>

						<?php foreach ($motifs_cats as $cat): ?>
						<li><a href="<?php echo esc_url(get_category_link($cat->term_id)) ?>" title="<?php echo esc_attr($cat->name) ?>" target="_self"><span><?php echo $cat->name ?></span><img src="<?php echo $cat->image ?>" /></a></li>
						<?php endforeach ?>
					</ul>
				</div>
				<div class="likebox">
					<h4>Your favourite</h4>
					<ul class="likebox-content clr">
					</ul>
					<div class="clr">
						<button id="likebox-send" class="likebox-send">send to us</button>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			jQuery(document).ready(function() {
				new Tabs('div.carousel-v2', {
					event: 'click',
					prevNav: 'div.jcarousel-prev',
					nextNav: 'div.jcarousel-next',
					pane: '#mycarousel li',
					effect: 'leftright',
					autoSwitch: 'liner',
					offset: 3
				});
			});
		</script>

	</body>
</html>
