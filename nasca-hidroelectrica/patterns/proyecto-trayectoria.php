<?php
/**
 * Title: Proyecto · 03 Trayectoria Técnica y Cumplimiento Normativo (línea vertical)
 * Slug: nasca/proyecto-trayectoria
 * Categories: nasca-sections
 * Description: Sección morada con línea de tiempo vertical (hito izquierda, fecha central, resultado derecha) y tarjeta IFC.
 */
$rows = array(
	array( 'Inicio del Proyecto', 'Nace Nasca como iniciativa para desarrollar energía limpia a través de una central de pasada.', 'Ago 2022', 'Registro Oficial', 'Registro formal de la empresa para el desarrollo del proyecto hidroeléctrico en el país.' ),
	array( 'Estudios en Territorio', 'Estudios técnicos de geología, medición del caudal del río y primeros encuentros de trabajo con las familias del Valle de Intag.', '2022 – 2023', 'Estudios de Prefactibilidad', 'Aprobación oficial de los términos de referencia y estudios base ante las autoridades del sector.' ),
	array( 'Conexión Eléctrica', 'Definición del trazado de transmisión para entregar la energía generada directamente a la Subestación Manduriacu.', 'Feb 2024', 'Factibilidad de Conexión', 'Aprobación oficial de viabilidad para conectar la línea de transmisión a la Subestación Manduriacu.' ),
	array( 'Revisión Técnica Oficial', 'Evaluación y validación del diseño de ingeniería de la central y sus obras de captación.', 'Ago 2024', 'Certificado de Calificación', 'Emisión del Certificado de Calificación Técnica por parte del Ministerio de Energía.' ),
	array( 'Estudio Socioambiental', 'Presentación del Plan de Manejo Ambiental con medidas concretas para el cuidado de la cuenca y el apoyo a las actividades agrícolas.', 'Finales 2025', 'Evaluación del Estudio Ambiental', 'Aprobación técnica del Estudio de Impacto Ambiental por parte de la autoridad ambiental.' ),
	array( 'Cuidado del Río', 'Diseño de toma lateral que permite generar energía y devolver el 100% del agua limpia a su cauce natural.', 'Inicios 2026', 'Autorización del Uso del Agua', 'Autorización de Aprovechamiento Productivo del Agua, cumpliendo con el caudal ecológico que exige la ley.' ),
	array( 'Participación Comunitaria', 'Jornadas de diálogo y asambleas informativas con respaldo mayoritario de las familias de las comunidades del sector.', 'Jun 2026', 'Cierre de la Consulta Ambiental', 'Cierre formal del Proceso de Consulta Ambiental con aprobación del informe de participación ciudadana.' ),
	array( 'HITO DESTACADO', 'Se alcanza la meta principal: un proyecto viable, con respaldo social y listo para aportar al desarrollo energético del Ecuador.', '16 Jul 2026', 'EMISIÓN DE LA LICENCIA AMBIENTAL', 'Entrega oficial de la Licencia Ambiental por parte del Ministerio del Ambiente.' ),
	array( 'Fase Actual', 'Presencia constante en el Valle de Intag con mesas de trabajo, diagnóstico de necesidades y diálogo abierto en las 14 comunidades.', 'En curso', 'Estándares Internacionales', 'Gestión en territorio alineada a las Normas de Desempeño de la IFC y Principios de Ecuador.' ),
);
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:custom|gutter","right":"var:custom|gutter"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained","contentSize":"1800px"}} -->
<section class="wp-block-group has-base-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--custom--gutter)">
	<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent"} --><p class="is-style-eyebrow has-accent-color has-text-color">03 / Transparencia y cumplimiento</p><!-- /wp:paragraph -->
	<!-- wp:heading {"level":2,"textColor":"base","fontSize":"xx-large","style":{"spacing":{"margin":{"top":"1rem"}}}} --><h2 class="wp-block-heading has-base-color has-text-color has-xx-large-font-size" style="margin-top:1rem">Trayectoria Técnica y<br>Cumplimiento Normativo</h2><!-- /wp:heading -->
	<!-- wp:paragraph {"style":{"color":{"text":"#d9cdf0"},"spacing":{"margin":{"top":"1rem"}}}} --><p class="has-text-color" style="color:#d9cdf0;margin-top:1rem">Hitos oficiales alcanzados bajo estricto cumplimiento legal, ambiental y social.</p><!-- /wp:paragraph -->

	<!-- wp:group {"className":"nasca-vtimeline","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
	<div class="wp-block-group nasca-vtimeline" style="margin-top:var(--wp--preset--spacing--50)">
<?php foreach ( $rows as $r ) : ?>
		<!-- wp:columns {"verticalAlignment":"top","className":"nasca-vt-row","style":{"spacing":{"blockGap":{"left":"1.5rem"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-top nasca-vt-row">
			<!-- wp:column {"verticalAlignment":"top","width":"42%","className":"nasca-vt-left"} -->
			<div class="wp-block-column is-vertically-aligned-top nasca-vt-left" style="flex-basis:42%">
				<!-- wp:heading {"level":3,"textAlign":"right","textColor":"accent","fontSize":"large"} --><h3 class="wp-block-heading has-text-align-right has-accent-color has-text-color has-large-font-size"><?php echo esc_html( $r[0] ); ?></h3><!-- /wp:heading -->
				<!-- wp:paragraph {"align":"right","fontSize":"small","style":{"color":{"text":"#d9cdf0"}}} --><p class="has-text-align-right has-text-color has-small-font-size" style="color:#d9cdf0"><?php echo esc_html( $r[1] ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"top","width":"16%","className":"nasca-vt-mid"} -->
			<div class="wp-block-column is-vertically-aligned-top nasca-vt-mid" style="flex-basis:16%">
				<!-- wp:paragraph {"align":"center","className":"nasca-vt-date"} --><p class="has-text-align-center nasca-vt-date"><?php echo esc_html( $r[2] ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"top","width":"42%","className":"nasca-vt-right"} -->
			<div class="wp-block-column is-vertically-aligned-top nasca-vt-right" style="flex-basis:42%">
				<!-- wp:heading {"level":3,"textColor":"accent","fontSize":"large"} --><h3 class="wp-block-heading has-accent-color has-text-color has-large-font-size"><?php echo esc_html( $r[3] ); ?></h3><!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"small","style":{"color":{"text":"#d9cdf0"}}} --><p class="has-text-color has-small-font-size" style="color:#d9cdf0"><?php echo esc_html( $r[4] ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"nasca-glass","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2.5rem","right":"2.5rem"},"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","verticalAlignment":"center"}} -->
	<div class="wp-block-group nasca-glass" style="margin-top:var(--wp--preset--spacing--50);padding-top:2rem;padding-right:2.5rem;padding-bottom:2rem;padding-left:2.5rem">
		<!-- wp:paragraph {"className":"nasca-ifc"} --><p class="nasca-ifc">IFC</p><!-- /wp:paragraph -->
		<!-- wp:group {"layout":{"type":"default"},"style":{"spacing":{"blockGap":"0.4rem"}}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"nasca-kicker","textColor":"accent"} --><p class="nasca-kicker has-accent-color has-text-color">Marco de estándares internacionales</p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small","style":{"color":{"text":"#d9cdf0"}}} --><p class="has-text-color has-small-font-size" style="color:#d9cdf0">Resumen de cumplimiento de las Normas de Desempeño 1 (Riesgos socioambientales), 6 (Biodiversidad) y Principios de Ecuador.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
