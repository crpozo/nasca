<?php
/**
 * Title: Proyecto · 04 Somos Nasca: Propósito, Misión, Visión y Valores
 * Slug: nasca/proyecto-somos
 * Categories: nasca-sections
 * Description: Fondo fotográfico con cita destacada, misión y visión en dos columnas y cuatro valores numerados.
 */
$img = esc_url( get_template_directory_uri() . '/assets/images/bg-hero.jpg' );
?>
<!-- wp:cover {"url":"<?php echo $img; ?>","dimRatio":55,"overlayColor":"contrast-3","isUserOverlayColor":true,"minHeight":800,"contentPosition":"center left","className":"nasca-somos","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:custom|gutter","right":"var:custom|gutter"}}},"layout":{"type":"constrained","contentSize":"2400px","justifyContent":"left"}} -->
<div id="somos" class="wp-block-cover nasca-somos has-custom-content-position is-position-center-left" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--custom--gutter);min-height:800px"><img class="wp-block-cover__image-background" alt="" src="<?php echo $img; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-3-background-color has-background-dim-55 has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent"} --><p class="is-style-eyebrow has-accent-color has-text-color">04 / Somos Nasca</p><!-- /wp:paragraph -->
	<!-- wp:heading {"level":2,"textColor":"base","fontSize":"xx-large","style":{"spacing":{"margin":{"top":"1.5rem"}}}} --><h2 class="wp-block-heading has-base-color has-text-color has-xx-large-font-size" style="margin-top:1.5rem">Somos Nasca:<br>Propósito y Filosofía</h2><!-- /wp:heading -->
	<!-- wp:paragraph {"textColor":"base","style":{"spacing":{"margin":{"top":"1rem"}}}} --><p class="has-base-color has-text-color" style="margin-top:1rem">Ingeniería ecuatoriana comprometida con el desarrollo responsable del país.</p><!-- /wp:paragraph -->

	<!-- wp:group {"className":"nasca-glass","style":{"spacing":{"padding":{"top":"2rem","bottom":"2.5rem","left":"2.75rem","right":"2.75rem"},"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group nasca-glass" style="margin-top:var(--wp--preset--spacing--40);padding-top:2rem;padding-right:2.75rem;padding-bottom:2.5rem;padding-left:2.75rem">
		<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent"} --><p class="is-style-eyebrow has-accent-color has-text-color"></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"nasca-quote-sm","textColor":"base"} --><p class="nasca-quote-sm has-base-color has-text-color">"Nasca representa la evolución de la generación renovable: la aplicación de ingeniería moderna para transformar la fuerza del agua en energía limpia, operando con rigor técnico y respeto permanente por el entorno natural y las comunidades."</p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"className":"nasca-mision","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns nasca-mision" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent"} --><p class="is-style-eyebrow has-accent-color has-text-color">Nuestra misión</p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"base","style":{"spacing":{"margin":{"top":"1rem"}}}} --><p class="has-base-color has-text-color" style="margin-top:1rem">Generar energía hidroeléctrica limpia, eficiente y renovable mediante la operación responsable de nuestra central de pasada. Trabajamos con excelencia técnica y los más altos estándares internacionales para el progreso sostenible local y el fortalecimiento del Ecuador.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"className":"nasca-divider-left-light"} -->
		<div class="wp-block-column nasca-divider-left-light">
			<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent"} --><p class="is-style-eyebrow has-accent-color has-text-color">Nuestra visión</p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"base","style":{"spacing":{"margin":{"top":"1rem"}}}} --><p class="has-base-color has-text-color" style="margin-top:1rem">Ser el generador privado de energía hidroeléctrica de referencia en el Ecuador por su excelencia operativa, innovación constante y responsabilidad socioambiental honesta y perdurable.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:heading {"level":2,"textColor":"base","fontSize":"xx-large","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} --><h2 class="wp-block-heading has-base-color has-text-color has-xx-large-font-size" style="margin-top:var(--wp--preset--spacing--60)">Nuestros Valores</h2><!-- /wp:heading -->
	<!-- wp:columns {"className":"nasca-valores","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":{"left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns nasca-valores" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"className":"nasca-valor-num","textColor":"accent"} --><h3 class="wp-block-heading nasca-valor-num has-accent-color has-text-color">01</h3><!-- /wp:heading -->
			<!-- wp:heading {"level":4,"textColor":"base","fontSize":"large"} --><h4 class="wp-block-heading has-base-color has-text-color has-large-font-size">Innovación y Eficiencia</h4><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"base","fontSize":"small"} --><p class="has-base-color has-text-color has-small-font-size">Buscamos la optimización constante en la operación y en la resolución de retos, aplicando ingeniería moderna y procesos eficientes para asegurar una generación renovable y confiable.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"className":"nasca-valor-num","textColor":"accent"} --><h3 class="wp-block-heading nasca-valor-num has-accent-color has-text-color">02</h3><!-- /wp:heading -->
			<!-- wp:heading {"level":4,"textColor":"base","fontSize":"large"} --><h4 class="wp-block-heading has-base-color has-text-color has-large-font-size">Sostenibilidad Real</h4><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"base","fontSize":"small"} --><p class="has-base-color has-text-color has-small-font-size">Trabajamos bajo los estándares internacionales más rigurosos a favor del medio ambiente y de nuestras comunidades, integrando la gestión socioambiental como el eje central de nuestra operación.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"className":"nasca-valor-num","textColor":"accent"} --><h3 class="wp-block-heading nasca-valor-num has-accent-color has-text-color">03</h3><!-- /wp:heading -->
			<!-- wp:heading {"level":4,"textColor":"base","fontSize":"large"} --><h4 class="wp-block-heading has-base-color has-text-color has-large-font-size">Transparencia y Confianza</h4><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"base","fontSize":"small"} --><p class="has-base-color has-text-color has-small-font-size">Mantenemos una relación abierta, honesta y accesible con nuestras comunidades, autoridades y aliados, actuando siempre bajo normas éticas y marcos regulatorios claros.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"className":"nasca-valor-num","textColor":"accent"} --><h3 class="wp-block-heading nasca-valor-num has-accent-color has-text-color">04</h3><!-- /wp:heading -->
			<!-- wp:heading {"level":4,"textColor":"base","fontSize":"large"} --><h4 class="wp-block-heading has-base-color has-text-color has-large-font-size">Compromiso con el Desarrollo</h4><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"base","fontSize":"small"} --><p class="has-base-color has-text-color has-small-font-size">Impulsamos la energía como el motor fundamental del progreso económico, social y productivo, tanto en el territorio local como a nivel nacional.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div></div>
<!-- /wp:cover -->
