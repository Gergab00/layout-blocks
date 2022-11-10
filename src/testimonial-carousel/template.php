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

$query = new WP_Query( array( 'post_type' => 'testimonialcpt' ) );
?>

<div <?php echo get_block_wrapper_attributes(['class' => 'container-fluid d-flex flex-wrap justify-content-end align-items-center px-0 mx-auto']); ?>
    data-block="testimonial-carousel">
    <div class="row w-100 mw-1560 my-md-72 my-sm-48 my-30">
        <h2
            class="font-commissionerbold fst-italic fw-bold fs-md-52 fs-sm-35 fs-28 lh-md-68 lh-md-42 lh-30 text-uppercase mw-900">
            <?php _e( $title, 'understrap' ); ?>
        </h2>
    </div>
    <div class="row w-100 my-md-72 my-sm-48 my-30">
        <div class="testimonial-carousel">
            <?php 
            if ($query->have_posts()): while ($query->have_posts()): $query->the_post();
            $first = ($query->current_post == 0)? 'first' : '';
        ?>
            <div class="carousel-cell <?php echo $first ?>">

                <div class="card rounded border-radius-10 h-100 py-48 px-24">
                    <div class="card-body">
                        <div class="row font-commissionerregular fw-normal fs-md-18 fs-sm-16 fs-14 lh-md-180p lh-sm-24 lh-180p mb-36 overflow-hidden"
                            style="height: 120px;"><?php the_excerpt(  ); ?></div>
                        <div class="row mt-36">
                            <div class="col-2">
                                <?php echo wp_get_attachment_image(get_post_thumbnail_id($post->ID), 'img-48-48', false, array('class'=>'rounded-circle')); ?>
                            </div>
                            <div class="col-9">
                                <?php the_title('<h3 class="font-commissionerbold fw-semibold fs-16 lh-27 text-capitalize">', '</h3>');?>
                                <?php echo the_time('F j, Y'); ?>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <?php
            endwhile;
        else:
            _e('In this moment we do not have any testimonial, be the first to give us your experience.');
        endif; 
        ?>
            <div class="static-banner slider-buttons row w-md-25 w-sm-50 w-100">
                <div class="d-grid gap-2 col-6 w-sm-21">
                    <button type="button" id="left-testimonial" class="btn btn-very-light-shade-cyan shade-cyan small skew-x-330 w-100">
                        <div class="font-poppinssemibold fst-italic fw-bold fs-16 lh-24 text-uppercase text-black skew-x-30">
                            <i class="fa-solid fs-20 my-12 fa-arrow-left"></i>
                        </div>
                    </button>
                </div>
                <div class="d-grid gap-2 col-6 w-sm-21">
                    <button type="button" id="right-testimonial"
                        class="btn btn-shade-cyan shade-cyan small skew-x-330 w-100">
                        <div class="font-poppinssemibold fst-italic fw-bold fs-16 lh-24 text-uppercase text-white skew-x-30">
                            <i class="fa-solid fs-20 my-6 fa-arrow-right"></i>
                        </div>
                    </button>
                </div>
            </div><!-- ."static-banner -->
        </div><!-- .testimonial-carousel -->
    </div>
</div>