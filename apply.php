<?php
/**
 * index file
 */

get_header(); ?>
			<div class="mod-content">
				<ul class="apply-tab clr">
					<li class="apply-tab-current"><span>Custom Designs</span></li>					
					<li><span>How to Order</span></li>					
					<li><span>How to Iron On</span></li>					
				</ul>
				<ul class="apply-tabcon">
					<li class="apply-tabcon-li" style="display:block;">
						<ul class="customdesign-list">
							<li class="clr">
								<img class="flow-pic" src="http://127.0.0.1/wordpress/wp-content/themes/orange/style/img/page/flow11.jpg" />
								<img class="flow-arrow" src="http://127.0.0.1/wordpress/wp-content/themes/orange/style/img/page/iron-on/arrow-right.png" />
								<img class="flow-pic" src="http://127.0.0.1/wordpress/wp-content/themes/orange/style/img/page/flow12.jpg" />
							</li>
							<li class="clr">
								<img class="flow-pic" src="http://127.0.0.1/wordpress/wp-content/themes/orange/style/img/page/flow21.jpg" />
								<img class="flow-arrow" src="http://127.0.0.1/wordpress/wp-content/themes/orange/style/img/page/iron-on/arrow-right.png" />
								<img class="flow-pic" src="http://127.0.0.1/wordpress/wp-content/themes/orange/style/img/page/flow22.jpg" />
							</li>
						</ul>
					</li>
					<li class="apply-tabcon-li"><a href="#"><img style="width:240px;height:200px;" src="http://www.cstarintl.com/images/2.jpg"></a></li>
					<li class="apply-tabcon-li">
						<ul class="iron-list clr">
							<li>
								<img src="http://127.0.0.1/wordpress/wp-content/themes/orange/style/img/page/iron-on/01.jpg" />
								<span>remove the white protective backing,and make sure that the elements are not shifted.</span>
							</li>
							<li class="arrow"><img src="http://127.0.0.1/wordpress/wp-content/themes/orange/style/img/page/iron-on/arrow-right.png" /></li>
							<li>
								<img src="http://127.0.0.1/wordpress/wp-content/themes/orange/style/img/page/iron-on/02.jpg" />
								<span>Place the sticky-side of the transfer paper down onto fabric.If it's not in the desired position,reposition it.</span>
							</li>
							<li class="arrow"><img src="http://127.0.0.1/wordpress/wp-content/themes/orange/style/img/page/iron-on/arrow-right.png" /></li>
							<li>
								<img src="http://127.0.0.1/wordpress/wp-content/themes/orange/style/img/page/iron-on/03.jpg" />
								<span>Ajust the temperature as needed.Heavier fabrics need more time and light fabrics need less time.</span>
							</li>
							<li class="arrow-down"><img src="http://127.0.0.1/wordpress/wp-content/themes/orange/style/img/page/iron-on/arrow-down.jpg" /></li>
							<li>
								<img src="http://127.0.0.1/wordpress/wp-content/themes/orange/style/img/page/iron-on/06.jpg" />
								<span>Iron directly on top of the pressing cloth.If your garment is thin,place a flat cardboard inside.</span>
							</li>
							<li class="arrow"><img src="http://127.0.0.1/wordpress/wp-content/themes/orange/style/img/page/iron-on/arrow-left.jpg" /></li>
							<li>
								<img src="http://127.0.0.1/wordpress/wp-content/themes/orange/style/img/page/iron-on/05.jpg" />
								<span>Allow to cool completely and then slowly remove the transfer paper.If it's not sticky,re-apply heat.</span>
							</li>
							<li class="arrow"><img src="http://127.0.0.1/wordpress/wp-content/themes/orange/style/img/page/iron-on/arrow-left.jpg" /></li>
							<li>
								<img src="http://127.0.0.1/wordpress/wp-content/themes/orange/style/img/page/iron-on/04.jpg" />
								<span>When properly applied,transfers are fully machine-washable and dryable.Turn garment inside out before washing.</span>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<script>
			$('.apply-tab li').mouseenter(function(e){
				$(this).addClass('apply-tab-current').siblings().removeClass('apply-tab-current');
				$('.apply-tabcon-li').hide().eq($('.apply-tab li').index(this)).show(); 
			});
		</script>
	</body>
</html>