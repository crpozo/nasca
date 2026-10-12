<?php
/**
 * Title: CTA · ¿Prefiere una atención presencial o directa?
 * Slug: nasca/cta-atencion
 * Categories: nasca-cta
 * Description: Banda oscura sobre fotografía con pregunta y dos botones (WhatsApp y sedes).
 */
$img = esc_url( get_template_directory_uri() . '/assets/images/bg-stats.jpg' );
?>
<!-- wp:cover {"url":"<?php echo $img; ?>","dimRatio":60,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":220,"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:custom|gutter","right":"var:custom|gutter"}}},"layout":{"type":"constrained","contentSize":"2400px"}} -->
<div class="wp-block-cover" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--custom--gutter);min-height:220px"><img class="wp-block-cover__image-background" alt="" src="<?php echo $img; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:group {"className":"nasca-cta","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center","flexWrap":"wrap"}} -->
	<div class="wp-block-group nasca-cta">
		<!-- wp:heading {"level":2,"className":"nasca-max-24","textColor":"base","fontSize":"x-large"} --><h2 class="wp-block-heading nasca-max-24 has-base-color has-text-color has-x-large-font-size">¿Prefiere una atención presencial o directa?</h2><!-- /wp:heading -->
		<!-- wp:buttons {"style":{"spacing":{"blockGap":"1rem"}}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-arrow"} --><div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="https://wa.me/593000000000" target="_blank" rel="noopener">WhatsApp Comunitario</a></div><!-- /wp:button -->
			<!-- wp:button {"className":"is-style-arrow-ghost","textColor":"base"} --><div class="wp-block-button is-style-arrow-ghost"><a class="wp-block-button__link has-base-color has-text-color wp-element-button" href="/contacto/">Sedes Técnicas en Territorio</a></div><!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
