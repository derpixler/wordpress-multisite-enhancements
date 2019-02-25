<?php
namespace Bueltge\Foldable_Plugin_Usage_List;

use Bueltge\Multisite_Enhancement\Abstracts;

add_action('admin_init', __NAMESPACE__ . '\\bootstrap' );

/**
 * Create the instance of this class.
 */
function bootstrap() {
	$fpul = new Foldable_Plugin_Usage_List();
	$fpul->init();
}

class Foldable_Plugin_Usage_List extends Abstracts {

	private $enqeue_name = 'foldable-plugin-usage-list';

	public function __construct() {
		$
	}

	/**
	 * Init function to register all used hooks.
	 *
	 */
	public function init() {
		add_action( 'admin_enqueue_scripts', function() {
			$this->admin_enqueue_style($this->enqeue_name);
		} );
	}

}
