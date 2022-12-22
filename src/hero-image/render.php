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
// Exit if accessed directly.
defined('ABSPATH') || exit;

extract($attributes);

?>

<style>
	.img-bg {
		background-image: url(<?php echo $media['url']; ?>);
		background-size: cover;
  		background-position: center 45%;
	}

</style>

<section <?php echo get_block_wrapper_attributes(['class' => 'img-bg px-0']); ?> data-block="hero-image">
	<div class="card position-relative bg-dark bg-opacity-75 border border-0 rounded-0 text-center vh-100 mh-600 overflow-hidden">

		<div class="card-img-overlay d-flex align-items-center justify-content-center">

		  <div class="card-body mw-800 px-16 text-white">

		  	<?php echo $content; ?>
			<a href="<?php echo esc_url( get_permalink($post['id']) ); ?>" class="btn btn-secondary rounded-0 text-white fw-bold"><?php _e( $text_btn ); ?></a>

		  </div>

		</div>

	</div>
</section>