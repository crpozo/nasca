<?php
/**
 * Title: 03 · Cita Somos Nasca (sobre imagen)
 * Slug: nasca/cita
 * Categories: nasca-home, nasca-sections
 * Description: Cita grande del equipo sobre fotografía aérea con etiqueta y firma.
 */
$img = esc_url( get_template_directory_uri() . '/assets/images/bg-hero.jpg' );
?>
<!-- wp:cover {"url":"<?php echo $img; ?>","dimRatio":55,"overlayColor":"contrast-3","isUserOverlayColor":true,"minHeight":600,"contentPosition":"center left","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:custom|gutter","right":"var:custom|gutter"}}},"layout":{"type":"constrained","contentSize":"2400px","justifyContent":"left"}} -->
<div class="wp-block-cover has-custom-content-position is-position-center-left" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--custom--gutter);min-height:600px"><img class="wp-block-cover__image-background" alt="Vista aérea del Valle de Intag" src="<?php echo $img; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-3-background-color has-background-dim-55 has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent"} -->
	<p class="is-style-eyebrow has-accent-color has-text-color">03 / Somos Nasca</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"className":"nasca-quote","style":{"spacing":{"margin":{"top":"1.5rem"}}}} -->
	<p class="nasca-quote" style="margin-top:1.5rem">"Desde el Valle de Intag, transformamos la fuerza del agua en energía renovable con ingeniería de vanguardia para crear sostenibilidad real, moviendo hogares y generando progreso para todo el Ecuador."</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"className":"nasca-cite","style":{"spacing":{"margin":{"top":"2.5rem"}}}} -->
	<p class="nasca-cite" style="margin-top:2.5rem">— Equipo Nasca</p>
	<!-- /wp:paragraph -->
</div></div>
<!-- /wp:cover -->
