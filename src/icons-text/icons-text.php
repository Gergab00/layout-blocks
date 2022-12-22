<?php
/**
 * 
 * 
 * @author the Understrap Contributors
 * @version 1.1.0
 * @since 1.1.0
 * @package understrap-framework-theme
 * 
 */

 /**
  * copy this line into block.php -> require __DIR__.'/build/icons-text/icons-text.php';
  */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class IconsWithText {

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
                'render_callback' => array(get_called_class(), 'renderBlock'),
            ));
    }

    public static function renderBlock($attributes, $content, $block)
    {
        ob_start();
        require __DIR__ . '/render.php';
        return ob_get_clean();
    }

}

IconsWithText::init();