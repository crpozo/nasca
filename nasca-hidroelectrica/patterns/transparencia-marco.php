<?php
/**
 * Title: Transparencia · 01 Marco Regulatorio y Estándares (dos tarjetas)
 * Slug: nasca/transparencia-marco
 * Categories: nasca-sections, nasca-cards
 * Description: Tarjeta clara con permisos nacionales (estado aprobado/vigente) y tarjeta verde con las Normas de Desempeño IFC.
 */
$permisos = array(
	array( 'Aprobado', 'Certificado de Calificación e Idoneidad Técnica', 'Ministerio de Energía y Minas · Aprobado' ),
	array( 'Aprobado', 'Aprobación de Interconexión Eléctrica', 'Subestación Manduriacu · Aprobado' ),
	array( 'Aprobado', 'Autorización de Aprovechamiento Productivo del Agua y Caudal Ecológico', 'Aprobado' ),
	array( 'Aprobado', 'Dictamen Favorable del Proceso de Participación Ciudadana', 'Consulta Ambiental · Aprobado' ),
);
$normas = array(
	'Norma de Desempeño 1 de la IFC: Evaluación y gestión de riesgos socioambientales.',
	'Norma de Desempeño 2 de la IFC: Trabajo y condiciones laborales.',
	'Norma de Desempeño 3 de la IFC: Eficiencia del uso de los recursos y prevención de la contaminación.',
	'Norma de Desempeño 4 de la IFC: Salud y seguridad de la comunidad.',
	'Norma de Desempeño 5 de la IFC: Adquisición de tierras y reasentamiento involuntario.',
	'Norma de Desempeño 6: Conservación de la biodiversidad y gestión sostenible de los recursos naturales vivos.',
	'Norma de Desempeño 7: Pueblos Indígenas.',
	'Norma de Desempeño 8: Patrimonio cultural.',
);
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:custom|gutter","right":"var:custom|gutter"}}},"backgroundColor":"base-2","layout":{"type":"constrained","contentSize":"1800px"}} -->
<section class="wp-block-group has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--custom--gutter)">
	<!-- wp:paragraph {"className":"is-style-eyebrow"} --><p class="is-style-eyebrow">01</p><!-- /wp:paragraph -->
	<!-- wp:heading {"level":2,"className":"nasca-max-24","fontSize":"xx-large","style":{"spacing":{"margin":{"top":"1rem"}}}} --><h2 class="wp-block-heading nasca-max-24 has-xx-large-font-size" style="margin-top:1rem">Marco Regulatorio y Estándares Internacionales</h2><!-- /wp:heading -->
	<!-- wp:paragraph {"className":"nasca-max-50","textColor":"text-muted","style":{"spacing":{"margin":{"top":"1rem"}}}} --><p class="nasca-max-50 has-text-muted-color has-text-color" style="margin-top:1rem">Verificación de cumplimiento legal, ambiental y social ante el Estado y organismos multilaterales.</p><!-- /wp:paragraph -->

	<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":{"left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-top" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:column {"verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:group {"className":"nasca-panel","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px"}},"backgroundColor":"base","layout":{"type":"default"}} -->
			<div class="wp-block-group nasca-panel has-base-background-color has-background" style="border-radius:12px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
				<!-- wp:group {"className":"nasca-panel-title","layout":{"type":"flex","verticalAlignment":"center"}} -->
				<div class="wp-block-group nasca-panel-title">
					<!-- wp:html --><span class="nasca-mini-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8z"/><path d="M14 3v5h5M9 13h6M9 17h6"/></svg></span><!-- /wp:html -->
					<!-- wp:heading {"level":3,"fontSize":"x-large"} --><h3 class="wp-block-heading has-x-large-font-size">Marco Regulatorio Nacional</h3><!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
<?php foreach ( $permisos as $p ) : ?>
				<!-- wp:group {"className":"nasca-permit","layout":{"type":"default"}} -->
				<div class="wp-block-group nasca-permit">
					<!-- wp:paragraph --><p><span class="nasca-badge nasca-badge-ok">✓ <?php echo esc_html( $p[0] ); ?></span> <strong><?php echo esc_html( $p[1] ); ?></strong></p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"fontSize":"x-small","textColor":"text-muted"} --><p class="has-text-muted-color has-text-color has-x-small-font-size"><?php echo esc_html( $p[2] ); ?></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
<?php endforeach; ?>
				<!-- wp:group {"className":"nasca-permit","layout":{"type":"default"}} -->
				<div class="wp-block-group nasca-permit">
					<!-- wp:paragraph {"textColor":"primary"} --><p class="has-primary-color has-text-color"><span class="nasca-badge nasca-badge-live">✓ Vigente</span> <strong>Licencia Ambiental Oficial Emitida</strong></p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"fontSize":"x-small","textColor":"text-muted"} --><p class="has-text-muted-color has-text-color has-x-small-font-size">Julio 2026 · Vigente</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:paragraph {"fontSize":"x-small","textColor":"text-muted","style":{"spacing":{"margin":{"top":"1.5rem"}}}} --><p class="has-text-muted-color has-text-color has-x-small-font-size" style="margin-top:1.5rem">Expedientes técnicos y administrativos debidamente certificados ante los entes de control correspondientes.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:group {"className":"nasca-panel nasca-panel-dark","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px"},"color":{"background":"#3E5A48"}},"textColor":"base","layout":{"type":"default"}} -->
			<div class="wp-block-group nasca-panel nasca-panel-dark has-base-color has-text-color has-background" style="border-radius:12px;background-color:#3E5A48;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
				<!-- wp:group {"className":"nasca-panel-title","layout":{"type":"flex","verticalAlignment":"center"}} -->
				<div class="wp-block-group nasca-panel-title">
					<!-- wp:html --><span class="nasca-mini-icon nasca-mini-icon-light"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"/></svg></span><!-- /wp:html -->
					<!-- wp:heading {"level":3,"textColor":"base","fontSize":"x-large"} --><h3 class="wp-block-heading has-base-color has-text-color has-x-large-font-size">Estándares Multilaterales y Criterios ESG (IFC)</h3><!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
				<!-- wp:paragraph {"className":"is-style-tag-filled nasca-tag-accent","style":{"spacing":{"margin":{"top":"1rem"}}}} --><p class="is-style-tag-filled nasca-tag-accent" style="margin-top:1rem">IFC</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"small","style":{"spacing":{"margin":{"top":"1.25rem"}},"color":{"text":"#dfe8df"}}} --><p class="has-text-color has-small-font-size" style="color:#dfe8df;margin-top:1.25rem">Operamos bajo normativas internacionales que exigen los más altos niveles de debida diligencia ambiental, social y de derechos humanos, complementando la legislación ecuatoriana.</p><!-- /wp:paragraph -->
				<!-- wp:list {"className":"nasca-norms","fontSize":"small"} -->
				<ul class="wp-block-list nasca-norms has-small-font-size">
<?php foreach ( $normas as $n ) : ?>
					<!-- wp:list-item --><li><?php echo esc_html( $n ); ?></li><!-- /wp:list-item -->
<?php endforeach; ?>
				</ul>
				<!-- /wp:list -->
				<!-- wp:paragraph {"className":"nasca-placeholder-box","fontSize":"x-small"} --><p class="nasca-placeholder-box has-x-small-font-size">[Espacio Reservado · Fase 2: Repositorio de Resúmenes Ejecutivos y Monitoreos Bióticos en PDF]</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
