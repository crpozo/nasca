<?php
/**
 * Title: 03b · Conoce Nasca (sobre imagen)
 * Slug: nasca/conoce-nasca
 * Categories: nasca-home, nasca-cta
 * Description: Bloque sobre fotografía con título en color acento, texto y botón al equipo.
 */
$img = esc_url( get_template_directory_uri() . '/assets/images/bg-mist.jpg' );
?>
<!-- wp:cover {"url":"<?php echo $img; ?>","dimRatio":40,"overlayColor":"contrast-2","isUserOverlayColor":true,"minHeight":460,"contentPosition":"center left","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:custom|gutter","right":"var:custom|gutter"}}},"layout":{"type":"constrained","contentSize":"2400px","justifyContent":"left"}} -->
<div class="wp-block-cover has-custom-content-position is-position-center-left" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--custom--gutter);min-height:460px"><img class="wp-block-cover__image-background" alt="" src="<?php echo $img; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-2-background-color has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:heading {"level":2,"textColor":"accent","style":{"typography":{"fontSize":"3rem"}}} -->
	<h2 class="wp-block-heading has-accent-color has-text-color" style="font-size:3rem">Conoce Nasca</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"className":"nasca-max-50","textColor":"base","fontSize":"large","style":{"spacing":{"margin":{"top":"1.5rem"}},"typography":{"fontWeight":"300"}}} -->
	<p class="nasca-max-50 has-base-color has-text-color has-large-font-size" style="margin-top:1.5rem;font-weight:300">Contamos con rigor técnico de ingeniería ecuatoriana con presencia en territorio. Nuestra cultura y equipo aseguran una gestión responsable con las necesidades de nuestras comunidades.</p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2rem"}}}} -->
	<div class="wp-block-buttons" style="margin-top:2rem">
		<!-- wp:button {"className":"is-style-arrow"} -->
		<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/proyecto/#somos">Conoce a nuestro equipo</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div></div>
<!-- /wp:cover -->
