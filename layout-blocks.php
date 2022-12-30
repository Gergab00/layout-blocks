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

define( 'PLUGINBLOCKS_PATH', plugin_dir_path( __FILE__ ) );
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
require __DIR__.'/build/header-buttons/header-buttons.php';
require __DIR__.'/build/hero-image/hero-image.php';
require __DIR__.'/build/home-header/home-header.php';
require __DIR__.'/build/icons-text/icons-text.php';
require __DIR__.'/build/industries-served/industries-served.php';
require __DIR__.'/build/letter-cards/letter-cards.php';
require __DIR__.'/build/newsletter/newsletter.php';
require __DIR__.'/build/paragraph-big-image/paragraph-big-image.php';
require __DIR__.'/build/process-section/process-section.php';
require __DIR__.'/build/project-block/project-block.php';
require __DIR__.'/build/services/services.php';
require __DIR__.'/build/slider-images/slider-images.php';
require __DIR__.'/build/table-of-content/table-of-content.php';
require __DIR__.'/build/team-faq/team-faq.php';
require __DIR__.'/build/testimonial-carousel/testimonial-carousel.php';
require __DIR__.'/build/text-form/text-form.php';
require __DIR__.'/build/why-choose-home/why-choose-home.php';