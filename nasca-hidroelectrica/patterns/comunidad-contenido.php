<?php
/**
 * Title: Comunidad · Contenido de la ficha (Sobre, Datos clave, Aportes)
 * Slug: nasca/comunidad-contenido
 * Categories: nasca-sections
 * Block Types: core/post-content
 * Post Types: comunidad
 * Description: Cuerpo de la ficha de comunidad. Cada texto, foto y dato se edita en la propia comunidad.
 */
$base = esc_url( get_template_directory_uri() . '/assets/images/' );
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"base-2","layout":{"type":"default"}} -->
<section class="wp-block-group has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:0;padding-bottom:0;padding-left:0">
	<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:custom|gutter","right":"var:custom|gutter"}}},"layout":{"type":"constrained","contentSize":"2400px"}} -->
	<div class="wp-block-group" style="padding-left:var(--wp--custom--gutter);padding-right:var(--wp--custom--gutter)">
		<!-- wp:paragraph {"className":"is-style-eyebrow"} --><p class="is-style-eyebrow">01</p><!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"fontSize":"xx-large","style":{"spacing":{"margin":{"top":"1.5rem"}}}} --><h2 class="wp-block-heading has-xx-large-font-size" style="margin-top:1.5rem">Sobre la<br>Comunidad</h2><!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns {"verticalAlignment":"top","className":"nasca-sobre","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-top nasca-sobre" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:column {"verticalAlignment":"top","width":"44%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:44%">
			<!-- wp:html --><figure class="nasca-sobre-foto"><img src="[nasca_comunidad_foto kind=&quot;com&quot;]" alt=""/></figure><!-- /wp:html -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"top","width":"56%","style":{"spacing":{"padding":{"right":"var:custom|gutter"}}}} -->
		<div class="wp-block-column is-vertically-aligned-top" style="padding-right:var(--wp--custom--gutter);flex-basis:56%">
			<!-- wp:paragraph {"fontSize":"large","style":{"typography":{"lineHeight":"1.7"}}} --><p class="has-large-font-size" style="line-height:1.7">[nasca_descripcion]</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:custom|gutter","right":"var:custom|gutter"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained","contentSize":"2400px"}} -->
<section class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--custom--gutter)">
	<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"top","flexWrap":"wrap"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent"} --><p class="is-style-eyebrow has-accent-color has-text-color">02</p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-muted-dark","fontSize":"small"} --><p class="has-text-muted-dark-color has-text-color has-small-font-size">[nasca_meta key="nasca_fuente"]</p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:heading {"level":2,"textColor":"base","fontSize":"xx-large","style":{"spacing":{"margin":{"top":"1.5rem"}}}} --><h2 class="wp-block-heading has-base-color has-text-color has-xx-large-font-size" style="margin-top:1.5rem">Datos Clave de la<br>Comunidad</h2><!-- /wp:heading -->
	<!-- wp:separator {"className":"is-style-wide nasca-sep-dark"} --><hr class="wp-block-separator has-alpha-channel-opacity is-style-wide nasca-sep-dark"/><!-- /wp:separator -->
	<!-- wp:columns {"className":"nasca-datos","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns nasca-datos" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:html --><span class="nasca-dato-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21s7-6.5 7-11a7 7 0 1 0-14 0c0 4.5 7 11 7 11z"/><circle cx="12" cy="10" r="2.5"/></svg></span><!-- /wp:html -->
			<!-- wp:heading {"level":3,"textColor":"accent","fontSize":"x-large"} --><h3 class="wp-block-heading has-accent-color has-text-color has-x-large-font-size">[nasca_meta key="nasca_ubicacion"]</h3><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"nasca-kicker"} --><p class="nasca-kicker">Ubicación</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:html --><span class="nasca-dato-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3"/><circle cx="17" cy="9" r="2.5"/><path d="M3 19c0-3 3-5 6-5s6 2 6 5"/><path d="M15 19c0-2 2-4 5-4"/></svg></span><!-- /wp:html -->
			<!-- wp:heading {"level":3,"textColor":"accent","fontSize":"x-large"} --><h3 class="wp-block-heading has-accent-color has-text-color has-x-large-font-size">[nasca_meta key="nasca_poblacion"]</h3><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"nasca-kicker"} --><p class="nasca-kicker">Población</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:html --><span class="nasca-dato-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M2 9l10-5 10 5-10 5z"/><path d="M6 11v5c3 2 9 2 12 0v-5"/></svg></span><!-- /wp:html -->
			<!-- wp:heading {"level":3,"textColor":"accent","fontSize":"x-large"} --><h3 class="wp-block-heading has-accent-color has-text-color has-x-large-font-size">[nasca_meta key="nasca_educacion"]</h3><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"nasca-kicker"} --><p class="nasca-kicker">Educación y comunidad</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:html --><span class="nasca-dato-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21s-8-5-8-11a4 4 0 0 1 8-1 4 4 0 0 1 8 1c0 6-8 11-8 11z"/><path d="M6 12h3l1.5-3 3 6 1.5-3h3"/></svg></span><!-- /wp:html -->
			<!-- wp:heading {"level":3,"textColor":"accent","fontSize":"x-large"} --><h3 class="wp-block-heading has-accent-color has-text-color has-x-large-font-size">[nasca_meta key="nasca_salud"]</h3><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"nasca-kicker"} --><p class="nasca-kicker">Salud y bienestar</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:separator {"className":"is-style-wide nasca-sep-dark"} --><hr class="wp-block-separator has-alpha-channel-opacity is-style-wide nasca-sep-dark"/><!-- /wp:separator -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:custom|gutter","right":"var:custom|gutter"}}},"backgroundColor":"base-2","layout":{"type":"constrained","contentSize":"2400px"}} -->
<section class="wp-block-group has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--custom--gutter)">
	<!-- wp:paragraph {"className":"is-style-eyebrow"} --><p class="is-style-eyebrow">03</p><!-- /wp:paragraph -->
	<!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"margin":{"top":"1.5rem"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:1.5rem">
		<!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%">
			<!-- wp:heading {"level":2,"fontSize":"xx-large"} --><h2 class="wp-block-heading has-xx-large-font-size">Presencia y<br>Aportes en la<br>Comunidad</h2><!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%">
			<!-- wp:paragraph {"textColor":"text-muted"} --><p class="has-text-muted-color has-text-color">Iniciativas y mejoras ejecutadas en coordinación con las autoridades locales.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:columns {"className":"nasca-aportes","style":{"spacing":{"blockGap":{"left":"0"},"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns nasca-aportes" style="margin-top:var(--wp--preset--spacing--50)">
<?php
$aportes = array(
	array( 'foto-aporte-1.jpg', 'Educación e infraestructura', 'Renovación y adecuación de techados en la unidad educativa local' ),
	array( 'foto-aporte-2.jpg', 'Salud y bienestar', 'Soporte al centro de salud local con insumos y medicinas' ),
	array( 'foto-aporte-3.jpg', 'Gestión de residuos', 'Entrega de basureros para la correcta gestión de residuos' ),
);
foreach ( $aportes as $a ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} --><figure class="wp-block-image size-full"><img src="<?php echo $base . $a[0]; ?>" alt=""/></figure><!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"},"blockGap":"0.6rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
				<!-- wp:paragraph {"className":"nasca-kicker-strong","textColor":"contrast-3"} --><p class="nasca-kicker-strong has-contrast-3-color has-text-color"><?php echo esc_html( $a[1] ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"x-large"} --><h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html( $a[2] ); ?></h3><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"nasca-readmore","fontSize":"small"} --><p class="nasca-readmore has-small-font-size"><a class="nasca-arrow" href="/noticias/">Leer más</a></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
