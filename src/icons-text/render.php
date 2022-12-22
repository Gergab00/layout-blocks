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
defined( 'ABSPATH' ) || exit;

extract( $attributes );

?>

<section <?php echo get_block_wrapper_attributes(['class' => 'container-fluid d-flex justify-content-center my-md-112 my-16']); ?> data-block="icons-text">
<div class="row mw-1370 w-100 justify-content-center">
	<div class="col-md-4 left-img">
	<?php echo wp_get_attachment_image($media['id'], 'full', "", array("class" => "img-fluid")); ?>
	</div>
	<div class="col-md-8 p-md-76 p-24">
		<div class="row">
			<div class="col-md-6 row justify-content-md-start justify-content-center my-md-0 my-16">
				<div class="col-3 icon">
					<?php echo wp_get_attachment_image($icon['id'], array('77','77'), "", array("class" => "img-fluid")); ?>
				</div>
				<div class="col-9 ps-md-22 ps-16">
					<h4 class="text-dark fs-16 fw-bold"><?php echo $title; ?></h4>
					<p class="text-black fs-16"><?php echo $text; ?></p>
				</div>
			</div>
			<div class="col-md-6 row justify-content-md-start justify-content-center my-md-0 my-16">
				<div class="col-3 icon">
					<?php echo wp_get_attachment_image($icon_2['id'], array('77','77'), "", array("class" => "img-fluid")); ?>
				</div>
				<div class="col-9 ps-md-22 ps-16">
					<h4 class="text-dark fs-16 fw-bold"><?php echo $title_2; ?></h4>
					<p class="text-black fs-16"><?php echo $text_2; ?></p>
				</div>
			</div>
			<div class="col-md-6 row justify-content-md-start justify-content-center mt-md-108 mb-md-60 my-16">
				<div class="col-3 icon">
					<?php echo wp_get_attachment_image($icon_3['id'], array('77','77'), "", array("class" => "img-fluid")); ?>
				</div>
				<div class="col-9 ps-md-22 ps-16">
					<h4 class="text-dark fs-16 fw-bold"><?php echo $title_3; ?></h4>
					<p class="text-black fs-16"><?php echo $text_3; ?></p>
				</div>
			</div>
			<div class="col-md-6 row justify-content-md-start justify-content-center mt-md-108 mb-md-60 my-16">
				<div class="col-3 icon">
					<?php echo wp_get_attachment_image($icon_4['id'], array('77','77'), "", array("class" => "img-fluid")); ?>
				</div>
				<div class="col-9 ps-md-22 ps-16">
					<h4 class="text-dark fs-16 fw-bold"><?php echo $title_4; ?></h4>
					<p class="text-black fs-16"><?php echo $text_4; ?></p>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<?php echo $content; ?>
			<a href="<?php echo esc_url( get_permalink($post['id']) ); ?>" class="btn btn-outline-secondary rounded-0 fw-bold"><?php echo $text_btn; ?></a>
		</div>
	</div>
</div>
</section>