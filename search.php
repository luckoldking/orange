<?php
/**
 * motifs page file
 */
get_header(); ?>
			
			<?php if (have_posts()): ?>
			<div class="search-result">
				<ul>
				<?php while (have_posts()): the_post() ?>
					<li>
					<?php the_title() ?>
					</li>
				<?php endwhile ?>
				</ul>
			</div>
			<?php else: ?>
			<div class="no-results">
				Sorry, but nothing matched your search criteria. Please try again with some different keywords.
			</div>
			<?php endif ?>
		</div>
	</body>
</html>
