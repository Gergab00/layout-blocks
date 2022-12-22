<?php
/**
 * 
 * 
 * @author Gerardo Gonzalez
 * @version 1.0.0
 * @since 1.0.0
 * @package layout-blocks
 * 
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

extract( $attributes );

?>

<form <?php echo get_block_wrapper_attributes(['class' => 'row needs-validation ps-md-60']); ?> id="newsletter" action="" novalidate data-block="newsletter">
	<?php echo $content; ?>
	<input type="hidden" name="action" value="newsletter">
	<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
	<input type="text" class="form-control rounded-0 my-6" id="email" name="email" placeholder="Email" required>
	<button class="btn btn-secondary rounded-0 my-6" type="submit" id="newsletterBtn">SUBSCRIBE</button>
	<div class="frm-message alert d-none" role="alert">
		A simple dark alert—check it out!
	</div>
</form>