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

<div <?php echo get_block_wrapper_attributes(['class' => 'container-fluid d-flex flex-wrap justify-content-start align-items-center px-0 mx-auto my-50']); ?> data-block="doble-image-paragraph">

    <div class="row w-100 mw-1560 align-items-center ms-0 mt-md-120">
        <style>
        .bg-image-no-title {
            background-image: linear-gradient(rgb(55, 55, 55, .75), rgb(55, 55, 55, .75)), url("<?php echo $media_title['url']; ?>");
            background-size: cover, auto;
            background-position: center center;
            background-attachment: local, scroll;
            max-width: 638px;
            height:384px;
            border-radius: 0px 12px 12px 0px;
        }
        @media (max-width: 1199.98px) { 
            .bg-image-no-title {
                max-width: 517px;
                height: 306px;
            }
        }
        @media (max-width: 991.98px) { 
            .bg-image-no-title {
                max-width: 303px;
                height: 228px;
            }
         }
         @media (max-width: 575.98px) { 
            .bg-image-no-title {
                max-width: 228px;
                height: 228px;
            }
            .state {
                width: 320px !important;
            }
        }
        </style>
        <div class="col-lg-5 col-md-4 col-sm-5 col-9 bg-image-no-title">
            <div class="position-relative h-100 w-100 state">
                <?php echo wp_get_attachment_image($media['id'], 'img-600-384', false, array('class'=>'img-fluid h-100 position-absolute top-50 start-sm-50 start-10 translate-middle-y')); ?>
                <h2
                    class='font-commissionerbold fw-bold fst-italic fs-mlg-52 fs-sm-42 fs-28 lh-md-68 lh-sm-120p lh-30 text-uppercase text-white position-absolute top-50 start-lg-55 start-sm-20 start-20 translate-middle-y'>
                    <?php _e($img_title, 'understrap'); ?></h2>
            </div>
        </div>
        <div class="col-lg-1 col-md-2 col-sm-1 col-4"></div>
        <div class="col-sm-6 ps-xxl-104 ps-md-32 px-sm-0">
            <div
                class="font-commissionerregular fw-normal fs-md-18 fs-sm-16 fs-14 lh-md-180p lh-sm-24 lh-180p mt-md-72 mt-48 pe-md-128 ps-md-0 ps-sm-20">
                <?php _e( $content, 'understrap'); ?>
            </div>
        </div>
    </div>

</div>
