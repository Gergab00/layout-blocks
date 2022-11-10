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

<div <?php echo get_block_wrapper_attributes(['class' => 'container-fluid px-0']); ?> data-block="text-form">

    <div class="container mw-1560 w-100 d-flex justify-content-center align-items-center me-0 mt-md-120 mb-md-116 px-0">
        <div class="row w-100  ps-xxl-0 ps-sm-24 ps-16">
            <div class="col-4 w-md-39 ps-0 pe-md-70">
                <h2
                    class="font-commissionerbold fst-italic fw-bold fs-md-52 fs-sm-35 fs-28 lh-md-68 lh-md-120 lh-30 text-uppercase mt-md-72 mb-sm-52">
                    <?php _e( $title, 'understrap' ); ?>
                </h2>
                <div
                    class="px-0 mt-sm-0 mt-30 font-commissionerregular fw-normal fs-mlg-18 fs-sm-16 fs-14 lh-mlg-180p lh-sm-24 lh-180p pe-16">
                    <?php _e( $content, 'understrap' ); ?>
                </div>
            </div>
            <div class="col-8 w-md-61">

                <div class="row bg-shade-cyan rounded-start border-radius-12 ps-md-72 pt-md-48 pb-md-72">
                    <h4 class="font-commissionerbold fst-italic fw-500 fs-24 lh-140p text-white text-uppercase mb-36">
                        <?php _e( $form_title, 'understrap' ); ?>
                    </h4>
                    <form class="row needs-validation w-47" id="getaqoute" method="post" action="<?php echo esc_url(admin_url('admin-post.php'));?>" novalidate>
        
                    <input type="text" class="form-control modal-getaqoute mb-24" id="name" name="name" placeholder="Name" required>
    
                    <input type="number" class="form-control modal-getaqoute mb-24" id="inputPhone" name="inputPhone" placeholder="Phone" min="1000000000" required>
    
                    <input type="email" class="form-control modal-getaqoute" id="email" name="email" placeholder="Email" required>
    
                    <input type="hidden" id="lastname" name="lastname" value="">                
                    <input type="hidden" name="action" value="getaqoute_msg">
                    <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
                    </form>
                </div>

                <div class="d-grid gap-2 col-auto w-22 mt-n24 ms-md-174">
                    <button href="<?php echo esc_url( get_permalink($post['id']) ); ?>"
                        class="btn btn-dark-shade-gray dark-shade-gray skew-x-330 w-100 popup-form-btn" form="getaqoute" type="submit" name="wp-submit" id="wp-submit">
                        <div
                            class="font-poppinssemibold fst-italic fw-bold fs-16 lh-24 text-uppercase skew-x-30">
                            <?php _e( $text_btn, 'understrap' ); ?>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>