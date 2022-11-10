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

// WP_Query arguments
$args = array(
	'post_type' => array( 'services_ctp' ),
    'post__in'  => $id,
    'order'   => 'ASC'
);

// The Query
$query = new WP_Query( $args );

?>

<div <?php echo get_block_wrapper_attributes(['class' => 'container-fluid d-flex flex-wrap justify-content-center align-items-center px-0 mx-auto']); ?>
    data-block="services">
    <div class="row w-100 mw-1200 my-md-72 my-sm-48 my-30">
        <h2
            class="font-commissionerbold fst-italic fw-bold fs-md-52 fs-sm-35 fs-28 lh-md-130p lh-md-120p lh-30 text-uppercase">
            <?php _e( $title, 'understrap' ); ?>
        </h2>
    </div>
    <div class="row w-100 mw-1200">
        <?php
 // The Loop
 if ( $query->have_posts() ) {
     while ( $query->have_posts() ) {
         $query->the_post();
         $size = ($query->current_post < 3) ? 'img-380-192' : 'img-585-240';
         $col = ($query->current_post < 3) ? '4' : '6';
         // do something
         ?>
        <div class="col-sm-<?php echo $col; ?> my-sm-12 my-10">

            <div class="card rounded border-radius-20 w-100 px-0">
                <?php echo wp_get_attachment_image(get_post_thumbnail_id( $post->ID ), $size, false, array('class'=>'card-img-top img-fluid rounded-top border-radius-20')); ?>
                <div class="card-body">
                    <?php
                the_title(
                    '<h3 class="font-commissionerbold fw-semibold fs-md-18 fs-16 lh-md-27 lh-sm-20 lh-140p text-shade-cyan text-uppercase mt-md-24 mt-sm-16 mt-24 mb-24">',
                    '</h3>'
                );
                ?>
                    <div class="font-commissionerregular fw-normal fs-md-18 fs-sm-16 fs-14 lh-md-30 lh-sm-24 lh-180p">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </div><!-- .card -->

        </div><!-- .col -->
        <?php
         
     }
 } else {
     // no posts found
     _e( 'Sorry you we dont have services avible at the moment.', 'understrap');
 }
 
 // Restore original Post Data
 wp_reset_postdata();
 ?>
    </div>
    <div class="row w-100 mw-1200 my-md-72 my-sm-48 my-30 justify-content-center">
        <div class="d-grid gap-2 col-12 w-sm-21">
            <a href="<?php echo esc_url( get_permalink($post['id']) ); ?>" class="btn btn-shade-cyan shade-cyan small skew-x-330 w-100">
                <div class="font-poppinssemibold fst-italic fw-bold fs-16 lh-24 text-uppercase text-white skew-x-30">
                    <?php _e( $text_btn, 'understrap' ); ?>
                </div>
            </a>
        </div>
    </div>
</div>