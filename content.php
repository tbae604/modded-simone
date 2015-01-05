<?php
/**
 * @package foodnowyes
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="index-box">
		<?php
		if (has_post_thumbnail()) {
			echo '<div class="small-index-thumbnail clear">';
			echo '<a href="' . get_permalink() . '" title="' . __('Read ', 'foodnowyes') . get_the_title() . '" rel="bookmark">';
			echo the_post_thumbnail('index-thumb');
			echo '</a>';
			echo '</div>';
		}
		?>
		<header class="entry-header">
			<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

			<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php foodnowyes_posted_on(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->

		<!-- At this time, not displaying php foodnowyes_entry_footer() in entry-footer -->
		<!-- Instead, entry-footer used as continue reading button -->
		<footer class="entry-footer continue-reading">
			<?php echo '<a href="' . get_permalink() . '" title="' . __('Continue Reading ', 'foodnowyes') . get_the_title() . '" rel="bookmark">Continue Reading<i class="fa fa-arrow-circle-o-right"></i></a>'; ?>
		</footer><!-- .entry-footer -->

	</div>
</article><!-- #post-## -->