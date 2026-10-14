<?php
/**
 * Plugin Name: Instalador del tema Nasca
 * Description: Descarga e instala el tema "Nasca Hidroeléctrica" desde GitHub sin pasar por el límite de subida del servidor. Actívalo y luego puedes borrarlo.
 * Version: 1.0.0
 * Author: MindfulTech
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( ! defined( 'NASCA_THEME_ZIP_URL' ) ) {
	define( 'NASCA_THEME_ZIP_URL', 'https://raw.githubusercontent.com/crpozo/nasca/refs/heads/claude/epic-galileo-scawc6/nasca-hidroelectrica.zip' );
}
define( 'NASCA_THEME_ZIP_URL_ALT', 'https://crpozo.github.io/nasca/nasca-hidroelectrica.zip' );
define( 'NASCA_THEME_SLUG', 'nasca-hidroelectrica' );

/** Al activar: instala y registra el resultado para mostrarlo como aviso. */
register_activation_hook( __FILE__, function () {
	update_option( 'nasca_instalador_resultado', nasca_instalador_instalar(), false );
} );

/** Descarga el zip, lo descomprime en wp-content/themes y activa el tema. */
function nasca_instalador_instalar() {
	require_once ABSPATH . 'wp-admin/includes/file.php';
	@set_time_limit( 300 );
	@ini_set( 'memory_limit', '256M' );

	$tmp = download_url( NASCA_THEME_ZIP_URL, 240 );
	if ( is_wp_error( $tmp ) ) {
		$tmp = download_url( NASCA_THEME_ZIP_URL_ALT, 240 );
	}
	if ( is_wp_error( $tmp ) ) {
		return array( 'ok' => false, 'msg' => 'No se pudo descargar el tema: ' . $tmp->get_error_message() );
	}

	WP_Filesystem();
	global $wp_filesystem;
	$themes_dir = get_theme_root();
	$dest       = trailingslashit( $themes_dir ) . NASCA_THEME_SLUG;

	if ( $wp_filesystem->is_dir( $dest ) ) {
		$wp_filesystem->delete( $dest, true );
	}
	$res = unzip_file( $tmp, $themes_dir );
	@unlink( $tmp );
	if ( is_wp_error( $res ) ) {
		return array( 'ok' => false, 'msg' => 'No se pudo descomprimir el tema: ' . $res->get_error_message() );
	}
	if ( ! file_exists( $dest . '/style.css' ) ) {
		return array( 'ok' => false, 'msg' => 'El zip se descomprimió pero no se encontró el tema en ' . $dest );
	}

	wp_clean_themes_cache();
	$theme = wp_get_theme( NASCA_THEME_SLUG );
	if ( ! $theme->exists() ) {
		return array( 'ok' => false, 'msg' => 'WordPress no reconoce el tema instalado.' );
	}
	switch_theme( NASCA_THEME_SLUG );
	return array( 'ok' => true, 'msg' => 'Tema "Nasca Hidroeléctrica" instalado y activado. Las páginas y comunidades se crean automáticamente. Ya puedes borrar este plugin.' );
}

/** Aviso con el resultado y botón para reintentar. */
add_action( 'admin_notices', function () {
	$r = get_option( 'nasca_instalador_resultado' );
	if ( ! $r ) { return; }
	$class = $r['ok'] ? 'notice-success' : 'notice-error';
	echo '<div class="notice ' . esc_attr( $class ) . ' is-dismissible"><p><strong>Instalador Nasca:</strong> ' . esc_html( $r['msg'] ) . '</p>';
	if ( ! $r['ok'] ) {
		$url = wp_nonce_url( admin_url( 'plugins.php?nasca_reintentar=1' ), 'nasca_reintentar' );
		echo '<p><a class="button button-primary" href="' . esc_url( $url ) . '">Reintentar instalación</a></p>';
	}
	echo '</div>';
	if ( $r['ok'] ) { delete_option( 'nasca_instalador_resultado' ); }
} );

add_action( 'admin_init', function () {
	if ( isset( $_GET['nasca_reintentar'] ) && current_user_can( 'install_themes' ) && check_admin_referer( 'nasca_reintentar' ) ) {
		update_option( 'nasca_instalador_resultado', nasca_instalador_instalar(), false );
		wp_safe_redirect( admin_url( 'plugins.php' ) );
		exit;
	}
} );
