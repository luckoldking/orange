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
						$cats = orange_get_cats_r(30);
						?>
						<?php foreach ($cats as $cat): ?>
						<?php if ($cat->cat_ID == $current_cat_id): ?>
						<li class="products-cata-lv1 products-cata-current">
						<?php else: ?>
						<li class="products-cata-lv1">
						<?php endif ?>
							<a href="<?php echo esc_url(get_category_link($cat->term_id)) ?>"><?php echo $cat->name ?></a>
							<?php if (!empty($cat->children)): ?>
							<ul>
								<?php foreach ($cat->children as $sub): ?>
								<li><a href="<?php echo esc_url(get_category_link($cat->term_id)) ?>">&gt;<?php echo $sub->name ?></a></li>
								<?php endforeach ?>
							</ul>
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

	</body>
</html>
