<?php
/**
 * Title: Transparencia · 03 Sistema de Atención Ciudadana (PQR)
 * Slug: nasca/transparencia-pqr
 * Categories: nasca-sections
 * Description: Franja fotográfica y sección oscura con texto a la izquierda y formulario PQR a la derecha. El formulario es un bloque HTML; reemplázalo por el shortcode de tu plugin de formularios para recibir envíos.
 */
$img = esc_url( get_template_directory_uri() . '/assets/images/bg-hero.jpg' );
?>
<!-- wp:cover {"url":"<?php echo $img; ?>","dimRatio":20,"minHeight":260,"isUserOverlayColor":true,"overlayColor":"contrast-3","className":"nasca-band","layout":{"type":"constrained"}} -->
<div class="wp-block-cover nasca-band" style="min-height:260px"><img class="wp-block-cover__image-background" alt="" src="<?php echo $img; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-3-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph --><p></p><!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:custom|gutter","right":"var:custom|gutter"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained","contentSize":"1800px"}} -->
<section id="pqr" class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--custom--gutter)">
	<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent"} --><p class="is-style-eyebrow has-accent-color has-text-color">03</p><!-- /wp:paragraph -->
	<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"margin":{"top":"1rem"},"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-top" style="margin-top:1rem">
		<!-- wp:column {"verticalAlignment":"top","width":"36%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:36%">
			<!-- wp:heading {"level":2,"textColor":"base","fontSize":"xx-large"} --><h2 class="wp-block-heading has-base-color has-text-color has-xx-large-font-size">Sistema de Atención Ciudadana (PQR)</h2><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"text-muted-dark","style":{"spacing":{"margin":{"top":"1.5rem"}}}} --><p class="has-text-muted-dark-color has-text-color" style="margin-top:1.5rem">Canal formal para registrar requerimientos, solicitudes y observaciones con garantía de seguimiento metódico.</p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"text-muted-dark","fontSize":"small","style":{"spacing":{"margin":{"top":"1rem"}}}} --><p class="has-text-muted-dark-color has-text-color has-small-font-size" style="margin-top:1rem">Registro confidencial o anónimo disponible. Puedes adjuntar archivos o fotografías que respalden tu solicitud.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"top","width":"64%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:64%">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}}},"textColor":"contrast","layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card has-contrast-color has-text-color" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
				<!-- wp:html -->
<form class="nasca-form" action="#" method="post" enctype="multipart/form-data" data-nasca-form="pqr">
	<fieldset class="nasca-radios"><legend>Tipo de solicitud</legend>
		<label><input type="radio" name="tipo" value="Petición" checked> Petición</label>
		<label><input type="radio" name="tipo" value="Sugerencia"> Sugerencia</label>
		<label><input type="radio" name="tipo" value="Queja"> Queja</label>
		<label><input type="radio" name="tipo" value="Reclamo"> Reclamo</label>
		<label><input type="radio" name="tipo" value="Consulta Técnica"> Consulta Técnica</label>
	</fieldset>
	<label>Nombres y Apellidos<input type="text" name="nombre" placeholder="Escriba su nombre completo"></label>
	<label class="nasca-check"><input type="checkbox" name="anonimo"> Registro confidencial / anónimo</label>
	<div class="nasca-form-row">
		<label>Comunidad de procedencia<select name="comunidad"><option value="">Seleccione su comunidad</option><option>Cielo Verde</option><option>El Rosal</option><option>Santa Rosa</option><option>San Francisco</option><option>Limones</option><option>San Miguel del Chontal</option><option>San Roque de Cajamarca</option><option>El Paraíso</option><option>Otra</option></select></label>
		<label>Teléfono / WhatsApp de contacto<input type="tel" name="telefono" placeholder="09XX XXX XXX"></label>
	</div>
	<label>Detalle del caso<textarea name="detalle" rows="5" placeholder="Describa su petición, queja, reclamo o sugerencia" required></textarea></label>
	<label>Adjuntar archivos o fotos de respaldo<span class="nasca-file"><input type="file" name="adjuntos" multiple><span>⇡ Adjuntar archivos</span></span></label>
	<label class="nasca-check"><input type="checkbox" name="acepta" required> Acepto las políticas de tratamiento de datos</label>
	<button type="submit" class="wp-block-button__link wp-element-button nasca-btn-wine nasca-arrow">Radicar Solicitud</button>
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
