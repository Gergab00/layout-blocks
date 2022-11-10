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

$id = implode(",",$id);

$quantity = 3;

$query = new WP_Query( array( 'cat' => $id, 'showposts' => $quantity ) );

?>

<div <?php echo get_block_wrapper_attributes(['class' => 'container-fluid d-flex flex-wrap justify-content-center align-items-center px-0 mx-auto']); ?>
    data-block="blog-block">
    <div class="row w-100 mw-1200 mt-md-120 mt-md-100 mt-70 mb-md-72 mb-sm-48 mb-32">
        <h2
            class="font-commissionerbold fst-italic fw-bold fs-md-52 fs-sm-35 fs-28 lh-md-130p lh-md-120 lh-30 text-uppercase">
            <?php _e( 'Our Blog', 'understrap' ); ?></h2>
    </div>
    <div class="row w-100 mw-1200">
        <?php 
   if ( $query->have_posts() ) {
        while ( $query->have_posts()) {
            $query->the_post();

            ?>
        <div class="col-sm-4">
            <div class="card border-0">
                <?php echo wp_get_attachment_image(get_post_thumbnail_id( $post->ID ), 'img-380-150', false, array('class'=>'img-fluid rounded border-radius-10 my-6')); ?>
                <div class="card-body px-0 py-12">
                    <div
                        class="font-poppinsregular fw-normal fs-12 lh-180p text-dark-shade-gray text-opacity-50 py-md-12 py-10 d-md-block d-none">
                        <?php echo the_time('F j, Y'); ?>
                    </div>
                    <?php the_title('<h3 class="font-commissionerbold fw-semibold fs-md-18 fs-16 lh-md-27 lh-20 text-uppercase py-md-12 py-10 my-0">', '</h3>'); ?>
                    <div
                        class="font-commissionerregular fw-normal fs-sm-18 fs-sm-16 fs-14 lh-md-180p lh-sm-24 lh-180p py-md-12 py-10">
                        <?php the_excerpt(); ?></div>
                    <div
                        class="font-poppinsregular fw-normal fs-12 lh-180p text-dark-shade-gray text-opacity-50 py-md-12 py-10 d-md-none d-block">
                        <?php echo the_time('F j, Y'); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
    }

 ?>
    </div>
</div>