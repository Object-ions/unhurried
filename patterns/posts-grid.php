<?php
/**
 * Title: Posts grid
 * Slug: unhurried/posts-grid
 * Categories: query
 * Block Types: core/query
 * Viewport width: 1400
 *
 * @package Unhurried
 * @since 1.0.0
 */

?>
<!-- wp:query {"queryId":1,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"className":"unhurried-cards is-scatter","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:group {"className":"unhurried-reveal","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group unhurried-reveal">
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5","className":"unhurried-mono"} /-->
			<!-- wp:post-date /-->
			<!-- wp:post-title {"level":2,"isLink":true,"fontSize":"large"} /-->
			<!-- wp:post-excerpt {"excerptLength":22,"textColor":"contrast-2","fontSize":"small"} /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->
	<!-- wp:query-no-results -->
		<!-- wp:paragraph {"fontSize":"large"} -->
		<p class="has-large-font-size"><?php esc_html_e( 'Nothing here yet. Try a search instead.', 'unhurried' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:search {"label":"","showLabel":false,"buttonText":"Search"} /-->
	<!-- /wp:query-no-results -->
	<!-- wp:query-pagination {"paginationArrow":"arrow","style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
