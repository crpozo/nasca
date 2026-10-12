<?php
/**
 * Title: Proyecto · Hero — Innovación y Energía en Armonía
 * Slug: nasca/proyecto-hero
 * Categories: nasca-sections
 * Description: Portada de la página Proyecto y Somos.
 */
$img = esc_url( get_template_directory_uri() . '/assets/images/bg-hero.jpg' );
?>
<!-- wp:cover {"url":"<?php echo $img; ?>","dimRatio":50,"overlayColor":"contrast-3","isUserOverlayColor":true,"minHeight":80,"minHeightUnit":"vh","contentPosition":"center left","className":"is-style-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50","left":"var:custom|gutter","right":"var:custom|gutter"}}},"layout":{"type":"constrained","contentSize":"2400px","justifyContent":"left"}} -->
<div class="wp-block-cover is-style-hero has-custom-content-position is-position-center-left" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--custom--gutter);min-height:80vh"><img class="wp-block-cover__image-background" alt="Vista aérea del Valle de Intag" src="<?php echo $img; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-3-background-color has-background-dim-50 has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent"} --><p class="is-style-eyebrow has-accent-color has-text-color">Central hidroeléctrica sin embalse</p><!-- /wp:paragraph -->
	<!-- wp:heading {"level":1,"className":"nasca-max-14","textColor":"base","style":{"spacing":{"margin":{"top":"1.5rem"}}}} --><h1 class="wp-block-heading nasca-max-14 has-base-color has-text-color" style="margin-top:1.5rem">Innovación y Energía en Armonía</h1><!-- /wp:heading -->
	<!-- wp:paragraph {"className":"nasca-max-50","textColor":"base","fontSize":"large","style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontWeight":"300"}}} --><p class="nasca-max-50 has-base-color has-text-color has-large-font-size" style="margin-top:2rem;font-weight:300">Generación de energía renovable que aprovecha el desnivel natural del agua para impulsar el crecimiento del país, cuidando el medio ambiente y promoviendo el desarrollo local.</p><!-- /wp:paragraph -->
	<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"text-muted-dark","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}},"typography":{"fontWeight":"400"}}} --><p class="is-style-eyebrow has-text-muted-dark-color has-text-color" style="margin-top:var(--wp--preset--spacing--60);font-weight:400">Valle de Intag, Ecuador</p><!-- /wp:paragraph -->
</div></div>
<!-- /wp:cover -->
