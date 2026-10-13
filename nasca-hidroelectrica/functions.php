<?php
/**
 * Nasca Hidroeléctrica — funciones del tema.
 *
 * Tema de bloques (FSE). Aquí solo se registran estilos, categorías de patrones,
 * estilos de bloque y utilidades. Todo el contenido se edita desde el Editor del Sitio.
 *
 * @package nasca
 */

defined( 'ABSPATH' ) || exit;

define( 'NASCA_VERSION', '1.0.0' );

/**
 * Soportes del tema.
 */
function nasca_setup() {
	load_theme_textdomain( 'nasca', get_template_directory() . '/languages' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/theme.css' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	// Quita los patrones remotos de WordPress.org para mantener el editor limpio.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'nasca_setup' );

/**
 * Estilos y scripts del front.
 */
function nasca_enqueue_assets() {
	wp_enqueue_style(
		'nasca-theme',
		get_template_directory_uri() . '/assets/css/theme.css',
		array(),
		NASCA_VERSION
	);

	wp_enqueue_script(
		'nasca-theme',
		get_template_directory_uri() . '/assets/js/theme.js',
		array(),
		NASCA_VERSION,
		array( 'strategy' => 'defer', 'in_footer' => true )
	);
}
add_action( 'wp_enqueue_scripts', 'nasca_enqueue_assets' );

/**
 * Carga el script del tema también en el editor para que las pestañas de comunidades
 * se vean igual que en el front.
 */
function nasca_enqueue_editor_assets() {
	wp_enqueue_script(
		'nasca-theme-editor',
		get_template_directory_uri() . '/assets/js/theme.js',
		array(),
		NASCA_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'nasca_enqueue_editor_assets' );

/**
 * Categorías de patrones propias (aparecen en el insertador de bloques).
 */
function nasca_register_pattern_categories() {
	$categories = array(
		'nasca-home'     => __( 'Nasca · Home', 'nasca' ),
		'nasca-sections' => __( 'Nasca · Secciones', 'nasca' ),
		'nasca-cta'      => __( 'Nasca · Llamadas a la acción', 'nasca' ),
		'nasca-cards'    => __( 'Nasca · Tarjetas', 'nasca' ),
	);
	foreach ( $categories as $slug => $label ) {
		register_block_pattern_category( $slug, array( 'label' => $label ) );
	}
}
add_action( 'init', 'nasca_register_pattern_categories' );

/**
 * Estilos de bloque seleccionables desde la barra lateral del editor.
 */
function nasca_register_block_styles() {
	register_block_style( 'core/button', array(
		'name'  => 'arrow',
		'label' => __( 'Con flecha ↗', 'nasca' ),
	) );
	register_block_style( 'core/button', array(
		'name'  => 'arrow-ghost',
		'label' => __( 'Borde + flecha ↗', 'nasca' ),
	) );
	register_block_style( 'core/button', array(
		'name'  => 'link-arrow',
		'label' => __( 'Enlace con flecha →', 'nasca' ),
	) );
	register_block_style( 'core/paragraph', array(
		'name'  => 'eyebrow',
		'label' => __( 'Etiqueta de sección (— 01 / TÍTULO)', 'nasca' ),
	) );
	register_block_style( 'core/paragraph', array(
		'name'  => 'stat-label',
		'label' => __( 'Etiqueta de cifra', 'nasca' ),
	) );
	register_block_style( 'core/paragraph', array(
		'name'  => 'tag',
		'label' => __( 'Chip / etiqueta', 'nasca' ),
	) );
	register_block_style( 'core/paragraph', array(
		'name'  => 'tag-filled',
		'label' => __( 'Chip relleno', 'nasca' ),
	) );
	register_block_style( 'core/group', array(
		'name'  => 'card',
		'label' => __( 'Tarjeta', 'nasca' ),
	) );
	register_block_style( 'core/group', array(
		'name'  => 'icon-circle',
		'label' => __( 'Icono en círculo', 'nasca' ),
	) );
	register_block_style( 'core/list', array(
		'name'  => 'checks',
		'label' => __( 'Lista con ✓', 'nasca' ),
	) );
	register_block_style( 'core/list', array(
		'name'  => 'footer-links',
		'label' => __( 'Enlaces de pie', 'nasca' ),
	) );
	register_block_style( 'core/list', array(
		'name'  => 'tabs',
		'label' => __( 'Pestañas (comunidades)', 'nasca' ),
	) );
	register_block_style( 'core/heading', array(
		'name'  => 'stat',
		'label' => __( 'Cifra grande', 'nasca' ),
	) );
	register_block_style( 'core/columns', array(
		'name'  => 'timeline',
		'label' => __( 'Línea de tiempo', 'nasca' ),
	) );
	register_block_style( 'core/cover', array(
		'name'  => 'hero',
		'label' => __( 'Hero', 'nasca' ),
	) );
}
add_action( 'init', 'nasca_register_block_styles' );

/**
 * Marca el <html> con la clase "nasca" para encapsular estilos.
 */
function nasca_body_class( $classes ) {
	$classes[] = 'nasca';
	return $classes;
}
add_filter( 'body_class', 'nasca_body_class' );

/**
 * Los patrones del tema se cargan automáticamente desde /patterns.
 * Las plantillas desde /templates y las partes desde /parts.
 * No hace falta registrar nada más.
 */

/**
 * El logo de respaldo de la cabecera/pie apunta a la carpeta real del tema,
 * aunque WordPress esté instalado en un subdirectorio.
 */
function nasca_fix_fallback_logo( $block_content, $block ) {
	if ( 'core/html' === $block['blockName'] && false !== strpos( $block_content, 'nasca-logo-fallback' ) ) {
		$block_content = str_replace( '/wp-content/themes/nasca-hidroelectrica/', trailingslashit( get_template_directory_uri() ), $block_content );
		$block_content = str_replace( 'href="/"', 'href="' . esc_url( home_url( '/' ) ) . '"', $block_content );
	}
	return $block_content;
}
add_filter( 'render_block', 'nasca_fix_fallback_logo', 10, 2 );

/**
 * Al activar el tema: crea las páginas Proyecto y Transparencia (si no existen),
 * les asigna la plantilla a ancho completo y activa los enlaces permanentes.
 * Las páginas quedan 100% editables desde Páginas → Editar.
 */
function nasca_setup_pages_on_activation() {
	$pages = array(
		'proyecto'      => array( 'Proyecto y Somos', 'nasca/pagina-proyecto' ),
		'transparencia' => array( 'Transparencia y Diálogo', 'nasca/pagina-transparencia' ),
		'sostenibilidad-real' => array( 'Sostenibilidad Real', 'nasca/pagina-sostenibilidad' ),
		'contacto'      => array( 'Contacto', 'nasca/pagina-contacto' ),
	);
	// Página "Noticias" como página de entradas del blog.
	if ( ! get_page_by_path( 'noticias' ) ) {
		$blog = wp_insert_post( array( 'post_title' => 'Noticias', 'post_name' => 'noticias', 'post_type' => 'page', 'post_status' => 'publish', 'post_content' => '' ) );
		if ( $blog && ! is_wp_error( $blog ) ) {
			update_option( 'page_for_posts', $blog );
			if ( ! get_option( 'page_on_front' ) ) {
				$home = get_page_by_path( 'inicio' );
				$home_id = $home ? $home->ID : wp_insert_post( array( 'post_title' => 'Inicio', 'post_name' => 'inicio', 'post_type' => 'page', 'post_status' => 'publish', 'post_content' => '<!-- wp:pattern {"slug":"nasca/pagina-home"} /-->' ) );
				update_option( 'page_on_front', $home_id );
				update_option( 'show_on_front', 'page' );
			}
		}
	}
	foreach ( $pages as $slug => $data ) {
		if ( get_page_by_path( $slug ) ) {
			continue;
		}
		$id = wp_insert_post( array(
			'post_title'   => $data[0],
			'post_name'    => $slug,
			'post_type'    => 'page',
			'post_status'  => 'publish',
			'post_content' => '<!-- wp:pattern {"slug":"' . $data[1] . '"} /-->',
		) );
		if ( $id && ! is_wp_error( $id ) ) {
			update_post_meta( $id, '_wp_page_template', 'page-landing' );
		}
	}
	if ( ! get_option( 'permalink_structure' ) ) {
		update_option( 'permalink_structure', '/%postname%/' );
	}
	update_option( 'nasca_flush_rewrite', 1 );
}
add_action( 'after_switch_theme', 'nasca_setup_pages_on_activation' );

function nasca_maybe_flush_rewrite() {
	if ( get_option( 'nasca_flush_rewrite' ) ) {
		flush_rewrite_rules();
		delete_option( 'nasca_flush_rewrite' );
	}
}
add_action( 'init', 'nasca_maybe_flush_rewrite', 99 );

/**
 * Tipo de contenido "Comunidad": una ficha por comunidad del AID.
 * Se crean desde Comunidades → Añadir nueva. La imagen destacada es la foto del hero.
 */
function nasca_register_comunidad_cpt() {
	register_post_type( 'comunidad', array(
		'labels' => array(
			'name'          => __( 'Comunidades', 'nasca' ),
			'singular_name' => __( 'Comunidad', 'nasca' ),
			'add_new_item'  => __( 'Añadir comunidad', 'nasca' ),
			'edit_item'     => __( 'Editar comunidad', 'nasca' ),
		),
		'public'       => true,
		'has_archive'  => false,
		'rewrite'      => array( 'slug' => 'comunidades', 'with_front' => false ),
		'menu_icon'    => 'dashicons-location-alt',
		'menu_position'=> 21,
		'show_in_rest' => true,
		'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'custom-fields' ),
		'template'     => array( array( 'core/pattern', array( 'slug' => 'nasca/comunidad-contenido' ) ) ),
	) );

	// Datos clave (editables en el panel lateral "Comunidad" del editor).
	$fields = array(
		'nasca_ubicacion'  => 'Parroquia Selva Alegre, Otavalo',
		'nasca_poblacion'  => '~91 Habitantes',
		'nasca_educacion'  => 'Espacios de encuentro vecinal y vías rurales',
		'nasca_salud'      => 'Cobertura por brigadas y puestos zonales',
		'nasca_fuente'     => 'Información levantada a través de un censo comunitario en el 2026.',
		'nasca_whatsapp'   => 'https://wa.me/593000000000',
	);
	foreach ( $fields as $key => $default ) {
		register_post_meta( 'comunidad', $key, array(
			'type' => 'string', 'single' => true, 'show_in_rest' => true, 'default' => $default,
			'sanitize_callback' => 'sanitize_text_field', 'auth_callback' => function() { return current_user_can( 'edit_posts' ); },
		) );
	}
}
add_action( 'init', 'nasca_register_comunidad_cpt' );

/**
 * Shortcodes usados por la plantilla de comunidad.
 * [nasca_meta key="nasca_ubicacion"] · [nasca_comunidad_nav] (anterior / siguiente).
 */
function nasca_meta_shortcode( $atts ) {
	$atts = shortcode_atts( array( 'key' => '' ), $atts );
	return esc_html( get_post_meta( get_the_ID(), $atts['key'], true ) );
}
add_shortcode( 'nasca_meta', 'nasca_meta_shortcode' );

function nasca_comunidad_nav_shortcode() {
	$all = get_posts( array( 'post_type' => 'comunidad', 'numberposts' => -1, 'orderby' => 'menu_order title', 'order' => 'ASC', 'fields' => 'ids' ) );
	$i = array_search( get_the_ID(), $all, true );
	$n = count( $all );
	if ( false === $i || $n < 2 ) {
		$prev = $next = null;
	} else {
		$prev = $all[ ( $i - 1 + $n ) % $n ];
		$next = $all[ ( $i + 1 ) % $n ];
	}
	ob_start(); ?>
	<nav class="nasca-com-nav" aria-label="<?php esc_attr_e( 'Otras comunidades', 'nasca' ); ?>">
		<?php if ( $prev ) : ?><a class="nasca-com-prev" href="<?php echo esc_url( get_permalink( $prev ) ); ?>"><span>&larr;</span><span><small><?php esc_html_e( 'Comunidad anterior', 'nasca' ); ?></small><strong><?php echo esc_html( get_the_title( $prev ) ); ?></strong></span></a><?php else : ?><span></span><?php endif; ?>
		<a class="nasca-com-all wp-block-button__link wp-element-button nasca-arrow" href="<?php echo esc_url( home_url( '/sostenibilidad-real/#comunidades' ) ); ?>"><?php esc_html_e( 'Volver a Sostenibilidad Real (Ver las 14)', 'nasca' ); ?></a>
		<?php if ( $next ) : ?><a class="nasca-com-next" href="<?php echo esc_url( get_permalink( $next ) ); ?>"><span><small><?php esc_html_e( 'Siguiente comunidad', 'nasca' ); ?></small><strong><?php echo esc_html( get_the_title( $next ) ); ?></strong></span><span>&rarr;</span></a><?php else : ?><span></span><?php endif; ?>
	</nav>
	<?php return ob_get_clean();
}
add_shortcode( 'nasca_comunidad_nav', 'nasca_comunidad_nav_shortcode' );

/** Al activar: crea las 16 comunidades si no existen (en borrador, para que el equipo complete cada ficha). */
function nasca_create_comunidades() {
	if ( get_posts( array( 'post_type' => 'comunidad', 'numberposts' => 1, 'post_status' => 'any', 'fields' => 'ids' ) ) ) {
		return;
	}
	$names = array( 'San Francisco', 'Llurimagua', 'El Rosal', 'Limones', 'Villadorita', 'Magnolia', 'La Armenia', 'San Roque de Cajamarca', 'San Miguel del Chontal', 'El Paraíso', 'San José de Magdalena', 'El Corazón', 'Río Verde', 'Cielo Verde', 'García Moreno', 'Selva Alegre' );
	foreach ( $names as $i => $name ) {
		wp_insert_post( array(
			'post_type' => 'comunidad', 'post_title' => $name, 'post_name' => sanitize_title( $name ),
			'post_status' => 'publish', 'menu_order' => $i + 1,
			'post_content' => '<!-- wp:pattern {"slug":"nasca/comunidad-contenido"} /-->',
		) );
	}
}
add_action( 'after_switch_theme', 'nasca_create_comunidades', 20 );

/** Comunidad sin imagen destacada: usa la foto genérica del tema en el hero. */
function nasca_comunidad_default_thumbnail( $html, $post_id ) {
	if ( '' === $html && 'comunidad' === get_post_type( $post_id ) ) {
		$html = '<img class="wp-block-cover__image-background" alt="" src="' . esc_url( get_template_directory_uri() . '/assets/images/bg-comunidad-hero.jpg' ) . '" data-object-fit="cover"/>';
	}
	return $html;
}
add_filter( 'post_thumbnail_html', 'nasca_comunidad_default_thumbnail', 10, 2 );

/** Fecha en formato largo por defecto (13 de octubre de 2026) y meses en español sin paquete de idioma. */
function nasca_default_date_format() {
	if ( 'F j, Y' === get_option( 'date_format' ) ) { update_option( 'date_format', 'j \\d\\e F \\d\\e Y' ); }
}
add_action( 'after_switch_theme', 'nasca_default_date_format' );
function nasca_spanish_months( $date, $format ) {
	if ( 'es_EC' === get_locale() || 'es_ES' === get_locale() || false === strpos( get_locale(), 'es' ) ) {
		$en = array( 'January','February','March','April','May','June','July','August','September','October','November','December' );
		$es = array( 'enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre' );
		$date = str_replace( $en, $es, $date );
	}
	return $date;
}
add_filter( 'date_i18n', 'nasca_spanish_months', 10, 2 );

/** Procesa shortcodes dentro de bloques HTML y párrafos (p. ej. [nasca_meta] y [nasca_comunidad_nav]). */
function nasca_shortcodes_in_blocks( $content, $block ) {
	if ( in_array( $block['blockName'], array( 'core/html', 'core/paragraph', 'core/heading' ), true ) && false !== strpos( $content, '[nasca_' ) ) {
		$content = do_shortcode( $content );
	}
	return $content;
}
add_filter( 'render_block', 'nasca_shortcodes_in_blocks', 10, 2 );
