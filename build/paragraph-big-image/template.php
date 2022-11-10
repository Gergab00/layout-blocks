<?php
/**
 * 
 * 
 * @author Gerardo Gonzalez
 * @version 2022.10.19
 * @since 2022.10.19
 * @package rpmdelivery
 * 
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

extract( $attributes );

?>

<section <?php echo get_block_wrapper_attributes(['class' => 'container-fluid px-0']); ?>
    data-block="paragraph-big-image">
    <div class="container mw-1560 d-flex justify-content-md-end align-items-center me-0 mt-md-120">
        <div class="row">
            <div class="col-md-5 col-sm-6 ps-xxl-0 ps-sm-24 ps-16 pe-md-62 pe-0">
                <h2 class="font-commissionerbold fst-italic fw-bold fs-md-52 fs-sm-35 fs-28 lh-md-68 lh-md-120 lh-30 text-uppercase mt-md-120 mt-md-100 mt-70 mb-sm-52">
                    <?php _e( $title, 'understrap' ); ?>
                </h2>
                    <?php echo wp_get_attachment_image($media_mobile['id'], 'img-380-400', false, array('class'=>'img-fluid w-100 d-sm-none d-block')); ?>
                    <div class="px-0 mt-sm-0 mt-30 font-commissionerregular fw-normal fs-mlg-18 fs-sm-16 fs-14 lh-mlg-180p lh-sm-24 lh-180p pe-16">
                        <?php _e( $content, 'understrap' ); ?>
                    </div>
                <div class="d-grid gap-2 col-lg-5 col-sm-6 mt-md-52 mt-30 ps-0 pe-md-18 pe-16 mx-md-0 mx-auto">
                    <a href="<?php echo esc_url( get_permalink($post['id']) ); ?>"
                        class="btn btn-shade-cyan shade-cyan small skew-x-330 w-100">
                        <div
                            class="font-poppinssemibold fst-italic fw-bold fs-16 lh-24 text-uppercase text-white skew-x-30">
                            <?php _e( $text_btn, 'understrap' ); ?>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-7 col-sm-6 ps-md-80 pe-0">
                <?php echo wp_get_attachment_image($media['id'], 'img-1660-1340', false, array('class'=>'img-fluid d-md-block d-none')); ?>
                <?php echo wp_get_attachment_image($media_mobile['id'], 'img-380-400', false, array('class'=>'img-fluid d-md-none d-sm-block d-none')); ?>

            </div>
        </div>
    </div>
</section>