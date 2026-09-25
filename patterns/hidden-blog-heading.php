<?php
/**
 * Title: Blog heading
 * Slug: unhurried/hidden-blog-heading
 * Inserter: no
 *
 * @package Unhurried
 * @author  Switch Case Studio
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"1100px","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
	<p class="is-style-eyebrow"><?php esc_html_e( 'Stories', 'unhurried' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"level":1,"className":"unhurried-reveal","fontSize":"huge"} -->
	<h1 class="wp-block-heading unhurried-reveal has-huge-font-size"><?php echo wp_kses( __( 'Notes on <em>craft</em>', 'unhurried' ), array( 'em' => array() ) ); ?></h1>
	<!-- /wp:heading -->
</div>
<!-- /wp:group -->
