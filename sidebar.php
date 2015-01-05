<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package foodnowyes
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php $share_attributes = array($attributes = array(icons   => 'facebook, twitter, pinterest,
	                                                                google-plus, tumblr, reddit,
	                                                                stumbleupon, envelope',
	                                                    shape   => 'square',
	                                                    inverse => 'yes',
	                                                    size  => '3x',
	                                                    loadfa  => 'no',
														));
	echo wpfai_social($share_attributes); ?>
</div><!-- #secondary -->
