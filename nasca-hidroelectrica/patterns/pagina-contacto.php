<?php
/**
 * Title: Página · Contacto (completa)
 * Slug: nasca/pagina-contacto
 * Categories: nasca-home
 * Block Types: core/post-content
 * Post Types: page
 * Description: Hero, datos de contacto y sedes, formulario y mapa. El formulario es un bloque HTML; sustitúyelo por el shortcode de tu plugin de formularios.
 */
$img = esc_url( get_template_directory_uri() . '/assets/images/bg-valle.jpg' );
?>
<!-- wp:cover {"url":"<?php echo $img; ?>","dimRatio":70,"overlayColor":"contrast-3","isUserOverlayColor":true,"minHeight":420,"contentPosition":"center left","className":"is-style-hero nasca-hero-compact","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:custom|gutter","right":"var:custom|gutter"}}},"layout":{"type":"constrained","contentSize":"2400px","justifyContent":"left"}} -->
<div class="wp-block-cover has-custom-content-position is-position-center-left is-style-hero nasca-hero-compact" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--custom--gutter);min-height:420px"><img class="wp-block-cover__image-background" alt="" src="<?php echo $img; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-3-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent"} --><p class="is-style-eyebrow has-accent-color has-text-color">Diálogo abierto</p><!-- /wp:paragraph -->
	<!-- wp:heading {"level":1,"textColor":"base","style":{"spacing":{"margin":{"top":"1.5rem"}},"typography":{"fontWeight":"300"}}} --><h1 class="wp-block-heading has-base-color has-text-color" style="margin-top:1.5rem;font-weight:300">Hablemos.</h1><!-- /wp:heading -->
	<!-- wp:paragraph {"className":"nasca-max-50","textColor":"text-muted-dark","fontSize":"large","style":{"spacing":{"margin":{"top":"1.5rem"}}}} --><p class="nasca-max-50 has-text-muted-dark-color has-text-color has-large-font-size" style="margin-top:1.5rem">Escríbenos, llámanos o visítanos en cualquiera de nuestras sedes de atención en el Valle de Intag y en Quito.</p><!-- /wp:paragraph -->
</div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:custom|gutter","right":"var:custom|gutter"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"2400px"}} -->
<section class="wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--custom--gutter)">
	<!-- wp:columns {"verticalAlignment":"top","className":"nasca-contacto","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-top nasca-contacto">
		<!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%">
			<!-- wp:heading {"level":2,"fontSize":"xx-large"} --><h2 class="wp-block-heading has-xx-large-font-size">Canales de<br>atención</h2><!-- /wp:heading -->
			<!-- wp:group {"className":"nasca-contact-item","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group nasca-contact-item" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"className":"nasca-kicker-strong","textColor":"primary"} --><p class="nasca-kicker-strong has-primary-color has-text-color">WhatsApp Comunitario</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"large"} --><p class="has-large-font-size"><a class="nasca-arrow" href="https://wa.me/593000000000" target="_blank" rel="noopener">+593 00 000 0000</a></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"nasca-contact-item","layout":{"type":"default"}} -->
			<div class="wp-block-group nasca-contact-item">
				<!-- wp:paragraph {"className":"nasca-kicker-strong","textColor":"primary"} --><p class="nasca-kicker-strong has-primary-color has-text-color">Correo oficial</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"large"} --><p class="has-large-font-size"><a class="nasca-arrow" href="mailto:correo@nasca.ec">correo@nasca.ec</a></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"nasca-contact-item","layout":{"type":"default"}} -->
			<div class="wp-block-group nasca-contact-item">
				<!-- wp:paragraph {"className":"nasca-kicker-strong","textColor":"primary"} --><p class="nasca-kicker-strong has-primary-color has-text-color">Horario de atención</p><!-- /wp:paragraph -->
				<!-- wp:paragraph --><p>Lunes a viernes, 08:30 – 17:00</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":3,"fontSize":"x-large","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} --><h3 class="wp-block-heading has-x-large-font-size" style="margin-top:var(--wp--preset--spacing--50)">Sedes de atención</h3><!-- /wp:heading -->
			<!-- wp:list {"className":"nasca-sedes"} -->
			<ul class="wp-block-list nasca-sedes">
				<!-- wp:list-item --><li><strong>Oficina Técnica · Valle de Intag</strong><br>Calle Principal s/n, García Moreno.</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><strong>Punto de Atención Comunitaria</strong><br>Centro poblado, Valle de Intag.</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><strong>Campamento Central Nasca</strong><br>Vía a la central, Valle de Intag.</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><strong>Oficina Quito</strong><br>Av. Amazonas N32-154 y Eloy Alfaro.</li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"top","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"2.5rem","bottom":"2.5rem","left":"2.5rem","right":"2.5rem"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card" style="padding-top:2.5rem;padding-right:2.5rem;padding-bottom:2.5rem;padding-left:2.5rem">
				<!-- wp:heading {"level":3,"fontSize":"x-large"} --><h3 class="wp-block-heading has-x-large-font-size">Envíanos un mensaje</h3><!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"text-muted","fontSize":"small","style":{"spacing":{"margin":{"top":"0.5rem","bottom":"1.5rem"}}}} --><p class="has-text-muted-color has-text-color has-small-font-size" style="margin-top:0.5rem;margin-bottom:1.5rem">Para peticiones, quejas y reclamos formales usa el <a href="/transparencia/#pqr">Sistema de Atención Ciudadana</a>.</p><!-- /wp:paragraph -->
				<!-- wp:html -->
<form class="nasca-form" action="#" method="post" data-nasca-form="contacto">
	<div class="nasca-form-row">
		<label>Nombre<input type="text" name="nombre" placeholder="Tu nombre" required></label>
		<label>Correo electrónico<input type="email" name="email" placeholder="tucorreo@ejemplo.com" required></label>
	</div>
	<div class="nasca-form-row">
		<label>Teléfono (opcional)<input type="tel" name="telefono" placeholder="09XX XXX XXX"></label>
		<label>Asunto<select name="asunto"><option>Información general</option><option>Comunidades y territorio</option><option>Proveedores y empleo</option><option>Prensa y comunicación</option><option>Otro</option></select></label>
	</div>
	<label>Mensaje<textarea name="mensaje" rows="6" placeholder="Cuéntanos en qué podemos ayudarte" required></textarea></label>
	<label class="nasca-check"><input type="checkbox" name="acepta" required> Acepto la política de tratamiento de datos</label>
	<button type="submit" class="wp-block-button__link wp-element-button nasca-btn-primary nasca-arrow">Enviar mensaje</button>
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

<!-- wp:group {"className":"nasca-map-embed","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group nasca-map-embed" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
	<!-- wp:html --><iframe title="Mapa · Oficina Técnica Valle de Intag" src="https://www.google.com/maps?q=Garc%C3%ADa%20Moreno%2C%20Imbabura%2C%20Ecuador&output=embed" width="100%" height="460" style="border:0;display:block" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><!-- /wp:html -->
</div>
<!-- /wp:group -->
