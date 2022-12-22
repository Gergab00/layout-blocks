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

<section <?php echo get_block_wrapper_attributes(['class' => 'container-fluid d-flex justify-content-center']); ?>
    data-block="process-section">
    <div class="row mw-1370 w-100 justify-content-center">
        <h2 class="text-dark text-center fs-34 fw-bold mb-md-80 mb-16"><?php echo $title; ?></h2>

        <div class="position-relative m-4 mb-md-160 mb-sm-80 w-85 d-sm-block d-none">
            <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-secondary" role="progressbar" aria-label="Progress" style="width: 100%;"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <button type="button"
                class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-secondary rounded-pill fs-54 text-white font-montserrat"
                style="width: 120px; height:120px;">1</button>
            <p class="position-absolute top-0 start-0 translate-middle mt-96 text-dark fw-bold">Lorem Ipsum</p>
            <button type="button"
                class="position-absolute top-0 start-33 translate-middle btn btn-sm btn-secondary rounded-pill fs-54 text-white font-montserrat"
                style="width: 120px; height:120px;">2</button>
            <p class="position-absolute top-0 start-33 translate-middle mt-96 text-dark fw-bold">Lorem Ipsum</p>
            <button type="button"
                class="position-absolute top-0 start-66 translate-middle btn btn-sm btn-secondary rounded-pill fs-54 text-white font-montserrat"
                style="width: 120px; height:120px;">3</button>
            <p class="position-absolute top-0 start-66 translate-middle mt-96 text-dark fw-bold">Lorem Ipsum</p>
            <button type="button"
                class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill fs-54 text-white font-montserrat"
                style="width: 120px; height:120px;">4</button>
            <p class="position-absolute top-0 start-100 translate-middle mt-96 text-dark fw-bold">Lorem Ipsum</p>
        </div>
        <hr>
		<div class="row px-md-114 px-16 py-md-48 py-16">
        <div class="col-md-6 row mb-32">
            <span
                class="bg-dark text-white fs-24 text-center rounded-pill d-flex flex-wrap justify-content-center align-content-center"
                style="width:77px; height:77px;">1</span>
            <div class="w-100 px-24" style="max-width:410px;">
                <h3 class="fs-16 text-dark fw-bold"><?php echo $title_step_1;?></h3>
                <p><?php echo $text_step_1; ?></p>
            </div>
        </div>
        <div class="col-md-6 row mb-32">
            <span
                class="bg-dark text-white fs-24 text-center rounded-pill d-flex flex-wrap justify-content-center align-content-center"
                style="width:77px; height:77px;">2</span>
            <div class="w-100 px-24" style="max-width:410px;">
                <h3 class="fs-16 text-dark fw-bold"><?php echo $title_step_2;?></h3>
                <p><?php echo $text_step_2; ?></p>
            </div>
        </div>
        <div class="col-md-6 row mb-md-0 mb-sm-32 mb-16">
            <span
                class="bg-dark text-white fs-24 text-center rounded-pill d-flex flex-wrap justify-content-center align-content-center"
                style="width:77px; height:77px;">3</span>
            <div class="w-100 px-24" style="max-width:410px;">
                <h3 class="fs-16 text-dark fw-bold"><?php echo $title_step_3;?></h3>
                <p><?php echo $text_step_3; ?></p>
            </div>
        </div>
        <div class="col-md-6 row mb-md-0 mb-sm-32 mb-16">
            <span
                class="bg-dark text-white fs-24 text-center rounded-pill d-flex flex-wrap justify-content-center align-content-center"
                style="width:77px; height:77px;">4</span>
            <div class="w-100 px-24" style="max-width:410px;">
                <h3 class="fs-16 text-dark fw-bold"><?php echo $title_step_4;?></h3>
                <p><?php echo $text_step_4; ?></p>
            </div>
        </div>
		</div>
    </div>
</section>