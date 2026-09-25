<?php
/**
 * Title: Product grid
 * Slug: unhurried/hidden-product-grid
 * Inserter: no
 *
 * @package Unhurried
 * @since 1.1.0
 */

?>
<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"woocommerceAttributes":[],"woocommerceStockStatus":["instock","outofstock","onbackorder"],"taxQuery":{},"isProductCollectionBlock":true,"perPage":12,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":true},"tagName":"div","dimensions":{"widthType":"fill","fixedWidth":""},"displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"convertedFromProducts":false,"queryContextIncludes":["collection"],"className":"unhurried-products"} -->
<div class="wp-block-woocommerce-product-collection unhurried-products">
	<!-- wp:woocommerce/product-template -->
		<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"aspectRatio":"4/5","scale":"cover"} -->
			<!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true,"align":"right"} /-->
		<!-- /wp:woocommerce/product-image -->
		<!-- wp:post-title {"level":2,"isLink":true,"fontSize":"large","style":{"spacing":{"margin":{"top":"1rem","bottom":"0.25rem"}}},"__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->
		<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"fontSize":"small","style":{"spacing":{"margin":{"bottom":"1rem"}}}} /-->
		<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"fontSize":"small","className":"is-style-hairline"} /-->
	<!-- /wp:woocommerce/product-template -->
	<!-- wp:query-pagination {"paginationArrow":"arrow","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
	<!-- wp:woocommerce/product-collection-no-results -->
		<!-- wp:paragraph {"fontSize":"large"} -->
		<p class="has-large-font-size"><?php esc_html_e( 'Nothing on the shelf here yet.', 'unhurried' ); ?></p>
		<!-- /wp:paragraph -->
	<!-- /wp:woocommerce/product-collection-no-results -->
</div>
<!-- /wp:woocommerce/product-collection -->
