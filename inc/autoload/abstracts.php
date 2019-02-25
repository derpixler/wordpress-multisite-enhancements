<?php
namespace Bueltge\Multisite_Enhancement;

class Abstracts {

	/**
	 * @var string
	 */
	private $suffix;

	/**
	 * @return string
	 */
	public function getSuffix() {
		return $this->suffix;
	}

	/**
	 * @param string $suffix
	 */
	public function setSuffix($suffix) {
		$this->suffix = !empty($suffix) ? (string) $suffix : defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	}

	public function bootstrap($class, $namcespace = '') {
		$class =

		$fpul = new Foldable_Plugin_Usage_List();
		$fpul->init();
	}

	/**
	 * Enqueue admin styles
	 */
	public function admin_enqueue_style($enqeue_name) {
		wp_register_style(
			$enqeue_name,
			plugins_url( MULTISITE_ENHANCEMENT_ASSETS . 'css/' . $enqeue_name . $this->getSuffix() . '.css', MULTISITE_ENHANCEMENT_BASE ),
			false );

		wp_enqueue_style( $enqeue_name );
	}
}
