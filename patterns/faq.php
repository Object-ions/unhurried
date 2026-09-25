<?php
/**
 * Title: Questions and answers
 * Slug: unhurried/faq
 * Categories: text, featured
 * Keywords: faq, questions, answers, accordion
 * Viewport width: 1400
 * Description: A heading column beside an accordion of questions and answers.
 *
 * @package Unhurried
 * @since 1.0.0
 */

$unhurried_faqs = array(
	array( __( 'What happens at a first visit?', 'unhurried' ), __( 'We talk, we look closely at your skin and we agree on a plan. Nothing is booked or charged until you are sure.', 'unhurried' ) ),
	array( __( 'How far ahead should I book?', 'unhurried' ), __( 'Most weeks we have openings within ten days. Programmes are planned together at your consultation.', 'unhurried' ) ),
	array( __( 'Can I change or cancel?', 'unhurried' ), __( 'Yes. Give us 48 hours and there is no fee.', 'unhurried' ) ),
	array( __( 'Do you sell products?', 'unhurried' ), __( 'A short, carefully chosen range. We only recommend what your plan actually needs.', 'unhurried' ) ),
);
?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_attr_x( 'FAQ', 'Pattern block name', 'unhurried' ); ?>"},"align":"full","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1360px"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"38%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-column" style="flex-basis:38%">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow"><?php esc_html_e( 'Good to know', 'unhurried' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo wp_kses( __( 'Questions, <em>answered</em>', 'unhurried' ), array( 'em' => array() ) ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"62%","style":{"spacing":{"blockGap":"0"}}} -->
		<div class="wp-block-column" style="flex-basis:62%">
			<?php foreach ( $unhurried_faqs as $unhurried_faq ) : ?>
			<!-- wp:details -->
			<details class="wp-block-details"><summary><?php echo esc_html( $unhurried_faq[0] ); ?></summary>
				<!-- wp:paragraph {"textColor":"contrast-2","style":{"spacing":{"margin":{"top":"1rem"}}}} -->
				<p class="has-contrast-2-color has-text-color" style="margin-top:1rem"><?php echo esc_html( $unhurried_faq[1] ); ?></p>
				<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
