<?php
/**
 * Title: Sostenibilidad · 02 Aportes en Territorio (cifras + últimas noticias)
 * Slug: nasca/sostenibilidad-aportes
 * Categories: nasca-sections
 * Description: Cifras en caja oscura y las tres últimas entradas del blog. Mientras no haya entradas se muestran tres tarjetas de ejemplo editables.
 */
$stats = array(
	array( '18', 'Acciones ejecutadas', 'Iniciativas de apoyo directo e intervenciones comunitarias coordinadas.' ),
	array( '$24,500', 'Inversión social', 'Recursos destinados a mejoramiento de espacios públicos y apoyo local.' ),
	array( '9', 'Paradas y espacios', 'Infraestructura rural adecuada para la seguridad y movilidad comunitaria.' ),
	array( '1,100+', 'Familias vinculadas', 'Participación activa en espacios de diálogo y censo socioeconómico.' ),
);
$cards = array(
	array( 'primary', 'Infraestructura', 'Mejoramiento de conectividad en el sector de San Francisco.', 'Iniciamos los trabajos de mantenimiento vial para facilitar el transporte de productos agrícolas…' ),
	array( 'contrast-3', 'Educación', 'Entrega de suministros técnicos para talleres comunitarios.', 'Fortalecemos la capacitación técnica local mediante la dotación de herramientas y…' ),
	array( 'accent-3', 'Comunidad', 'Diálogo activo: Sesión informativa con la comunidad de Limones.', 'Presentamos los avances del plan de manejo ambiental y escuchamos las inquietudes de los…' ),
);
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:custom|gutter","right":"var:custom|gutter"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"2400px"}} -->
<section id="aportes" class="wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--custom--gutter)">
	<!-- wp:paragraph {"className":"is-style-eyebrow"} --><p class="is-style-eyebrow">Nasca en el territorio</p><!-- /wp:paragraph -->
	<!-- wp:heading {"level":2,"fontSize":"xx-large","style":{"spacing":{"margin":{"top":"1.5rem"}}}} --><h2 class="wp-block-heading has-xx-large-font-size" style="margin-top:1.5rem">Aportes en Territorio: Hechos que Transforman</h2><!-- /wp:heading -->
	<!-- wp:paragraph {"textColor":"text-muted","style":{"spacing":{"margin":{"top":"1rem"}}}} --><p class="has-text-muted-color has-text-color" style="margin-top:1rem">Creciendo juntos a través de acciones directas y presencia constante en el Valle de Intag.</p><!-- /wp:paragraph -->

	<!-- wp:group {"className":"nasca-statbox","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|50"}},"border":{"radius":"12px"}},"backgroundColor":"contrast-2","textColor":"base","layout":{"type":"default"}} -->
	<div class="wp-block-group nasca-statbox has-base-color has-contrast-2-background-color has-text-color has-background" style="border-radius:12px;margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:columns {"className":"nasca-stats4","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-columns nasca-stats4">
<?php foreach ( $stats as $s ) : ?>
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3,"className":"is-style-stat","textColor":"accent"} --><h3 class="wp-block-heading is-style-stat has-accent-color has-text-color"><?php echo esc_html( $s[0] ); ?></h3><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"is-style-stat-label","textColor":"accent"} --><p class="is-style-stat-label has-accent-color has-text-color"><?php echo esc_html( $s[1] ); ?></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"text-muted-dark","fontSize":"small","style":{"spacing":{"margin":{"top":"0.75rem"}}}} --><p class="has-text-muted-dark-color has-text-color has-small-font-size" style="margin-top:0.75rem"><?php echo esc_html( $s[2] ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
<?php endforeach; ?>
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"nasca-news","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-query nasca-news" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:post-template {"className":"nasca-news-grid","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"className":"is-style-card nasca-news-card","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card nasca-news-card" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
					<!-- wp:post-terms {"term":"category","className":"nasca-kicker-strong","textColor":"primary"} /-->
					<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"x-large"} /-->
					<!-- wp:post-excerpt {"excerptLength":18,"textColor":"text-muted","fontSize":"small"} /-->
					<!-- wp:read-more {"content":"Leer más","className":"nasca-readmore"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
		<!-- wp:query-no-results -->
			<!-- wp:columns {"className":"nasca-news-grid","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-columns nasca-news-grid">
<?php foreach ( $cards as $c ) : ?>
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"is-style-card nasca-news-card","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group is-style-card nasca-news-card" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
						<!-- wp:group {"className":"nasca-news-ph","style":{"spacing":{"padding":{"top":"2.5rem","bottom":"2.5rem","left":"2.5rem","right":"2.5rem"}}},"backgroundColor":"<?php echo $c[0]; ?>","textColor":"base","layout":{"type":"default"}} -->
						<div class="wp-block-group nasca-news-ph has-base-color has-<?php echo $c[0]; ?>-background-color has-text-color has-background" style="padding-top:2.5rem;padding-right:2.5rem;padding-bottom:2.5rem;padding-left:2.5rem">
							<!-- wp:paragraph {"fontSize":"x-large"} --><p class="has-x-large-font-size">[PLACEHOLDER: FOTO REAL COMUNITARIA]</p><!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
						<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}}},"layout":{"type":"default"}} -->
						<div class="wp-block-group" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
							<!-- wp:paragraph {"className":"nasca-kicker-strong","textColor":"primary"} --><p class="nasca-kicker-strong has-primary-color has-text-color"><?php echo esc_html( $c[1] ); ?></p><!-- /wp:paragraph -->
							<!-- wp:heading {"level":3,"fontSize":"x-large"} --><h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html( $c[2] ); ?></h3><!-- /wp:heading -->
							<!-- wp:paragraph {"textColor":"text-muted","fontSize":"small"} --><p class="has-text-muted-color has-text-color has-small-font-size"><?php echo esc_html( $c[3] ); ?></p><!-- /wp:paragraph -->
							<!-- wp:paragraph {"className":"nasca-readmore"} --><p class="nasca-readmore"><a class="nasca-arrow" href="/noticias/">Leer más</a></p><!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
<?php endforeach; ?>
			</div>
			<!-- /wp:columns -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:button {"className":"is-style-arrow-ghost","textColor":"contrast-3"} --><div class="wp-block-button is-style-arrow-ghost"><a class="wp-block-button__link has-contrast-3-color has-text-color wp-element-button" href="/noticias/">Ver todas las novedades en territorio</a></div><!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
