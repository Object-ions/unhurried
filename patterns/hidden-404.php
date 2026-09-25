<?php
/**
 * Title: Page not found
 * Slug: unhurried/hidden-404
 * Inserter: no
 *
 * @package Unhurried
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"1100px","justifyContent":"left"}} -->
<div class="wp-block-group">
	<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
	<p class="is-style-eyebrow"><?php esc_html_e( 'Error 404', 'unhurried' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"level":1,"fontSize":"huge"} -->
	<h1 class="wp-block-heading has-huge-font-size"><?php echo wp_kses( __( 'Nothing <em>here,</em> yet.', 'unhurried' ), array( 'em' => array() ) ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"fontSize":"large","textColor":"contrast-2"} -->
	<p class="has-contrast-2-color has-text-color has-large-font-size"><?php esc_html_e( 'The page you were looking for has moved or never existed. Try a search.', 'unhurried' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:pattern {"slug":"unhurried/hidden-search"} /-->
</div>
<!-- /wp:group -->
