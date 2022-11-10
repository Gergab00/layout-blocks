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
function layout_blocks_layout_blocks_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'layout_blocks_layout_blocks_block_init' );
