<?php
/**
 * Title: CTA · ¿Tienes consultas o iniciativas sobre tu sector?
 * Slug: nasca/cta-consultas
 * Categories: nasca-cta
 */
$img = esc_url( get_template_directory_uri() . '/assets/images/bg-valle.jpg' );
?>
<!-- wp:cover {"url":"<?php echo $img; ?>","dimRatio":80,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":420,"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:custom|gutter","right":"var:custom|gutter"}}},"layout":{"type":"constrained","contentSize":"2400px"}} -->
<div class="wp-block-cover" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--custom--gutter);min-height:420px"><img class="wp-block-cover__image-background" alt="" src="<?php echo $img; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:group {"className":"nasca-cta","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center","flexWrap":"wrap"}} -->
	<div class="wp-block-group nasca-cta">
		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":2,"className":"nasca-max-24","textColor":"base","fontSize":"xx-large"} --><h2 class="wp-block-heading nasca-max-24 has-base-color has-text-color has-xx-large-font-size">¿Tienes consultas o iniciativas sobre tu sector?</h2><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"nasca-max-50","textColor":"text-muted-dark","fontSize":"large","style":{"spacing":{"margin":{"top":"1.5rem"}}}} --><p class="nasca-max-50 has-text-muted-dark-color has-text-color has-large-font-size" style="margin-top:1.5rem">Escríbenos directamente y mantengamos un diálogo abierto para el desarrollo de Intag.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-arrow"} --><div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/transparencia/#pqr">Canal Comunitario</a></div><!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
