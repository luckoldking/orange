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
						$motifs_cats = orange_get_image_cats(31);		
						?>

						<?php foreach ($motifs_cats as $cat): ?>
						<li><a href="<?php echo esc_url(get_category_link($cat->term_id)) ?>" title="<?php echo esc_attr($cat->name) ?>" target="_blank"><span><?php echo $cat->name ?></span><img src="<?php echo $cat->image ?>" /></a></li>
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
