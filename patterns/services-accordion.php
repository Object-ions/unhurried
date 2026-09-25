<?php
/**
 * Title: Services on image, accordion
 * Slug: unhurried/services-accordion
 * Categories: featured, services
 * Keywords: services, treatments, menu, accordion, cover
 * Viewport width: 1400
 * Description: A full-bleed monochrome image with a headline and a frosted-glass accordion of services.
 *
 * @package Unhurried
 * @since 1.0.0
 */

$unhurried_services = array(
	array( __( 'Signature massage', 'unhurried' ), __( 'Ninety minutes, warm oil and a pace set entirely by you.', 'unhurried' ) ),
	array( __( 'First visit', 'unhurried' ), __( 'An easy first visit to talk through what you would like from us.', 'unhurried' ) ),
	array( __( 'Hot stone ritual', 'unhurried' ), __( 'Warm stones and slow pressure to loosen a long week.', 'unhurried' ) ),
	array( __( 'Ritual for two', 'unhurried' ), __( 'A shared room and two therapists, for you and someone you like.', 'unhurried' ) ),
);
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/drape.webp' ) ); ?>","dimRatio":50,"overlayColor":"contrast","minHeight":860,"minHeightUnit":"px","isDark":true,"metadata":{"name":"<?php echo esc_attr_x( 'Services', 'Pattern block name', 'unhurried' ); ?>"},"align":"full","className":"unhurried-mono","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1360px"}} -->
<div class="wp-block-cover alignfull is-dark unhurried-mono" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);min-height:860px"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/drape.webp' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"base"} -->
			<p class="is-style-eyebrow has-base-color has-text-color"><?php esc_html_e( 'Rituals', 'unhurried' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"textColor":"base","fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-base-color has-text-color has-xx-large-font-size"><?php echo wp_kses( __( 'Rituals for<br>the <em>whole</em> week', 'unhurried' ), array( 'em' => array(), 'br' => array() ) ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:group {"className":"is-style-glass unhurried-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"0"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-glass unhurried-reveal" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60)">
				<?php foreach ( $unhurried_services as $unhurried_i => $unhurried_service ) : ?>
				<!-- wp:details {"showContent":<?php echo 0 === $unhurried_i ? 'true' : 'false'; ?>} -->
				<details class="wp-block-details"<?php echo 0 === $unhurried_i ? ' open' : ''; ?>><summary><?php echo esc_html( $unhurried_service[0] ); ?></summary>
					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"1rem"}}}} -->
					<p style="margin-top:1rem"><?php echo esc_html( $unhurried_service[1] ); ?></p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->
				<?php endforeach; ?>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div></div>
<!-- /wp:cover -->
