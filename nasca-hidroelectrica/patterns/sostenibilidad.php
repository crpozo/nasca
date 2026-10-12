<?php
/**
 * Title: 02 · Sostenibilidad Real (mapa + comunidades + ejes)
 * Slug: nasca/sostenibilidad
 * Categories: nasca-home, nasca-sections
 * Description: Título grande, mapa ilustrativo de las 14 comunidades, tarjeta de comunidad con pestañas, ejes ambiental y social y botón.
 */
$map = esc_url( get_template_directory_uri() . '/assets/images/mapa-intag.svg' );
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:custom|gutter","right":"var:custom|gutter"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"1800px"}} -->
<section id="comunidades" class="wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--custom--gutter);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--custom--gutter)">

	<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
	<p class="is-style-eyebrow">02 / Sostenibilidad Real</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":2,"fontSize":"display","style":{"spacing":{"margin":{"top":"1rem"}}}} -->
	<h2 class="wp-block-heading has-display-font-size" style="margin-top:1rem">Presencia<br>constante.<br>Diálogo abierto.</h2>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"1.5rem"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group" style="margin-top:1.5rem">
		<!-- wp:paragraph {"textColor":"text-muted","fontSize":"large","style":{"typography":{"fontWeight":"300"}}} -->
		<p class="has-text-muted-color has-text-color has-large-font-size" style="font-weight:300">Trabajo conjunto en las 14 comunidades del Valle de Intag.</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"nasca-underline-link"} -->
		<p class="nasca-underline-link"><a href="/sostenibilidad-real/#comunidades">Explorar comunidades</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":{"left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--40)">

		<!-- wp:column {"width":"43%"} -->
		<div class="wp-block-column" style="flex-basis:43%">
			<!-- wp:group {"className":"nasca-map nasca-fill","style":{"spacing":{"padding":{"top":"2.5rem","bottom":"2rem","left":"2.5rem","right":"2.5rem"}},"border":{"radius":"14px"}},"backgroundColor":"contrast-3","layout":{"type":"default"}} -->
			<div class="wp-block-group nasca-map nasca-fill has-contrast-3-background-color has-background" style="border-radius:14px;padding-top:2.5rem;padding-right:2.5rem;padding-bottom:2rem;padding-left:2.5rem">
				<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"className":"is-style-stat-label","textColor":"accent","style":{"spacing":{"margin":{"top":"0"}}}} --><p class="is-style-stat-label has-accent-color has-text-color" style="margin-top:0">Valle de Intag · 14 comunidades</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"is-style-tag-filled"} --><p class="is-style-tag-filled">AID</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo $map; ?>" alt="Esquema ilustrativo de las 14 comunidades del Valle de Intag"/></figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"fontSize":"x-small","style":{"color":{"text":"#6f8c78"}}} --><p class="has-text-color has-x-small-font-size" style="color:#6f8c78">Esquema ilustrativo. No representa ubicación ni escala geográfica exacta.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"57%"} -->
		<div class="wp-block-column" style="flex-basis:57%">
			<!-- wp:group {"className":"is-style-card nasca-tabs-wrap nasca-fill","style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem","left":"3rem","right":"3rem"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card nasca-tabs-wrap nasca-fill" style="padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem">

				<!-- wp:group {"className":"nasca-community-panel","layout":{"type":"default"}} -->
				<div class="wp-block-group nasca-community-panel">
					<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center","flexWrap":"wrap"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3,"fontSize":"xx-large"} --><h3 class="wp-block-heading has-xx-large-font-size">Cielo Verde</h3><!-- /wp:heading -->
						<!-- wp:paragraph {"className":"is-style-tag","backgroundColor":"accent-2","textColor":"contrast-3","style":{"typography":{"textTransform":"none","letterSpacing":"0"}}} --><p class="is-style-tag has-contrast-3-color has-accent-2-background-color has-text-color has-background" style="letter-spacing:0;text-transform:none">85% de las personas censadas</p><!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"style":{"spacing":{"margin":{"top":"1rem"},"blockGap":"0.5rem"}},"layout":{"type":"flex"}} -->
					<div class="wp-block-group" style="margin-top:1rem">
						<!-- wp:paragraph {"className":"is-style-tag-filled"} --><p class="is-style-tag-filled">Comunidad AID</p><!-- /wp:paragraph -->
						<!-- wp:paragraph {"className":"is-style-tag"} --><p class="is-style-tag">Zona técnica</p><!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:paragraph {"className":"is-style-stat-label","textColor":"contrast-3","style":{"spacing":{"margin":{"top":"2rem"}}}} --><p class="is-style-stat-label has-contrast-3-color has-text-color" style="margin-top:2rem">Estado del censo socioeconómico</p><!-- /wp:paragraph -->
					<!-- wp:html -->
					<div class="nasca-progress" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="--value:85%"><span></span></div>
					<!-- /wp:html -->
					<!-- wp:columns -->
					<div class="wp-block-columns">
						<!-- wp:column -->
						<div class="wp-block-column">
							<!-- wp:heading {"level":4,"className":"is-style-stat","textColor":"primary"} --><h4 class="wp-block-heading is-style-stat has-primary-color has-text-color">12</h4><!-- /wp:heading -->
							<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"1rem"}}}} --><p style="margin-top:1rem;font-weight:700">Mingas 2026 realizadas</p><!-- /wp:paragraph -->
						</div>
						<!-- /wp:column -->
						<!-- wp:column {"className":"nasca-divider-left"} -->
						<div class="wp-block-column nasca-divider-left">
							<!-- wp:heading {"level":4,"className":"is-style-stat","textColor":"primary"} --><h4 class="wp-block-heading is-style-stat has-primary-color has-text-color">3</h4><!-- /wp:heading -->
							<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"1rem"}}}} --><p style="margin-top:1rem;font-weight:700">Proyectos activos</p><!-- /wp:paragraph -->
						</div>
						<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->
					<!-- wp:separator {"className":"is-style-wide"} --><hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/><!-- /wp:separator -->
					<!-- wp:paragraph --><p>Acuerdos locales</p><!-- /wp:paragraph -->
					<!-- wp:list {"className":"is-style-checks"} -->
					<ul class="wp-block-list is-style-checks">
						<!-- wp:list-item --><li>Programa de Reforestación Nativa</li><!-- /wp:list-item -->
						<!-- wp:list-item --><li>Priorización de Mano de Obra</li><!-- /wp:list-item -->
					</ul>
					<!-- /wp:list -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"nasca-community-panel","layout":{"type":"default"}} -->
				<div class="wp-block-group nasca-community-panel">
					<!-- wp:heading {"level":3,"fontSize":"xx-large"} --><h3 class="wp-block-heading has-xx-large-font-size">El Rosal</h3><!-- /wp:heading -->
					<!-- wp:paragraph {"className":"is-style-stat-label","textColor":"contrast-3","style":{"spacing":{"margin":{"top":"2rem"}}}} --><p class="is-style-stat-label has-contrast-3-color has-text-color" style="margin-top:2rem">Estado del censo socioeconómico</p><!-- /wp:paragraph -->
					<!-- wp:html --><div class="nasca-progress" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="--value:60%"><span></span></div><!-- /wp:html -->
					<!-- wp:paragraph {"textColor":"text-muted"} --><p class="has-text-muted-color has-text-color">Edita este panel con la información de la comunidad.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"nasca-community-panel","layout":{"type":"default"}} -->
				<div class="wp-block-group nasca-community-panel">
					<!-- wp:heading {"level":3,"fontSize":"xx-large"} --><h3 class="wp-block-heading has-xx-large-font-size">Santa Rosa</h3><!-- /wp:heading -->
					<!-- wp:paragraph {"className":"is-style-stat-label","textColor":"contrast-3","style":{"spacing":{"margin":{"top":"2rem"}}}} --><p class="is-style-stat-label has-contrast-3-color has-text-color" style="margin-top:2rem">Estado del censo socioeconómico</p><!-- /wp:paragraph -->
					<!-- wp:html --><div class="nasca-progress" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="--value:40%"><span></span></div><!-- /wp:html -->
					<!-- wp:paragraph {"textColor":"text-muted"} --><p class="has-text-muted-color has-text-color">Edita este panel con la información de la comunidad.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"nasca-community-panel","layout":{"type":"default"}} -->
				<div class="wp-block-group nasca-community-panel">
					<!-- wp:heading {"level":3,"fontSize":"xx-large"} --><h3 class="wp-block-heading has-xx-large-font-size">San Francisco</h3><!-- /wp:heading -->
					<!-- wp:paragraph {"className":"is-style-stat-label","textColor":"contrast-3","style":{"spacing":{"margin":{"top":"2rem"}}}} --><p class="is-style-stat-label has-contrast-3-color has-text-color" style="margin-top:2rem">Estado del censo socioeconómico</p><!-- /wp:paragraph -->
					<!-- wp:html --><div class="nasca-progress" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="--value:50%"><span></span></div><!-- /wp:html -->
					<!-- wp:paragraph {"textColor":"text-muted"} --><p class="has-text-muted-color has-text-color">Edita este panel con la información de la comunidad.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:list {"className":"is-style-tabs","style":{"spacing":{"margin":{"top":"2rem"}}}} -->
				<ul class="wp-block-list is-style-tabs" style="margin-top:2rem">
					<!-- wp:list-item {"className":"is-active"} --><li class="is-active"><a href="#cielo-verde">Cielo Verde</a></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><a href="#el-rosal">El Rosal</a></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><a href="#santa-rosa">Santa Rosa</a></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><a href="#san-francisco">San Francisco</a></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong><a href="/sostenibilidad-real/#comunidades">+10 más</a></strong></li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"},"blockGap":{"left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--30)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"2.5rem","bottom":"2.5rem","left":"2.5rem","right":"2.5rem"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card" style="padding-top:2.5rem;padding-right:2.5rem;padding-bottom:2.5rem;padding-left:2.5rem">
				<!-- wp:group {"layout":{"type":"flex","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"1.25rem"}}} -->
				<div class="wp-block-group">
					<!-- wp:group {"className":"is-style-icon-circle is-small","backgroundColor":"accent-2","layout":{"type":"default"}} -->
					<div class="wp-block-group is-style-icon-circle is-small has-accent-2-background-color has-background">
						<!-- wp:html --><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 20c0-7 4-13 14-14-1 10-6 14-14 14z"/><path d="M5 20c3-4 6-7 10-9"/></svg><!-- /wp:html -->
					</div>
					<!-- /wp:group -->
					<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Eje ambiental</h3><!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
				<!-- wp:paragraph {"textColor":"text-muted","style":{"spacing":{"margin":{"top":"1.25rem"}}}} --><p class="has-text-muted-color has-text-color" style="margin-top:1.25rem">Reforestación, monitoreo fluvial y protección de cuencas.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"2.5rem","bottom":"2.5rem","left":"2.5rem","right":"2.5rem"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card" style="padding-top:2.5rem;padding-right:2.5rem;padding-bottom:2.5rem;padding-left:2.5rem">
				<!-- wp:group {"layout":{"type":"flex","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"1.25rem"}}} -->
				<div class="wp-block-group">
					<!-- wp:group {"className":"is-style-icon-circle is-small","layout":{"type":"default"}} -->
					<div class="wp-block-group is-style-icon-circle is-small">
						<!-- wp:html --><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="9" cy="8" r="3"/><circle cx="17" cy="9" r="2.5"/><path d="M3 19c0-3 3-5 6-5s6 2 6 5"/><path d="M15 19c0-2 2-4 5-4 1 0 1 0 1 1"/></svg><!-- /wp:html -->
					</div>
					<!-- /wp:group -->
					<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Eje social</h3><!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
				<!-- wp:paragraph {"textColor":"text-muted","style":{"spacing":{"margin":{"top":"1.25rem"}}}} --><p class="has-text-muted-color has-text-color" style="margin-top:1.25rem">Mano de obra local, compras en territorio y desarrollo productivo.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:button {"className":"is-style-arrow","backgroundColor":"primary","textColor":"accent"} -->
		<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link has-accent-color has-primary-background-color has-text-color has-background wp-element-button" href="/sostenibilidad-real/">Explora las 14 comunidades y la Sostenibilidad Real</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</section>
<!-- /wp:group -->
