<?php
/**
 * motifs page file
 */
get_header(); ?>
			<div class="motifs-detailblock">
				<div class="mod-content" style="position:relative;">
					<ul class="motifs-detail clr">
						<?php $lvgroup = rand()
						?>
						<?php while (have_posts()): the_post() ?>
						<li>
							<a href="<?php echo orange_get_post_image($post->ID) ?>" class="lightview" 
								data-lightview-group="lvgroup<?php echo $lvgroup ?>"
								data-lightview-title="<?php the_title() ?>" 
     							data-lightview-caption="<?php the_content()?>">
								<img src="<?php echo orange_get_post_image($post->ID) ?>" />
								<span title="if you like it,please click">I like it!</span>
							</a>
						</li>
						<?php endwhile ?>
					</ul>
					<?php pagenavi() ?>
					<div class="likebox">
						<h4>Your favourite</h4>
						<ul class="likebox-content clr">
						</ul>
						<div class="clr">
							<button id="likebox-send" class="likebox-send">send to us</button>
						</div>
					</div>
					<a class="fixeffect motif-backbut" href="/wordpress/?cat=1">Back to Category</a>
				</div>
			</div>
		</div>
	</body>
</html>
