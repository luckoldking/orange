<?php
/**
 * motifs page file
 */
get_header(); ?>
			<div class="motifs-detailblock">
				<div class="mod-content">
					<ul class="motifs-detail clr">
						<?php $lvgroup = rand()
						?>
						<?php while (have_posts()): the_post() ?>
						<li>
							<a href="<?php echo orange_get_post_image($post->ID) ?>" class="lightview" data-lightview-group="lvgroup<?php echo $lvgroup ?>">
								<img src="<?php echo orange_get_post_image($post->ID) ?>" />
								<span title="if you like it,please click">I like it!</span>
								<div><?php the_title() ?></div>
								<div><?php the_content()?></div>
							</a>
						</li>
						<?php endwhile ?>
					</ul>
				</div>
				<a class="fixeffect motif-backbut" href="http://127.0.0.1/wordpress/category/motifs">Back to Category</a>
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
	</body>
</html>
