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

<section <?php echo get_block_wrapper_attributes(['class' => 'container-fluid d-flex flex-wrap justify-content-center align-items-center px-0 mx-auto']); ?> data-block="why-choose-home">
<div class="row w-100 mw-1200 mt-md-120 mt-md-100 mt-70 mb-md-72 mb-sm-48 mb-32">
    <h2 class="font-commissionerbold fst-italic fw-bold fs-md-52 fs-sm-35 fs-28 lh-md-130p lh-md-120 lh-30 text-uppercase"><?php _e( $title, 'understrap' ); ?></h2>
</div>
<div class="row w-100">
    <div class="col-mlg-5 col-md-6 col-sm-9 ps-0 d-flex align-items-center"><?php echo wp_get_attachment_image($media['id'], 'img-740-356', false, array('class'=>'img-fluid')); ?></div>
    <div class="col-xxl-1 col-mlg-2 col-md-1 col-sm-3 d-flex align-items-center">
        <div class="position-relative ms-xxl-n248 ms-md-n144 ms-sm-n136 mx-auto pt-xl-42 mt-sm-0 mt-40 text-sm-start text-center w-sm-auto w-100">
            <h3 class="font-commissionerbold fw-semibold fst-italic fs-mlg-28 fs-sm-20 fs-18 lh-md-27 lh-sm-28 lh-140p text-uppercase text-dark-shade-gray"><?php _e($subtitle, 'understrap'); ?></h3>
            <div class="d-grid gap-2 col-md-9 ms-xl-70 mt-20">
            <a href="<?php echo esc_url( get_permalink($post['id']) ); ?>" class="btn btn-shade-cyan shade-cyan small skew-x-330 w-100">
                <div class="font-poppinssemibold fst-italic fw-bold fs-16 lh-24 text-uppercase text-white skew-x-30">
                    <?php _e( $text_btn, 'understrap' ); ?>
                </div>
            </a>
            </div>
        </div>

    </div>
    <div class="col-xxl-4 col-md-5">
        <div class="row">
        <?php
        $output_html = '';
        $div_line = '<div class="col-lg-12 col-sm-6 mt-md-0 mt-48">';
        foreach ($block->parsed_block['innerBlocks'] as $key => $value) {
            if(in_array($value['blockName'], array('core/heading'))){
                $output_html .= $div_line;
                $output_html .= '<h3 class="font-commissionerbold fst-italic fw-semibold fs-lg-26 fs-20 lh-140p text-uppercase text-shade-cyan">'; 
                $output_html .= wp_strip_all_tags($value['innerHTML']);
                $output_html .='</h3>';
            }else {
                $output_html .= '<p class="font-commissionerregular fw-normal fs-lg-18 fs-sm-16 fs-14 lh-lg-180p lh-sm-150p lh-180p text-dark-shade-gray">';
                $output_html .= wp_strip_all_tags($value['innerHTML']);
                $output_html .= '</p>';
            }
            $div_line = '</div><div class="col-lg-12 col-sm-6 mt-md-0 mt-48">';
        }
        $output_html .= '</div>';

        esc_html_e($output_html, 'understrap');
        ?>
        </div>
    </div>
</div>
</section>
