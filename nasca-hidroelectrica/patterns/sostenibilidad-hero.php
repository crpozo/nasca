<?php
/**
 * Title: Sostenibilidad · Hero — Energía en Armonía con el Entorno
 * Slug: nasca/sostenibilidad-hero
 * Categories: nasca-sections
 */
$img = esc_url( get_template_directory_uri() . '/assets/images/bg-sost-hero.jpg' );
?>
<!-- wp:cover {"url":"<?php echo $img; ?>","dimRatio":50,"overlayColor":"contrast-3","isUserOverlayColor":true,"minHeight":80,"minHeightUnit":"vh","contentPosition":"center left","className":"is-style-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50","left":"var:custom|gutter","right":"var:custom|gutter"}}},"layout":{"type":"constrained","contentSize":"2400px","justifyContent":"left"}} -->
<div class="wp-block-cover has-custom-content-position is-position-center-left is-style-hero" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--custom--gutter);min-height:80vh"><img class="wp-block-cover__image-background" alt="" src="<?php echo $img; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-3-background-color has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent"} --><p class="is-style-eyebrow has-accent-color has-text-color">Sostenibilidad Real</p><!-- /wp:paragraph -->
	<!-- wp:heading {"level":1,"textColor":"base","style":{"spacing":{"margin":{"top":"1.5rem"}},"typography":{"fontWeight":"300"}}} --><h1 class="wp-block-heading has-base-color has-text-color" style="margin-top:1.5rem;font-weight:300">Energía en Armonía<br>con el Entorno.</h1><!-- /wp:heading -->
</div></div>
<!-- /wp:cover -->
