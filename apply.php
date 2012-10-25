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
					<li><a href="#"><img src="http://www.cstarintl.com/product/proimage/0165(1).jpg"></a></li>
					<li style="display:none;"><a href="#"><img src="http://www.cstarintl.com/images/2.jpg"></a></li>
					<li style="display:none;"><a href="#"><img src="http://www.cstarintl.com/images/3.jpg"></a></li>
				</ul>
			</div>
		</div>
		<script>
			$('.apply-tab li').mouseenter(function(e){
				$(this).addClass('apply-tab-current').siblings().removeClass('apply-tab-current');
				$('.apply-tabcon li').hide().eq($('.apply-tab li').index(this)).show(); 
			});
		</script>
	</body>
</html>