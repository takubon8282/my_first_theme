<?php
/**
 * Displays the featured image
 */

if ( has_post_thumbnail() ) { ?>
	<div class="post-thumbnail">

		<?php if ( ! is_single() ) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
		<?php else : ?>
			<?php the_post_thumbnail(); ?>
		<?php endif; ?>

	</div><!-- .post-thumbnail -->
	<?php
}
