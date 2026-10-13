<?php
/**
 * Title: Sostenibilidad · 03 Conoce las 14 Comunidades (tarjetas)
 * Slug: nasca/sostenibilidad-comunidades
 * Categories: nasca-sections, nasca-cards
 * Description: Rejilla de tarjetas de comunidad: foto, etiqueta, nombre y enlace a la ficha. Reemplaza cada foto desde el editor.
 */
$base = esc_url( get_template_directory_uri() . '/assets/images/' );
$comunidades = array( 'San Francisco', 'Llurimagua', 'El Rosal', 'Limones', 'Villadorita', 'Magnolia', 'La Armenia', 'San Roque de Cajamarca', 'San Miguel del Chontal', 'El Paraíso', 'San José de Magdalena', 'El Corazón', 'Río Verde', 'Cielo Verde', 'García Moreno', 'Selva Alegre' );
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:custom|gutter","right":"var:custom|gutter"}}},"backgroundColor":"base-2","layout":{"type":"constrained","contentSize":"2400px"}} -->
<section id="comunidades" class="wp-block-group has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--custom--gutter)">
	<!-- wp:paragraph {"className":"is-style-eyebrow"} --><p class="is-style-eyebrow">03</p><!-- /wp:paragraph -->
	<!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"margin":{"top":"1.5rem"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:1.5rem">
		<!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%">
			<!-- wp:heading {"level":2,"fontSize":"display"} --><h2 class="wp-block-heading has-display-font-size">Conoce las<br>14 Comunidades</h2><!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%">
			<!-- wp:paragraph {"textColor":"text-muted","fontSize":"large"} --><p class="has-text-muted-color has-text-color has-large-font-size">Presencia activa en cada rincón del Área de Influencia Directa. Conoce la realidad de cada sector.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"className":"nasca-com-grid","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"grid","columnCount":5,"minimumColumnWidth":null}} -->
	<div class="wp-block-group nasca-com-grid" style="margin-top:var(--wp--preset--spacing--50)">
<?php foreach ( $comunidades as $i => $name ) : $slug = sanitize_title( $name ); $n = sprintf( '%02d', $i + 1 ); ?>
		<!-- wp:group {"className":"nasca-com-card","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group nasca-com-card" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"custom"} --><figure class="wp-block-image size-full"><a href="/comunidades/<?php echo $slug; ?>/"><img src="<?php echo $base; ?>comunidad-<?php echo $n; ?>.jpg" alt="<?php echo esc_attr( $name ); ?>"/></a></figure><!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.25rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"},"blockGap":"0.4rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding-top:1.25rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
				<!-- wp:paragraph {"className":"nasca-kicker"} --><p class="nasca-kicker">Área de Influencia Directa</p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $name ); ?></h3><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"nasca-readmore","fontSize":"small"} --><p class="nasca-readmore has-small-font-size"><a class="nasca-arrow" href="/comunidades/<?php echo $slug; ?>/">Ver ficha comunitaria</a></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
