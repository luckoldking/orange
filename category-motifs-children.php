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
							</a>
						</li>
						<?php endwhile ?>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>
