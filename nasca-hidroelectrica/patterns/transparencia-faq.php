<?php
/**
 * Title: Transparencia · 04 Preguntas Frecuentes (acordeón)
 * Slug: nasca/transparencia-faq
 * Categories: nasca-sections
 * Description: Franja fotográfica, título y preguntas frecuentes con el bloque nativo Detalles (acordeón).
 */
$img = esc_url( get_template_directory_uri() . '/assets/images/bg-mist.jpg' );
?>
<!-- wp:cover {"url":"<?php echo $img; ?>","dimRatio":10,"minHeight":220,"isUserOverlayColor":true,"overlayColor":"contrast-3","className":"nasca-band","layout":{"type":"constrained"}} -->
<div class="wp-block-cover nasca-band" style="min-height:220px"><img class="wp-block-cover__image-background" alt="" src="<?php echo $img; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-3-background-color has-background-dim-10 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph --><p></p><!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:custom|gutter","right":"var:custom|gutter"}}},"backgroundColor":"base-2","layout":{"type":"constrained","contentSize":"2400px"}} -->
<section id="faq" class="wp-block-group has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--custom--gutter)">
	<!-- wp:heading {"level":2,"className":"nasca-max-24","fontSize":"xx-large","style":{"spacing":{"margin":{"top":"1rem"}}}} --><h2 class="wp-block-heading nasca-max-24 has-xx-large-font-size" style="margin-top:1rem">Preguntas Frecuentes y Claridad Técnica</h2><!-- /wp:heading -->
	<!-- wp:paragraph {"textColor":"text-muted","style":{"spacing":{"margin":{"top":"1rem"}}}} --><p class="has-text-muted-color has-text-color" style="margin-top:1rem">Información transparente sobre la naturaleza, límites y compromisos del Proyecto Nasca.</p><!-- /wp:paragraph -->

	<!-- wp:group {"className":"nasca-faq","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":"0"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group nasca-faq" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:details {"showContent":true} -->
		<details class="wp-block-details" open><summary><span class="nasca-faq-num">01</span> ¿Tiene el Proyecto Nasca alguna relación con actividades mineras?</summary>
			<!-- wp:paragraph {"textColor":"text-muted"} --><p class="has-text-muted-color has-text-color">No. Nasca es un proyecto hidroeléctrico 100% independiente de cualquier interés o concesión minera. Su único fin es generar energía renovable para el país. No extrae minerales ni suministra recursos a actividades extractivas.</p><!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->
		<!-- wp:details -->
		<details class="wp-block-details"><summary><span class="nasca-faq-num">02</span> ¿Cómo funciona una Central de Pasada y por qué no afecta el río?</summary>
			<!-- wp:paragraph {"textColor":"text-muted"} --><p class="has-text-muted-color has-text-color">Una central de pasada toma una fracción del caudal mediante una obra lateral, sin represar el río, la conduce por un túnel subterráneo hasta la casa de máquinas y devuelve el 100% del agua a su cauce natural, respetando el caudal ecológico.</p><!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->
		<!-- wp:details -->
		<details class="wp-block-details"><summary><span class="nasca-faq-num">03</span> ¿Cómo se coordinan las contrataciones y compras en el territorio?</summary>
			<!-- wp:paragraph {"textColor":"text-muted"} --><p class="has-text-muted-color has-text-color">A través de los registros de Hojas de Vida y de Bienes y Servicios de esta página. La incorporación es gradual según las fases del proyecto y prioriza la mano de obra y los emprendimientos de las 14 comunidades del AID.</p><!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->
		<!-- wp:details -->
		<details class="wp-block-details"><summary><span class="nasca-faq-num">04</span> ¿Cómo se hace seguimiento a una solicitud o reclamo ingresado?</summary>
			<!-- wp:paragraph {"textColor":"text-muted"} --><p class="has-text-muted-color has-text-color">Cada solicitud radicada en el Sistema de Atención Ciudadana (PQR) recibe un número de caso y es atendida por el equipo de relacionamiento comunitario, con respuesta por el canal de contacto indicado o en las sedes de atención en territorio.</p><!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
