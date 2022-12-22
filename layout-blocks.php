<?php
/**
 * Plugin Name:       Layout-blocks
 * Plugin URI:        https://github.com/Gergab00/layout-blocks/blob/main/README.md
 * Description:       Plugin with several blocks to layout.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           1.0.0
 * Author:            Gerardo Gonzalez
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       layout-blocks
 * Update URI:        https://github.com/Gergab00/layout-blocks
 *
 * @package           layout-blocks
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */

define( 'BLOCKS_PATH', plugin_dir_path( __FILE__ ) );
define( 'BLOCKS_URL', plugin_dir_url( __FILE__ ));

require __DIR__.'/build/about-block/about-block.php';
require __DIR__.'/build/blog-block/blog-block.php';
require __DIR__.'/build/card/card.php';
require __DIR__.'/build/carousel-cell/carousel-cell.php';
require __DIR__.'/build/contact-form/contact-form.php';
require __DIR__.'/build/double-image-paragraph/double-image-paragraph.php';
require __DIR__.'/build/double-image-paragraph-right/double-image-paragraph-right.php';
require __DIR__.'/build/double-image-with-title-page-paragraph/double-image-with-title-page-paragraph.php';
require __DIR__.'/build/form-image/form-image.php';