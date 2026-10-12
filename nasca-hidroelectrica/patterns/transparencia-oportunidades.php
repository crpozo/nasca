<?php
/**
 * Title: Transparencia · 02 Oportunidades Locales (dos formularios)
 * Slug: nasca/transparencia-oportunidades
 * Categories: nasca-sections
 * Description: Franja fotográfica, título, aviso y dos formularios: Registro de Hojas de Vida y Bienes y Servicios de la Zona. Los formularios son bloques HTML; reemplázalos por el shortcode de tu plugin de formularios para recibir envíos.
 */
$img = esc_url( get_template_directory_uri() . '/assets/images/bg-valle.jpg' );
?>
<!-- wp:cover {"url":"<?php echo $img; ?>","dimRatio":10,"minHeight":260,"isUserOverlayColor":true,"overlayColor":"contrast-3","className":"nasca-band","layout":{"type":"constrained"}} -->
<div class="wp-block-cover nasca-band" style="min-height:260px"><img class="wp-block-cover__image-background" alt="" src="<?php echo $img; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-3-background-color has-background-dim-10 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph --><p></p><!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:custom|gutter","right":"var:custom|gutter"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"2400px"}} -->
<section id="oportunidades" class="wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--custom--gutter)">
	<!-- wp:heading {"level":2,"className":"nasca-max-24","fontSize":"xx-large","style":{"spacing":{"margin":{"top":"1rem"}}}} --><h2 class="wp-block-heading nasca-max-24 has-xx-large-font-size" style="margin-top:1rem">Oportunidades Locales y Desarrollo Territorial</h2><!-- /wp:heading -->
	<!-- wp:paragraph {"className":"nasca-max-50","textColor":"text-muted","style":{"spacing":{"margin":{"top":"1rem"}}}} --><p class="nasca-max-50 has-text-muted-color has-text-color" style="margin-top:1rem">Procesos transparentes de registro para la vinculación progresiva de mano de obra y servicios locales.</p><!-- /wp:paragraph -->

	<!-- wp:group {"className":"nasca-notice","style":{"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.5rem","right":"1.5rem"},"margin":{"top":"var:preset|spacing|40"}},"border":{"radius":"10px"}},"backgroundColor":"contrast-2","textColor":"base","layout":{"type":"flex","verticalAlignment":"top"}} -->
	<div class="wp-block-group nasca-notice has-base-color has-contrast-2-background-color has-text-color has-background" style="border-radius:10px;margin-top:var(--wp--preset--spacing--40);padding-top:1.25rem;padding-right:1.5rem;padding-bottom:1.25rem;padding-left:1.5rem">
		<!-- wp:html --><span class="nasca-info-dot">i</span><!-- /wp:html -->
		<!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size">La incorporación de personal y la contratación de proveedores se ejecutará de manera gradual conforme avancen las distintas fases operativas del proyecto. Se priorizará estrictamente la mano de obra local, así como los emprendimientos familiares y comunitarios de las 14 comunidades del Área de Influencia Directa (AID).</p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"},"blockGap":{"left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-top" style="margin-top:var(--wp--preset--spacing--30)">
		<!-- wp:column {"verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
				<!-- wp:group {"className":"nasca-panel-title","layout":{"type":"flex","verticalAlignment":"center"}} -->
				<div class="wp-block-group nasca-panel-title">
					<!-- wp:html --><span class="nasca-mini-icon nasca-mini-icon-primary"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 4-6 8-6s8 2 8 6"/></svg></span><!-- /wp:html -->
					<!-- wp:group {"layout":{"type":"default"},"style":{"spacing":{"blockGap":"0.1rem"}}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3,"fontSize":"x-large"} --><h3 class="wp-block-heading has-x-large-font-size">Registro de Hojas de Vida</h3><!-- /wp:heading -->
						<!-- wp:paragraph {"fontSize":"x-small","textColor":"text-muted"} --><p class="has-text-muted-color has-text-color has-x-small-font-size">Bolsa de Empleo Comunitario</p><!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:html -->
<form class="nasca-form" action="#" method="post" enctype="multipart/form-data" data-nasca-form="hojas-de-vida">
	<label>Nombres completos<input type="text" name="nombre" placeholder="Escriba su nombre completo" required></label>
	<div class="nasca-form-row">
		<label>Comunidad del AID<select name="comunidad" required><option value="">Seleccione su comunidad</option><option>Cielo Verde</option><option>El Rosal</option><option>Santa Rosa</option><option>San Francisco</option><option>Limones</option><option>San Miguel del Chontal</option><option>San Roque de Cajamarca</option><option>El Paraíso</option><option>Otra comunidad del AID</option></select></label>
		<label>Área laboral<select name="area" required><option value="">Seleccione un área</option><option>Construcción y obra civil</option><option>Operación y mantenimiento</option><option>Servicios generales</option><option>Transporte</option><option>Administrativo</option><option>Otro</option></select></label>
	</div>
	<label>Hoja de Vida (PDF)<span class="nasca-file"><input type="file" name="cv" accept="application/pdf"><span>⇡ Adjuntar archivo PDF</span></span></label>
	<label class="nasca-check"><input type="checkbox" name="acepta" required> Autorizo el tratamiento de mis datos personales</label>
	<button type="submit" class="wp-block-button__link wp-element-button nasca-btn-primary nasca-arrow">Registrar Postulación</button>
</form>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
				<!-- wp:group {"className":"nasca-panel-title","layout":{"type":"flex","verticalAlignment":"center"}} -->
				<div class="wp-block-group nasca-panel-title">
					<!-- wp:html --><span class="nasca-mini-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9h18l-1 11H4zM8 9V6a4 4 0 0 1 8 0v3"/></svg></span><!-- /wp:html -->
					<!-- wp:group {"layout":{"type":"default"},"style":{"spacing":{"blockGap":"0.1rem"}}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3,"fontSize":"x-large"} --><h3 class="wp-block-heading has-x-large-font-size">Bienes y Servicios de la Zona</h3><!-- /wp:heading -->
						<!-- wp:paragraph {"fontSize":"x-small","textColor":"text-muted"} --><p class="has-text-muted-color has-text-color has-x-small-font-size">Registro de Proveedores Locales</p><!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:html -->
<form class="nasca-form" action="#" method="post" enctype="multipart/form-data" data-nasca-form="proveedores">
	<label>Razón social o Nombre del titular<input type="text" name="razon" placeholder="Nombre del negocio o titular" required></label>
	<div class="nasca-form-row">
		<label>Tipo de servicio<input type="text" name="servicio" placeholder="Alimentación, transporte, hospedaje..." required></label>
		<label>Teléfono de contacto<input type="tel" name="telefono" placeholder="09XX XXX XXX" required></label>
	</div>
	<label>Documentos de soporte (opcional)<span class="nasca-file"><input type="file" name="docs" multiple><span>⇡ Adjuntar documentos</span></span></label>
	<button type="submit" class="wp-block-button__link wp-element-button nasca-btn-outline nasca-arrow">Inscribir Servicio Local</button>
</form>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
