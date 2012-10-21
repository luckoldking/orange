<?php
/**
 * products page file
 */

get_header(); ?>
			<div class="mod-content clr">
				<div class="products-cata">
					<h3>Products Category</h3>
					<ul>
						<?php
						$cats = orange_get_cats_r(30);
						?>
						<?php foreach ($cats as $cat): ?>
						<li class="products-cata-lv1"><a href="<?php echo esc_url(get_category_link($cat->term_id)) ?>"><?php echo $cat->name ?></a></li>
						<?php endforeach ?>
						<li class="products-cata-lv1 products-cata-current"><a href="#">Hot Fix Copper Studs Abcdef</a></li>
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
