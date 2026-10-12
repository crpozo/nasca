<?php
/**
 * Title: 01 · Hidroeléctrica Nasca (cifras + línea de tiempo)
 * Slug: nasca/proyecto
 * Categories: nasca-home, nasca-sections
 * Description: Bloque oscuro con título, cifras sobre imagen, línea de tiempo morada y botón de enlace al proyecto.
 */
$img = esc_url( get_template_directory_uri() . '/assets/images/bg-stats.jpg' );
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"default"}} -->
<section class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50","left":"var:custom|gutter","right":"var:custom|gutter"}}},"layout":{"type":"constrained","contentSize":"1800px"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--custom--gutter)">
		<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent"} -->
		<p class="is-style-eyebrow has-accent-color has-text-color">01 / Ingeniería al servicio del país</p>
		<!-- /wp:paragraph -->
		<!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"margin":{"top":"1rem"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:1rem">
			<!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
			<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%">
				<!-- wp:heading {"level":2,"textColor":"base","fontSize":"display"} -->
				<h2 class="wp-block-heading has-base-color has-text-color has-display-font-size">Hidroeléctrica<br>Nasca</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} -->
			<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%">
				<!-- wp:paragraph {"className":"nasca-max-36","fontSize":"large","style":{"typography":{"fontWeight":"300"}}} -->
				<p class="nasca-max-36 has-large-font-size" style="font-weight:300">Ingeniería de pasada y trayectoria técnica al servicio del país.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:cover {"url":"<?php echo $img; ?>","dimRatio":70,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":520,"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:custom|gutter","right":"var:custom|gutter"}}},"layout":{"type":"constrained","contentSize":"1800px"}} -->
	<div class="wp-block-cover" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--custom--gutter);min-height:520px"><img class="wp-block-cover__image-background" alt="" src="<?php echo $img; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container">
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3,"className":"is-style-stat","textColor":"base"} --><h3 class="wp-block-heading is-style-stat has-base-color has-text-color">48.5 MW</h3><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"is-style-stat-label","textColor":"accent"} --><p class="is-style-stat-label has-accent-color has-text-color">Energía limpia generada</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3,"className":"is-style-stat","textColor":"base"} --><h3 class="wp-block-heading is-style-stat has-base-color has-text-color">0</h3><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"is-style-stat-label","textColor":"accent"} --><p class="is-style-stat-label has-accent-color has-text-color">Embalses</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3,"className":"is-style-stat","textColor":"base"} --><h3 class="wp-block-heading is-style-stat has-base-color has-text-color">14</h3><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"is-style-stat-label nasca-max-24","textColor":"accent"} --><p class="is-style-stat-label nasca-max-24 has-accent-color has-text-color">Comunidades en el área de influencia directa</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div></div>
	<!-- /wp:cover -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:custom|gutter","right":"var:custom|gutter"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained","contentSize":"1800px"}} -->
	<div class="wp-block-group has-base-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--custom--gutter)">
		<!-- wp:columns {"className":"is-style-timeline"} -->
		<div class="wp-block-columns is-style-timeline">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:paragraph {"className":"nasca-timeline-date"} --><p class="nasca-timeline-date">Feb 2024</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"nasca-max-30"} --><p class="nasca-max-30">Aprobación técnica de conexión a la Subestación Manduriacu.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:paragraph {"className":"nasca-timeline-date"} --><p class="nasca-timeline-date">Jun 2026</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"nasca-max-30"} --><p class="nasca-max-30">Consulta Ambiental participativa con respaldo mayoritario del territorio.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"className":"is-current"} -->
			<div class="wp-block-column is-current">
				<!-- wp:paragraph {"className":"nasca-timeline-date"} --><p class="nasca-timeline-date">Jul 2026</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"nasca-max-30"} --><p class="nasca-max-30">Emisión oficial de la Licencia Ambiental.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"className":"is-future"} -->
			<div class="wp-block-column is-future">
				<!-- wp:paragraph {"className":"nasca-timeline-date has-text-color","textColor":"base"} --><p class="nasca-timeline-date has-base-color has-text-color">Próxima etapa</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"nasca-max-30"} --><p class="nasca-max-30">Construcción y Operación Responsable.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:cover {"url":"<?php echo $img; ?>","dimRatio":50,"overlayColor":"contrast-3","isUserOverlayColor":true,"minHeight":160,"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-cover" style="padding-top:2rem;padding-bottom:2rem;min-height:160px"><img class="wp-block-cover__image-background" alt="" src="<?php echo $img; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-3-background-color has-background-dim-50 has-background-dim"></span><div class="wp-block-cover__inner-container">
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-arrow-ghost","textColor":"base"} -->
			<div class="wp-block-button is-style-arrow-ghost"><a class="wp-block-button__link has-base-color has-text-color wp-element-button" href="/proyecto/">Conoce el proyecto y su innovación técnica</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div></div>
	<!-- /wp:cover -->

</section>
<!-- /wp:group -->
