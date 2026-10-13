<?php
/**
 * Title: Sostenibilidad · 01 Ejes de Acción y Compromiso (4 columnas de color)
 * Slug: nasca/sostenibilidad-ejes
 * Categories: nasca-sections
 */
$ejes = array(
	array( 'base-2', 'contrast', 'primary', '01', 'Salud y Bienestar Local', 'Promover condiciones de vida saludables y apoyar el bienestar integral de las familias en las zonas de influencia.', 'Contribuir al fortalecimiento de la atención preventiva y cooperar con las iniciativas locales de salud comunitaria.' ),
	array( 'contrast-3', 'base', 'accent', '02', 'Dinamización Productiva y Empleo', 'Fomentar el crecimiento económico local y la diversificación de las capacidades productivas de la zona.', 'Promover la contratación preferencial de servicios locales e impulsar el desarrollo agropecuario tradicional.' ),
	array( 'base', 'contrast', 'accent-3', '03', 'Convivencia Territorial e Infraestructura', 'Apoyar la mejora de espacios comunitarios y velar por el cuidado compartido del entorno fluvial.', 'Colaborar en el mantenimiento de vías de conectividad rural y respaldar la veeduría y monitoreo participativo del agua.' ),
	array( 'primary', 'base', 'primary-light', '04', 'Formación y Educación Técnica', 'Facilitar el acceso al conocimiento y fortalecer las oportunidades de aprendizaje continuo.', 'Apoyar el fortalecimiento de la infraestructura educativa rural y promover programas de capacitación para el empleo.' ),
);
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50","left":"var:custom|gutter","right":"var:custom|gutter"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained","contentSize":"2400px"}} -->
<section class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--custom--gutter)">
	<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent"} --><p class="is-style-eyebrow has-accent-color has-text-color">01</p><!-- /wp:paragraph -->
	<!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"margin":{"top":"1.5rem"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:1.5rem">
		<!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%">
			<!-- wp:heading {"level":2,"textColor":"base","fontSize":"display"} --><h2 class="wp-block-heading has-base-color has-text-color has-display-font-size">Ejes de Acción y<br>Compromiso</h2><!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%">
			<!-- wp:paragraph {"textColor":"text-muted-dark","fontSize":"large"} --><p class="has-text-muted-dark-color has-text-color has-large-font-size">Líneas estratégicas orientadas al bienestar colectivo y la protección de los recursos naturales.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->

<!-- wp:columns {"className":"nasca-ejes","style":{"spacing":{"blockGap":{"left":"0","top":"0"}}}} -->
<div class="wp-block-columns nasca-ejes">
<?php foreach ( $ejes as $e ) : list( $bg, $tx, $ac, $num, $title, $prop, $meta ) = $e; ?>
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"<?php echo $bg; ?>","textColor":"<?php echo $tx; ?>"} -->
	<div class="wp-block-column has-<?php echo $tx; ?>-color has-<?php echo $bg; ?>-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:paragraph {"className":"nasca-eje-num"} --><p class="nasca-eje-num"><?php echo $num; ?></p><!-- /wp:paragraph -->
		<!-- wp:separator {"className":"nasca-eje-line","backgroundColor":"<?php echo $ac; ?>"} --><hr class="wp-block-separator has-text-color has-<?php echo $ac; ?>-color has-alpha-channel-opacity has-<?php echo $ac; ?>-background-color has-background nasca-eje-line"/><!-- /wp:separator -->
		<!-- wp:heading {"level":3,"textColor":"<?php echo $tx; ?>","fontSize":"x-large"} --><h3 class="wp-block-heading has-<?php echo $tx; ?>-color has-text-color has-x-large-font-size"><?php echo esc_html( $title ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"className":"nasca-kicker-strong","textColor":"<?php echo $ac; ?>"} --><p class="nasca-kicker-strong has-<?php echo $ac; ?>-color has-text-color">Propósito marco</p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size"><?php echo esc_html( $prop ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"nasca-kicker-strong","textColor":"<?php echo $ac; ?>"} --><p class="nasca-kicker-strong has-<?php echo $ac; ?>-color has-text-color">Metas clave</p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size"><?php echo esc_html( $meta ); ?></p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
<?php endforeach; ?>
</div>
<!-- /wp:columns -->
