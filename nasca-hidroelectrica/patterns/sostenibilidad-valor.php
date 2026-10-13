<?php
/**
 * Title: Sostenibilidad · Nuestro valor de Sostenibilidad Real (cita + foto)
 * Slug: nasca/sostenibilidad-valor
 * Categories: nasca-sections
 */
$img = esc_url( get_template_directory_uri() . '/assets/images/foto-valle-vertical.jpg' );
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:custom|gutter","right":"var:custom|gutter"}}},"backgroundColor":"base-2","layout":{"type":"constrained","contentSize":"2400px"}} -->
<section class="wp-block-group has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--custom--gutter)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%">
			<!-- wp:heading {"level":2,"fontSize":"xx-large"} --><h2 class="wp-block-heading has-xx-large-font-size">Nuestro valor de<br>Sostenibilidad Real</h2><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"nasca-quote-dark","style":{"spacing":{"margin":{"top":"2.5rem"}}}} --><p class="nasca-quote-dark" style="margin-top:2.5rem">"Trabajamos bajo los estándares internacionales más rigurosos a favor del medio ambiente y de nuestras comunidades, integrando la gestión socioambiental como el eje central de nuestra operación."</p><!-- /wp:paragraph -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2.5rem"}}}} -->
			<div class="wp-block-buttons" style="margin-top:2.5rem">
				<!-- wp:button {"className":"is-style-arrow","backgroundColor":"primary","textColor":"white"} --><div class="wp-block-button is-style-arrow"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" href="/proyecto/#somos">Conoce más de Nasca</a></div><!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nasca-photo"} --><figure class="wp-block-image size-full nasca-photo"><img src="<?php echo $img; ?>" alt="Valle de Intag"/></figure><!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
