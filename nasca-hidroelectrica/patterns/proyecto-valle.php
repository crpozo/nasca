<?php
/**
 * Title: Proyecto · ¿Por qué el Valle de Intag? (3 tarjetas sobre imagen)
 * Slug: nasca/proyecto-valle
 * Categories: nasca-sections, nasca-cards
 * Description: Fondo fotográfico con título y tres tarjetas translúcidas con icono.
 */
$img = esc_url( get_template_directory_uri() . '/assets/images/bg-quote.jpg' );
?>
<!-- wp:cover {"url":"<?php echo $img; ?>","dimRatio":30,"overlayColor":"contrast-3","isUserOverlayColor":true,"minHeight":600,"contentPosition":"center left","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:custom|gutter","right":"var:custom|gutter"}}},"layout":{"type":"constrained","contentSize":"2400px","justifyContent":"left"}} -->
<div class="wp-block-cover has-custom-content-position is-position-center-left" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--custom--gutter);min-height:600px"><img class="wp-block-cover__image-background" alt="" src="<?php echo $img; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-3-background-color has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:heading {"level":2,"textColor":"accent","fontSize":"xx-large"} --><h2 class="wp-block-heading has-accent-color has-text-color has-xx-large-font-size">¿Por qué el Valle de Intag?</h2><!-- /wp:heading -->
	<!-- wp:paragraph {"textColor":"base","fontSize":"large","style":{"spacing":{"margin":{"top":"1rem"}},"typography":{"fontWeight":"300"}}} --><p class="has-base-color has-text-color has-large-font-size" style="margin-top:1rem;font-weight:300">Condiciones topográficas e hidrológicas excepcionales que permiten alta eficiencia sin afectar el entorno.</p><!-- /wp:paragraph -->
	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":{"left":"var:preset|spacing|20"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"nasca-glass nasca-fill","style":{"spacing":{"padding":{"top":"1.75rem","bottom":"1.75rem","left":"1.75rem","right":"1.75rem"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group nasca-glass nasca-fill" style="padding-top:1.75rem;padding-right:1.75rem;padding-bottom:1.75rem;padding-left:1.75rem">
				<!-- wp:group {"className":"is-style-icon-circle is-small nasca-glass-icon","layout":{"type":"default"}} --><div class="wp-block-group is-style-icon-circle is-small nasca-glass-icon"><!-- wp:html --><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3s6 6.5 6 11a6 6 0 0 1-12 0c0-4.5 6-11 6-11z"/></svg><!-- /wp:html --></div><!-- /wp:group -->
				<!-- wp:paragraph {"className":"nasca-kicker nasca-white","style":{"spacing":{"margin":{"top":"1.5rem"}}}} --><p class="nasca-kicker nasca-white" style="margin-top:1.5rem">Ubicación estratégica</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"nasca-white","fontSize":"small","style":{"typography":{"fontWeight":"700"}}} --><p class="nasca-white has-small-font-size" style="font-weight:700">Flujo Natural Renovable</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"nasca-white","fontSize":"small","style":{"spacing":{"margin":{"top":"0.75rem"}}}} --><p class="nasca-white has-small-font-size" style="margin-top:0.75rem">Una cuenca que permite el paso constante del agua sin represar el río, asegurando que las actividades agrícolas, el riego y la vida de las comunidades sigan su curso natural.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"nasca-glass nasca-fill","style":{"spacing":{"padding":{"top":"1.75rem","bottom":"1.75rem","left":"1.75rem","right":"1.75rem"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group nasca-glass nasca-fill" style="padding-top:1.75rem;padding-right:1.75rem;padding-bottom:1.75rem;padding-left:1.75rem">
				<!-- wp:group {"className":"is-style-icon-circle is-small nasca-glass-icon","layout":{"type":"default"}} --><div class="wp-block-group is-style-icon-circle is-small nasca-glass-icon"><!-- wp:html --><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2 4 14h7l-1 8 9-12h-7z"/></svg><!-- /wp:html --></div><!-- /wp:group -->
				<!-- wp:paragraph {"className":"nasca-kicker nasca-white","style":{"spacing":{"margin":{"top":"1.5rem"}}}} --><p class="nasca-kicker nasca-white" style="margin-top:1.5rem">Eficiencia renovable</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"nasca-white","fontSize":"small","style":{"typography":{"fontWeight":"700"}}} --><p class="nasca-white has-small-font-size" style="font-weight:700">Desnivel Natural de 200 m</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"nasca-white","fontSize":"small","style":{"spacing":{"margin":{"top":"0.75rem"}}}} --><p class="nasca-white has-small-font-size" style="margin-top:0.75rem">Aprovechamiento de la pendiente natural de la montaña con un túnel subterráneo de 5.8 km, generando 48.5 MW renovables.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"nasca-glass nasca-fill","style":{"spacing":{"padding":{"top":"1.75rem","bottom":"1.75rem","left":"1.75rem","right":"1.75rem"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group nasca-glass nasca-fill" style="padding-top:1.75rem;padding-right:1.75rem;padding-bottom:1.75rem;padding-left:1.75rem">
				<!-- wp:group {"className":"is-style-icon-circle is-small nasca-glass-icon","layout":{"type":"default"}} --><div class="wp-block-group is-style-icon-circle is-small nasca-glass-icon"><!-- wp:html --><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 3v5M15 3v5M7 8h10v3a5 5 0 0 1-10 0zM12 16v5"/></svg><!-- /wp:html --></div><!-- /wp:group -->
				<!-- wp:paragraph {"className":"nasca-kicker nasca-white","style":{"spacing":{"margin":{"top":"1.5rem"}}}} --><p class="nasca-kicker nasca-white" style="margin-top:1.5rem">Conexión estratégica</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"nasca-white","fontSize":"small","style":{"typography":{"fontWeight":"700"}}} --><p class="nasca-white has-small-font-size" style="font-weight:700">Subestación Manduriacu</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"nasca-white","fontSize":"small","style":{"spacing":{"margin":{"top":"0.75rem"}}}} --><p class="nasca-white has-small-font-size" style="margin-top:0.75rem">Optimizamos la capacidad instalada disponible de la subestación de Manduriacu, para inyectar energía a la red nacional sin necesidad de infraestructura adicional en la zona.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div></div>
<!-- /wp:cover -->
