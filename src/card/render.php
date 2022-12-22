<?php
/**
 * 
 * 
 * @author Gerardo Gonzalez
 * @version 2022.10.19
 * @since 2022.10.19
 * @package layout-blocks
 * 
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

extract( $attributes );

?>

<div <?php echo get_block_wrapper_attributes(['class' => 'card rounded border-radius-20 w-100']); ?> data-block="card">
  <?php echo wp_get_attachment_image($media['id'], 'img-278-168', false, array('class'=>'card-img-top img-fluid rounded-top border-radius-20')); ?>

  <div class="card-body">
    <h5 class="font-commissionerbold fw-semibold fs-md-18 fs-16 lh-md-27 lh-sm-20 lh-140p text-shade-cyan text-uppercase mt-md-24 mt-sm-16 mt-24 mb-24" style="height:72px"><?php _e($title, 'understrap'); ?></h5>
    <div class="font-commissionerregular fw-normal fs-md-18 fs-sm-16 fs-14 lh-md-30 lh-sm-24 lh-180p" style="height:96px"><?php _e($content, 'understrap'); ?></div>
  </div>
</div>
