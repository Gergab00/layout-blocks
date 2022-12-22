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
//print_r( $attributes);

?>

<div <?php echo get_block_wrapper_attributes(['class' => 'container-fluid d-flex flex-wrap justify-content-center align-items-center px-0 mx-auto']); ?> data-block="industries-served">
<div class="row mw-1200 w-100">
    <div class="col-12 mt-md-120 mt-md-100 mt-70 mb-md-72 mb-sm-48 mb-32">
        <h2 class="font-commissionerbold fst-italic fw-bold fs-md-52 fs-sm-35 fs-28 lh-md-130p lh-md-120 lh-30 text-uppercase"><?php _e( $title, 'understrap' ); ?></h2>
    </div>
<?php 
foreach ($block->parsed_block['innerBlocks'] as $block) {
?>
<div class="col-sm-3 my-md-24 my-sm-12 my-10">
<?php
    $attributes = $block['attrs'];
    $content = $block['innerBlocks'][0]['innerHTML'];
    require get_theme_file_path('blocks/build/card/template.php');
?>
</div>
<?php
}
?>
</div>
</div>
