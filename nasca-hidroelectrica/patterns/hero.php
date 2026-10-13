<?php
/**
 * Title: Hero — Energía en armonía
 * Slug: nasca/hero
 * Categories: nasca-home, nasca-sections
 * Description: Portada a pantalla completa con imagen de fondo, etiqueta, título display, texto y dos botones.
 * Keywords: hero, portada, inicio
 */
$img = esc_url( get_template_directory_uri() . '/assets/images/bg-hero.jpg' );
?>
<!-- wp:cover {"url":"<?php echo $img; ?>","dimRatio":30,"overlayColor":"contrast-3","isUserOverlayColor":true,"minHeight":88,"minHeightUnit":"vh","contentPosition":"center left","className":"is-style-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:custom|gutter","right":"var:custom|gutter"}}},"layout":{"type":"constrained","contentSize":"2400px","justifyContent":"left"}} -->
<div class="wp-block-cover has-custom-content-position is-position-center-left is-style-hero" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--custom--gutter);min-height:88vh"><img class="wp-block-cover__image-background" alt="" src="<?php echo $img; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-3-background-color has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container">

	<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent"} -->
	<p class="is-style-eyebrow has-accent-color has-text-color">Central Hidroeléctrica · Valle de Intag, Ecuador</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1,"className":"nasca-hero-title","textColor":"base","style":{"spacing":{"margin":{"top":"1.5rem"}},"typography":{"fontWeight":"300"}}} -->
	<h1 class="wp-block-heading nasca-hero-title has-base-color has-text-color" style="margin-top:1.5rem;font-weight:300">Energía<br>en armonía.</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"className":"nasca-max-50","textColor":"base","fontSize":"large","style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontWeight":"400"}}} -->
	<p class="nasca-max-50 has-base-color has-text-color has-large-font-size" style="margin-top:2rem;font-weight:400">Transformamos de forma eficiente y consciente la fuerza del agua en energía renovable, impulsando la sostenibilidad real con nuestras comunidades y el fortalecimiento del Ecuador.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2.5rem"},"blockGap":"1rem"}}} -->
	<div class="wp-block-buttons" style="margin-top:2.5rem">
		<!-- wp:button {"className":"is-style-arrow"} -->
		<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/proyecto/">Explora el Proyecto</a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-arrow-ghost","textColor":"base"} -->
		<div class="wp-block-button is-style-arrow-ghost"><a class="wp-block-button__link has-base-color has-text-color wp-element-button" href="/sostenibilidad-real/">Sostenibilidad Real</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

	<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"text-muted-dark","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}},"typography":{"fontWeight":"400"}}} -->
	<p class="is-style-eyebrow has-text-muted-dark-color has-text-color" style="margin-top:var(--wp--preset--spacing--60);font-weight:400">Valle de Intag, Ecuador</p>
	<!-- /wp:paragraph -->

</div></div>
<!-- /wp:cover -->
