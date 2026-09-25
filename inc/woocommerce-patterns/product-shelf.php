<?php
/**
 * Product shelf pattern: four products under a centred heading.
 * Registered only when WooCommerce is active.
 *
 * @package Unhurried
 * @since 1.1.0
 */

?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_attr_x( 'Shop shelf', 'Pattern block name', 'unhurried' ); ?>"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained","contentSize":"1360px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow"><?php esc_html_e( 'The shop', 'unhurried' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo wp_kses( __( 'For the <em>shelf</em> at home', 'unhurried' ), array( 'em' => array() ) ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-text-link"} -->
			<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/' ) ); ?>"><?php esc_html_e( 'See everything', 'unhurried' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
	<!-- wp:woocommerce/product-collection {"queryId":3,"query":{"woocommerceAttributes":[],"woocommerceStockStatus":["instock","outofstock","onbackorder"],"taxQuery":{},"isProductCollectionBlock":true,"perPage":4,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"queryContextIncludes":["collection"],"className":"unhurried-products unhurried-stagger-products"} -->
	<div class="wp-block-woocommerce-product-collection unhurried-products unhurried-stagger-products">
		<!-- wp:woocommerce/product-template -->
			<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"aspectRatio":"4/5","scale":"cover"} /-->
			<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"medium","style":{"spacing":{"margin":{"top":"1rem","bottom":"0.25rem"}}},"__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->
			<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"fontSize":"small"} /-->
		<!-- /wp:woocommerce/product-template -->
	</div>
	<!-- /wp:woocommerce/product-collection -->
</div>
<!-- /wp:group -->
