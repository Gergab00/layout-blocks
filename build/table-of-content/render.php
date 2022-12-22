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
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

extract( $attributes );

?>

<section <?php echo get_block_wrapper_attributes(['class' => 'my-class']); ?> data-block="table-of-content">
	<?php self::load_filters(); ?>
</section>