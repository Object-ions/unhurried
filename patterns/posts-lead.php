<?php
/**
 * Title: Stories, lead and list
 * Slug: unhurried/posts-lead
 * Categories: featured, posts
 * Keywords: blog, journal, posts, featured, latest, magazine
 * Block Types: core/query
 * Viewport width: 1400
 * Description: The newest post as a large feature, followed by the next three in a staggered row.
 *
 * @package Unhurried
 * @since 1.1.0
 */

?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_attr_x( 'Stories', 'Pattern block name', 'unhurried' ); ?>"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|80"}},"layout":{"type":"constrained","contentSize":"1360px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:query {"queryId":4,"query":{"perPage":1,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false,"sticky":""},"className":"unhurried-lead","layout":{"type":"default"}} -->
	<div class="wp-block-query unhurried-lead">
		<!-- wp:post-template {"layout":{"type":"default"}} -->
			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|80"}}}} -->
			<div class="wp-block-columns are-vertically-aligned-center">
				<!-- wp:column {"verticalAlignment":"center","width":"62%","className":"unhurried-mono unhurried-reveal"} -->
				<div class="wp-block-column is-vertically-aligned-center unhurried-mono unhurried-reveal" style="flex-basis:62%">
					<!-- wp:post-featured-image {"isLink":true} /-->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"center","width":"38%","className":"unhurried-reveal","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
				<div class="wp-block-column is-vertically-aligned-center unhurried-reveal" style="flex-basis:38%">
					<!-- wp:post-terms {"term":"category"} /-->
					<!-- wp:post-title {"level":2,"isLink":true,"fontSize":"xx-large"} /-->
					<!-- wp:post-excerpt {"moreText":"<?php echo esc_attr__( 'Read the story', 'unhurried' ); ?>","excerptLength":30,"textColor":"contrast-2"} /-->
					<!-- wp:post-date /-->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
	<!-- wp:query {"queryId":5,"query":{"perPage":3,"pages":1,"offset":1,"postType":"post","order":"desc","orderBy":"date","inherit":false,"sticky":""},"layout":{"type":"default"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"className":"unhurried-cards is-scatter","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"className":"unhurried-reveal","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group unhurried-reveal">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5","className":"unhurried-mono"} /-->
				<!-- wp:post-date /-->
				<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
