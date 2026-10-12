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
