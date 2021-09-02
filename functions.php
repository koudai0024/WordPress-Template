<?php
/**
 * This is a file for function definition.
 *
 * File for function definition
 *
 * @package tebiki-labo
 */

?>

<?php

require_once __DIR__ . '/vendor/autoload.php';

use Jenssegers\Blade\Blade;

if ( ! function_exists( 'render_blade' ) ) {
	/**
	 * Bladeテンプレートをレンダリングする
	 *
	 * @param string $template_name テンプレ名.
	 */
	function render_blade( $template_name ) {
		$blade = new Blade( __DIR__ . '/views', __DIR__ . '/cache' );

		return $blade->make( $template_name );
	}
}
