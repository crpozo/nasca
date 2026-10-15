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
	$noticias = get_page_by_path( 'noticias' );
	if ( $noticias && (int) get_option( 'page_for_posts' ) !== (int) $noticias->ID ) {
		update_option( 'page_for_posts', $noticias->ID );
		update_option( 'show_on_front', 'page' );
	}
	if ( ! $noticias ) {
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

/**
 * Si el tema se actualiza reemplazando la versión anterior (sin desactivarlo), WordPress no dispara
 * la activación. Por eso, cuando cambia la versión del tema se vuelve a ejecutar la configuración:
 * crea las páginas y comunidades que falten, ajusta enlaces permanentes y descarga fotos.
 */
function nasca_ensure_setup() {
	$version = wp_get_theme( get_template() )->get( 'Version' );
	if ( get_option( 'nasca_setup_version' ) === $version ) {
		return;
	}
	update_option( 'nasca_setup_version', $version );
	do_action( 'after_switch_theme', get_stylesheet(), wp_get_theme() );
}
add_action( 'admin_init', 'nasca_ensure_setup', 5 );
add_action( 'template_redirect', 'nasca_ensure_setup', 5 );

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

/** Al activar: crea las fichas de comunidad con sus textos, datos clave y foto (si no existen). */
function nasca_create_comunidades() {
	if ( get_posts( array( 'post_type' => 'comunidad', 'numberposts' => 1, 'post_status' => 'any', 'fields' => 'ids' ) ) ) {
		return;
	}
	$data = include get_template_directory() . '/inc-comunidades.php';
	foreach ( $data as $i => $c ) {
		list( $name, $desc, $ubic, $pobl, $educ, $salud ) = $c;
		$slug = sanitize_title( $name );
		$id = wp_insert_post( array(
			'post_type' => 'comunidad', 'post_title' => $name, 'post_name' => $slug,
			'post_status' => 'publish', 'menu_order' => $i + 1, 'post_excerpt' => $desc,
			'post_content' => '<!-- wp:pattern {"slug":"nasca/comunidad-contenido"} /-->',
		) );
		if ( ! $id || is_wp_error( $id ) ) { continue; }
		update_post_meta( $id, 'nasca_ubicacion', $ubic );
		update_post_meta( $id, 'nasca_poblacion', $pobl );
		update_post_meta( $id, 'nasca_educacion', $educ );
		update_post_meta( $id, 'nasca_salud', $salud );
	}
}
add_action( 'after_switch_theme', 'nasca_create_comunidades', 20 );

/** Foto de la comunidad: la imagen destacada si existe; si no, la foto del tema con el mismo slug; si no, la genérica. */
function nasca_comunidad_image_url( $post_id, $kind = 'hero' ) {
	if ( has_post_thumbnail( $post_id ) ) {
		return get_the_post_thumbnail_url( $post_id, 'full' );
	}
	return nasca_comunidad_image_url_by_slug( get_post_field( 'post_name', $post_id ), $kind );
}

/** Misma lógica, a partir del slug de la comunidad. */
function nasca_comunidad_image_url_by_slug( $slug, $kind = 'hero' ) {
	$file = '/assets/images/' . $kind . '-' . $slug . '.jpg';
	if ( file_exists( get_template_directory() . $file ) ) {
		return get_template_directory_uri() . $file;
	}
	if ( in_array( $kind . '-' . $slug . '.jpg', nasca_missing_images(), true ) ) {
		return nasca_missing_image_url( $kind . '-' . $slug . '.jpg' ); // Desde Medios o desde el repositorio.
	}
	return get_template_directory_uri() . '/assets/images/bg-comunidad-hero.jpg';
}

/** Origen de las fotos que no viajan dentro del zip. */
if ( ! defined( 'NASCA_REMOTE_ASSETS' ) ) define( 'NASCA_REMOTE_ASSETS', 'https://raw.githubusercontent.com/crpozo/nasca/refs/heads/claude/epic-galileo-scawc6/nasca-hidroelectrica' );

/** Descarga un archivo remoto al tema (una sola vez). Devuelve true si quedó guardado localmente. */
function nasca_fetch_remote_asset( $url, $dest ) {
	$key = 'nasca_remote_' . md5( $url );
	if ( 'fail' === get_transient( $key ) ) {
		return false;
	}
	$dir = dirname( $dest );
	if ( ! wp_is_writable( $dir ) ) {
		set_transient( $key, 'ok', DAY_IN_SECONDS ); // No se puede escribir: se usará la URL remota.
		return false;
	}
	$res = wp_remote_get( $url, array( 'timeout' => 20 ) );
	if ( is_wp_error( $res ) || 200 !== wp_remote_retrieve_response_code( $res ) ) {
		set_transient( $key, 'fail', HOUR_IN_SECONDS );
		return false;
	}
	$body = wp_remote_retrieve_body( $res );
	$es_jpeg = "\xFF\xD8" === substr( $body, 0, 2 );
	if ( strlen( $body ) < 1000 || ! $es_jpeg || false === file_put_contents( $dest, $body ) ) {
		set_transient( $key, 'fail', HOUR_IN_SECONDS );
		return false;
	}
	return true;
}

/**
 * Busca una foto del tema en la Biblioteca de medios (subida con el mismo nombre de archivo).
 * Si la encuentra la copia a assets/images y devuelve la ruta local; si no puede copiar, devuelve su URL.
 */
function nasca_image_from_media( $name ) {
	global $wpdb;
	static $cache = array();
	if ( array_key_exists( $name, $cache ) ) {
		return $cache[ $name ];
	}
	$base = preg_replace( '/\\.jpg$/', '', $name );
	$row  = $wpdb->get_row( $wpdb->prepare(
		"SELECT post_id, meta_value FROM {$wpdb->postmeta} WHERE meta_key = '_wp_attached_file' AND ( meta_value LIKE %s OR meta_value LIKE %s OR meta_value LIKE %s ) ORDER BY post_id DESC LIMIT 1",
		'%/' . $wpdb->esc_like( $name ),
		'%/' . $wpdb->esc_like( $base ) . '-%.jpg',
		'%/' . $wpdb->esc_like( $base ) . '.jpeg'
	) );
	if ( ! $row ) {
		return $cache[ $name ] = '';
	}
	$uploads = wp_get_upload_dir();
	$src     = trailingslashit( $uploads['basedir'] ) . $row->meta_value;
	$dest    = get_template_directory() . '/assets/images/' . $name;
	if ( file_exists( $src ) && wp_is_writable( dirname( $dest ) ) && @copy( $src, $dest ) ) {
		return $cache[ $name ] = get_template_directory_uri() . '/assets/images/' . $name;
	}
	return $cache[ $name ] = trailingslashit( $uploads['baseurl'] ) . $row->meta_value;
}

/** URL a usar para una foto que no está en assets/images: la de Medios si existe, si no la del repositorio. */
function nasca_missing_image_url( $name ) {
	$media = nasca_image_from_media( $name );
	return $media ? $media : NASCA_REMOTE_ASSETS . '/assets/images/' . $name;
}

/** Fotos del manifiesto que todavía no están en assets/images. */
function nasca_missing_images() {
	static $missing = null;
	if ( null !== $missing ) {
		return $missing;
	}
	$missing = array();
	if ( get_transient( 'nasca_images_complete' ) ) {
		return $missing;
	}
	$dir = get_template_directory() . '/assets/images/';
	foreach ( (array) include get_template_directory() . '/inc-imagenes.php' as $name ) {
		$f = $dir . $name;
		if ( ! file_exists( $f ) ) {
			$missing[] = $name;
		} elseif ( filesize( $f ) < 1000 || "\xFF\xD8" !== file_get_contents( $f, false, null, 0, 2 ) ) {
			@unlink( $f );
			$missing[] = $name;
		}
	}
	if ( empty( $missing ) ) {
		set_transient( 'nasca_images_complete', 1, WEEK_IN_SECONDS );
	}
	return $missing;
}

/** Descarga hasta $max fotos faltantes en esta petición. */
function nasca_fetch_missing_images( $max = 3 ) {
	$missing = nasca_missing_images();
	if ( empty( $missing ) || get_transient( 'nasca_images_lock' ) ) {
		return;
	}
	set_transient( 'nasca_images_lock', 1, 30 );
	$dir = get_template_directory() . '/assets/images/';
	$n   = 0;
	foreach ( $missing as $name ) {
		if ( $n >= $max ) {
			break;
		}
		if ( nasca_image_from_media( $name ) && file_exists( $dir . $name ) ) {
			continue; // Copiada desde la Biblioteca de medios.
		}
		if ( nasca_fetch_remote_asset( NASCA_REMOTE_ASSETS . '/assets/images/' . $name, $dir . $name ) ) {
			$n++;
		}
	}
	delete_transient( 'nasca_images_lock' );
}
add_action( 'after_switch_theme', function () { nasca_fetch_missing_images( 12 ); }, 30 );
add_action( 'admin_init', function () { nasca_fetch_missing_images( 6 ); } );
add_action( 'template_redirect', function () { nasca_fetch_missing_images( 3 ); } );

/** Mientras una foto no esté en el servidor, se muestra directamente desde el repositorio. */
function nasca_remote_image_fallback( $html ) {
	$missing = nasca_missing_images();
	if ( empty( $missing ) || ! is_string( $html ) || false === strpos( $html, '/assets/images/' ) ) {
		return $html;
	}
	$local = get_template_directory_uri() . '/assets/images/';
	foreach ( $missing as $name ) {
		$html = str_replace( $local . $name, nasca_missing_image_url( $name ), $html );
	}
	return $html;
}
add_filter( 'render_block', 'nasca_remote_image_fallback', 20 );
add_filter( 'the_content', 'nasca_remote_image_fallback', 20 );

/** [nasca_comunidad_foto kind="com|hero"] y [nasca_descripcion] (texto del extracto). */
add_shortcode( 'nasca_comunidad_foto', function( $a ) { $a = shortcode_atts( array( 'kind' => 'hero' ), $a ); return esc_url( nasca_comunidad_image_url( get_the_ID(), $a['kind'] ) ); } );
add_shortcode( 'nasca_descripcion', function() { $e = get_post_field( 'post_excerpt', get_the_ID() ); return $e ? esc_html( $e ) : ''; } );
/** Hero de la ficha: inyecta la foto (destacada o del tema). */
function nasca_comunidad_hero_image( $content, $block ) {
	if ( 'core/cover' === $block['blockName'] && ! empty( $block['attrs']['className'] ) && false !== strpos( $block['attrs']['className'], 'nasca-com-hero' ) && is_singular( 'comunidad' ) && false === strpos( $content, 'wp-block-cover__image-background' ) ) {
		$img = '<img class="wp-block-cover__image-background" alt="" src="' . esc_url( nasca_comunidad_image_url( get_the_ID(), 'hero' ) ) . '" data-object-fit="cover"/>';
		$content = preg_replace( '/(<div class="wp-block-cover[^"]*"[^>]*>)/', '$1' . $img, $content, 1 );
	}
	return $content;
}
add_filter( 'render_block', 'nasca_comunidad_hero_image', 9, 2 );


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
		$content = preg_replace_callback( '/\[nasca_[^\]]*\]/', function( $m ) { return do_shortcode( str_replace( '&quot;', '"', $m[0] ) ); }, $content );
	}
	return $content;
}
add_filter( 'render_block', 'nasca_shortcodes_in_blocks', 10, 2 );

/** [nasca_title]: título de la entrada actual en texto plano. */
function nasca_title_shortcode() { return esc_html( get_the_title() ); }
add_shortcode( 'nasca_title', 'nasca_title_shortcode' );
