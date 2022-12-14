<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class HomeHeader {

    /**
	 * Constructor
	 */
	public static function init() {
		add_action( 'init', array( get_called_class(), 'registrer' ) );
	}

    public static function registrer()
    {
        register_block_type(
            __DIR__,
            array(
                /**
                 * Render callback function.
                 *
                 * @param array    $attributes The block attributes.
                 * @param string   $content    The block content.
                 * @param WP_Block $block      Block instance.
                 *
                 * @return string The rendered output.
                 */
                'render_callback' => function ($attributes, $content, $block) {
                    ob_start();
                    require __DIR__ . '/render.php';
                    return ob_get_clean();
                },
            ));
    }

}

$HomeHeader = new HomeHeader;
$HomeHeader::init();