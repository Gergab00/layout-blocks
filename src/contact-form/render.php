<?php
/**
 * 
 * 
 * @author Gerardo Gonzalez
 * @version 1.0.0
 * @since 1.0.0
 * @package portafolio-theme
 * 
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

extract( $attributes );

?>

<section <?php echo get_block_wrapper_attributes(['class' => 'container-fluid d-flex flex-column align-items-center']); ?> data-block="contact-form">

<div class="row mw-1370 w-100 mt-md-108 mt-32">
	<div class="col-md-6 d-flex flex-column align-items-start justify-content-start pe-lg-100">
		<?php echo $content; ?>
	</div>
	<div class="col-md-6">
		<form class="row" id="contact_form" action="">
		<div class="col-md-6 ps-16 pb-32">
				<label for="name" class="form-label text-white">Name</label>
				<input type="text" class="form-control" id="name">
			</div>
			<div class="col-md-6 ps-16 pb-32">
				<label for="lastname" class="form-label text-white">Last Name</label>
				<input type="text" class="form-control" id="lastname">
			</div>			
			<div class="col-md-6 ps-16 py-32">
				<label for="email" class="form-label text-white">Email</label>
				<input type="email" class="form-control" id="email">
			</div>
			<div class="col-md-6 ps-16 py-32">
				<label for="phone" class="form-label text-white">Phone Number</label>
				<input type="tel" class="form-control" id="phone">
			</div>
			<div class="col-md-12 ps-16 py-32">
				<label for="message" class="form-label text-white">Message</label>
				<textarea class="form-control" id="message" rows="3"></textarea>
			</div>
	
			<div class="frm-message alert d-none my-16" role="alert">
  				A simple dark alert—check it out!
			</div>
			<div class="col-md-12 d-flex justify-content-end">
				<input id="submit" class="btn btn-secondary rounded-0 text-white fw-bold my-16" type="submit" name="submit" value="Send">
			</div>
		</form>
	</div>
</div>
	
</section>