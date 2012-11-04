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
						$current_cat_id = $cat;
						$cats = orange_get_cats_r(4);
						?>
						<?php foreach ($cats as $cat): ?>
						<?php if ($cat->cat_ID == $current_cat_id): ?>
						<li class="products-cata-lv1 products-cata-current">
						<?php else: ?>
						<li class="products-cata-lv1">
						<?php endif ?>
							<?php if (!empty($cat->children)): ?>
							<a href="javascript:;"><?php echo $cat->name ?></a>
							<ul>
								<?php foreach ($cat->children as $sub): ?>
								<?php if ($sub->cat_ID == $current_cat_id): ?>	
								<li class="products-cata-lv2 products-cata-lv2-current">
								<?php else: ?>
								<li class="products-cata-lv2">
								<?php endif ?>
									<a href="<?php echo esc_url(get_category_link($sub->term_id)) ?>"><?php echo $sub->name ?></a>
								</li>
								<?php endforeach ?>
							</ul>
							<?php else: ?>
							<a href="<?php echo esc_url(get_category_link($cat->term_id)) ?>"><?php echo $cat->name ?></a>
							<?php endif ?>
						</li>
						<?php endforeach ?>
					</ul>
				</div>

				<?php if (have_posts()): the_post() ?>
				<div class="products-con">
				<?php the_content() ?>	
				</div>
				<?php endif ?>
			</div>
		</div>
		<script>
			var isOpen;
			$('.products-cata-lv1').on({
				mouseenter:function(e){
					var self = $(this);
					isOpen = setTimeout(function(){
						self.find('ul').show(500);	
					},100);
					//如果有子目录，则本身不是链接，改为非链接样式
					if(self.find('.products-cata-lv2').length > 0){
						self.find('>a').css({
							color:'#333',
							cursor:'default',
							fontWeight:'normal'
						});
					}
				},				
				mouseleave:function(e){
					clearTimeout(isOpen);
					/*
					var children = $(this).find('ul'); 
					if(children.length > 0){
						isMoving = true;
						children.hide(300,function(){
							isMoving = false;
						});
					}
					*/
				}
			})
			//默认展开二级页面的上级菜单
			$('.products-cata-lv2-current').closest('.products-cata-lv1').trigger('mouseenter');
		</script>
	</body>
</html>
