<?php
/**
 * Title: Comments
 * Slug: unhurried/comments
 * Inserter: no
 *
 * @package Unhurried
 * @author  Switch Case Studio
 * @since 1.0.0
 */

?>
<!-- wp:comments {"className":"wp-block-comments-query-loop"} -->
<div class="wp-block-comments wp-block-comments-query-loop">
	<!-- wp:comments-title {"level":2,"fontSize":"x-large"} /-->
	<!-- wp:comment-template -->
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"border":{"top":{"color":"var:preset|color|hairline","width":"1px","style":"solid"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--hairline);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:avatar {"size":40,"style":{"border":{"radius":"999px"}}} /-->
				<!-- wp:comment-author-name {"fontSize":"small"} /-->
				<!-- wp:comment-date {"fontSize":"x-small","textColor":"contrast-2"} /-->
			</div>
			<!-- /wp:group -->
			<!-- wp:comment-content /-->
			<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"fontSize":"x-small","layout":{"type":"flex"}} -->
			<div class="wp-block-group has-x-small-font-size">
				<!-- wp:comment-reply-link /-->
				<!-- wp:comment-edit-link /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	<!-- /wp:comment-template -->
	<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:comments-pagination-previous /-->
		<!-- wp:comments-pagination-numbers /-->
		<!-- wp:comments-pagination-next /-->
	<!-- /wp:comments-pagination -->
	<!-- wp:post-comments-form /-->
</div>
<!-- /wp:comments -->
