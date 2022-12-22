<?php
/**
 *
 *
 * @author Gerardo Gonzalez
 * @version 0.9.0
 * @since 0.9.0
 * @package layout-blocks
 *
 */

/**
 * copy this line into block.php -> require __DIR__.'/build/hero-image/hero-image.php';
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

class HeroImageBlock
{

    /**
     * Constructor
     */
    public static function init()
    {
        add_action('init', array(get_called_class(), 'registrer'));
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

HeroImageBlock::init();
