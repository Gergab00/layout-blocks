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

<style>
    .bg-form-img {
        background-image:url("<?php echo $media['url']; ?>");
        background-size: auto;
        background-position: top 50% right -11.25rem;
        background-attachment: local, scroll;
        max-width: 1080px;
        height:700px;
    }
    @media (max-width: 1536.98px) { 
        .bg-form-img {
            background-position: top 50% right -15rem;
        }
    }
    @media (max-width: 1438.98px) { 
        .bg-form-img {
            background-position: top 50% right -22rem;
        }
    }
    @media (max-width: 1358.98px) { 
        .bg-form-img {
            background-position: top 50% right -26rem;
        }
    }
    @media (max-width: 1198.98px) { 
        .bg-form-img {
            background-position: top 50% right -30rem;
        }
    }
    @media (max-width: 1098.98px) { 
        .bg-form-img {
            background-position: top 50% right -38rem;
        }
    }
    @media (max-width: 991.98px) { 
        .bg-form-img {
            background-position: top 50% right -46rem;
        }
     }
</style>
<div <?php echo get_block_wrapper_attributes(['class' => 'container-fluid d-flex flex-wrap justify-content-end align-items-center px-0 mx-auto my-sm-120 my-70']); ?> data-block="form-image">
<div class="row w-100 mw-1560 align-items-center">
    <div class="col-xl-5 col-lg-6 col-md-7 col-sm-6 ps-xxl-0 ps-md-32">
        <h2 class="font-commissionerbold fst-italic fw-bold fs-md-52 fs-sm-35 fs-28 lh-md-130p lh-md-120 lh-30 text-uppercase mb-sm-50 ps-sm-0 ps-32"><?php _e( $title, 'understrap' ); ?></h2>
    
        <div class="col-xl-7 col-lg-6 col-md-5 col-sm-6 bg-form-img d-sm-none d-block"></div>

        <form class="row needs-validation pe-md-88 pe-32" id="request_quote" method="post" action="<?php echo admin_url('admin-post.php') ?>" novalidate>
            
            <input type="text" class="form-control modal-joinus my-12" id="name" name="name" placeholder="First Name" required>

            <input type="text" class="form-control modal-joinus my-12" id="surname" name="surname" placeholder="Last Name" required>

            <input type="tel" class="form-control modal-joinus my-12" id="inputPhone" name="inputPhone" placeholder="Phone" min="1000000000" pattern="+([0-9]{3})-[0-9]{3}-[0-9]{4}" required>
            
            <input type="email" class="form-control modal-joinus my-12" id="email" name="email" placeholder="Email" required>

            <select id="city" name="city" class="form-select modal-joinus my-12" required>
					<option value="" disabled selected hidden>Choose the city</option>
					<option value="Seattle, 98101">Seattle, 98101</option>
					<option value="Seattle, 98102">Seattle, 98102</option>
					<option value="Seattle, 98103">Seattle, 98103</option>
					<option value="Seattle, 98115">Seattle, 98115</option>
				</select>

            <div class="my-12 px-0 form-floating">
                <textarea class="form-control modal-joinus" id="dimensions" name="dimensions" style="height: 180px"></textarea>
                <label class="modal-joinus-label label-message fs-16" for="dimensions">Dimensions</label>
            </div>

            <div class="d-grid gap-2 col-md-3 col-sm-6 col-9 mx-auto">
                    <button href="<?php echo esc_url( get_permalink($post['id']) ); ?>"
                        class="btn btn-shade-cyan shade-cyan small skew-x-330 w-100 popup-form-btn" type="submit" name="wp-submit" id="wp-submit">
                        <div
                            class="font-poppinssemibold fst-italic fw-bold fs-16 lh-24 text-uppercase text-white skew-x-30">
                            <?php _e( 'Apply', 'understrap' ); ?>
                        </div>
                    </button>
                </div>
        </form>

    </div>
    <div class="col-xl-7 col-lg-6 col-md-5 col-sm-6 bg-form-img d-sm-block d-none"></div>
</div>

</div>
