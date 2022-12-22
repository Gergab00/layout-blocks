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

$first  = mb_substr($title, 0, 1, "UTF-8");
$second = mb_substr($title_2, 0, 1, "UTF-8");
$third  = mb_substr($title_3, 0, 1, "UTF-8");
?>

<section <?php echo get_block_wrapper_attributes(['class' => $className . ' container-fluid d-flex justify-content-center']); ?> data-block="letter-cards">
<div class="row mw-1370 w-100 justify-content-center">
	<div class="col-lg-4 col-sm-6 px-24">
		<div class="card border-0 bg-transparent">
		  <div class="card-header text-dark fw-bold d-flex justify-content-center align-items-center rounded-circle shadow bg-white mx-20p"><?php echo $first; ?></div>
		  <div class="card-body text-center">
			<h3 class="card-title text-dark fs-24 fw-bold"><?php echo $title; ?></h3>
			<p class="card-text"><?php echo $text; ?></p>
		  </div>
		</div>
	</div>
	<div class="col-lg-4 col-sm-6 px-24">
		<div class="card border-0 bg-transparent">
		  <div class="card-header text-secondary fw-bold d-flex justify-content-center align-items-center rounded-circle shadow bg-white mx-20p"><?php echo $second; ?></div>
		  <div class="card-body text-center">
			<h3 class="card-title text-dark fs-24 fw-bold"><?php echo $title_2; ?></h3>
			<p class="card-text"><?php echo $text_2; ?></p>
		  </div>
		</div>
	</div>
	<div class="col-lg-4 col-sm-6 px-24">
		<div class="card border-0 bg-transparent">
		  <div class="card-header text-info fw-bold d-flex justify-content-center align-items-center rounded-circle shadow bg-white mx-20p"><?php echo $third; ?></div>
		  <div class="card-body text-center">
			<h3 class="card-title text-dark fs-24 fw-bold"><?php echo $title_3; ?></h3>
			<p class="card-text"><?php echo $text_3; ?></p>
		  </div>
		</div>
	</div>
</div>
</section>