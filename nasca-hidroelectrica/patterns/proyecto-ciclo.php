<?php
/**
 * Title: Proyecto · 02 Ciclo de la Energía Renovable (diagrama + 5 pasos)
 * Slug: nasca/proyecto-ciclo
 * Categories: nasca-sections
 * Description: Título, texto, diagrama ilustrativo y cinco pasos numerados.
 */
$svg = esc_url( get_template_directory_uri() . '/assets/images/ciclo-energia.svg' );
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:custom|gutter","right":"var:custom|gutter"}}},"backgroundColor":"base-2","layout":{"type":"constrained","contentSize":"1800px"}} -->
<section class="wp-block-group has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--custom--gutter)">
	<!-- wp:paragraph {"className":"is-style-eyebrow"} --><p class="is-style-eyebrow">02 / Ingeniería para el Ecuador</p><!-- /wp:paragraph -->
	<!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"margin":{"top":"1rem"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:1rem">
		<!-- wp:column {"verticalAlignment":"bottom","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:55%">
			<!-- wp:heading {"level":2,"fontSize":"xx-large"} --><h2 class="wp-block-heading has-xx-large-font-size">Conoce el Ciclo de la<br>Energía Renovable</h2><!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"bottom","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:45%">
			<!-- wp:paragraph {"textColor":"text-muted","fontSize":"large","style":{"typography":{"fontWeight":"300"}}} --><p class="has-text-muted-color has-text-color has-large-font-size" style="font-weight:300">El agua se toma temporalmente, se conduce de forma subterránea para cuidar la superficie y retorna íntegra al río.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"className":"nasca-diagram","style":{"spacing":{"padding":{"top":"2rem","bottom":"1.5rem","left":"2rem","right":"2rem"},"margin":{"top":"var:preset|spacing|40"}},"border":{"radius":"14px"}},"backgroundColor":"accent-2","layout":{"type":"default"}} -->
	<div class="wp-block-group nasca-diagram has-accent-2-background-color has-background" style="border-radius:14px;margin-top:var(--wp--preset--spacing--40);padding-top:2rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem">
		<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} --><figure class="wp-block-image size-full"><img src="<?php echo $svg; ?>" alt="Perfil de montaña, túnel subterráneo y trazado de transmisión"/></figure><!-- /wp:image -->
		<!-- wp:paragraph {"fontSize":"x-small","textColor":"text-muted","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.04em"}}} --><p class="has-text-muted-color has-text-color has-x-small-font-size" style="letter-spacing:0.04em;text-transform:uppercase">Diagrama ilustrativo · Perfil de montaña, túnel subterráneo y trazado de transmisión. No está a escala.</p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"className":"nasca-steps","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":{"left":"0"}}}} -->
	<div class="wp-block-columns nasca-steps" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"className":"nasca-step-num"} --><p class="nasca-step-num">01</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size">Captación Sin Embalse</h3><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"text-muted","fontSize":"small"} --><p class="has-text-muted-color has-text-color has-small-font-size">Obra de toma lateral que toma una fracción del agua sin represar el río, garantizando el caudal ecológico permanente para la continuidad natural del cauce y la vida acuática.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"className":"nasca-step-num"} --><p class="nasca-step-num">02</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size">Conducción Subterránea (5.8 km)</h3><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"text-muted","fontSize":"small"} --><p class="has-text-muted-color has-text-color has-small-font-size">Túnel de carga bajo la montaña que conduce el agua sin intervención superficial, garantizando la continuidad de las actividades agropecuarias del valle.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"className":"nasca-step-num"} --><p class="nasca-step-num">03</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size">Casa de Máquinas</h3><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"text-muted","fontSize":"small"} --><p class="has-text-muted-color has-text-color has-small-font-size">Generación eficiente mediante 3 turbinas tipo Francis para transformar la fuerza del agua en 48.5 MW de energía limpia.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"className":"nasca-step-num"} --><p class="nasca-step-num">04</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size">Reintegro del Agua al Río</h3><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"text-muted","fontSize":"small"} --><p class="has-text-muted-color has-text-color has-small-font-size">Devolvemos el 100% del agua a su cauce natural, sin alterar sus propiedades físicas ni químicas, garantizando la preservación del ecosistema fluvial.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"className":"nasca-step-num"} --><p class="nasca-step-num">05</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size">Línea de Transmisión</h3><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"text-muted","fontSize":"small"} --><p class="has-text-muted-color has-text-color has-small-font-size">La energía renovable generada se transporta a través de una línea de 230 kV a lo largo de 31.22 km, conectando la central con la Subestación Manduriacu mediante 76 torres.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
