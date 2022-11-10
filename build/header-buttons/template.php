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

<section <?php echo get_block_wrapper_attributes(['class' => 'container-fluid px-0']); ?> data-block="header-buttons">
<style>
    .jumbotron-bg {
        background: linear-gradient(270deg, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0) 50%), linear-gradient(90deg, #35AFE3 0%, rgba(53, 175, 227, 0) 100%), url(<?php echo $media['url']; ?>);
        background-size: cover;
        background-position: center;
        mix-blend-mode: normal;
        height: 600px;
    }
</style>
<div class="row w-100 jumbotron-bg mh-600 justify-content-center align-items-center px-0 mx-auto">
    <div class="col-12 w-100 mw-1200 px-lg-0">
        <h2 class="font-commissionerbold fs-md-82 fs-sm-52 fs-42 lh-md-93 lh-sm-46 lh-44 fst-italic fw-bold text-uppercase text-white"><?php _e($title, 'understrap'); ?></h2>
    </div>
</div>
<div class="row w-100 justify-content-center position-relative px-0 mx-auto mt-n48">
    <div class="row w-100 mw-1200 px-lg-0 px-sm-24">
        <div class="d-grid gap-2 col-sm-4 mb-sm-0 mb-10">
            <a href="<?php echo esc_url( get_permalink($post['id']) ); ?>" class="btn btn-shade-cyan shade-cyan mw-md-395 w-100 skew-x-330">
                <div class="font-commissionerregular fst-italic fw-bold fs-md-18 fs-14 lh-md-22 lh-18 text-uppercase text-white skew-x-30">
                <?php _e( $text_btn, 'understrap' ); ?>
                </div>
            </a>
        </div>
        <div class="d-grid gap-2 col-sm-4 mb-sm-0 mb-10">
            <a href="<?php echo esc_url( get_permalink($post_2['id']) ); ?>" class="btn btn-shade-cyan shade-cyan mw-md-395 w-100 skew-x-330">
                <div class="font-commissionerregular fst-italic fw-bold fs-md-18 fs-14 lh-md-22 lh-18 text-uppercase text-white skew-x-30">
                <?php _e( $text_btn_2, 'understrap' ); ?>
                </div>
            </a>
        </div>
        <div class="d-grid gap-2 col-sm-4">
            <a href="<?php echo esc_url( get_permalink($post_3['id']) ); ?>" class="btn btn-shade-cyan shade-cyan mw-md-395 w-100 skew-x-330">
                <div class="font-commissionerregular fst-italic fw-bold fs-md-18 fs-14 lh-md-22 lh-18 text-uppercase text-white skew-x-30">
                <?php _e( $text_btn_3, 'understrap' ); ?>
                </div>
            </a>
        </div>
    </div>
</div>
</section>
