<?php
/**
 *
 *
 * @author the Understrap Contributors
 * @version 1.1.0
 * @since 1.1.0
 * @package understrap-framework-theme
 *
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

extract($attributes);

// WP_Query arguments
$args = array(
 'post_type' => array('testimonial'),
);

// The Query
$query = new WP_Query($args);

?>

<section
    <?php echo get_block_wrapper_attributes(['class' => 'container-fluid d-flex justify-content-center align-items-center bg-primary py-md-48 py-16']); ?>
    data-block="team-faq">
    <div class="row mw-1370 w-100 justify-content-center">
        <div class="carousel-testimonial mb-80">
            <?php
// The Loop
if ($query->have_posts()) {
 while ($query->have_posts()) {
  $query->the_post();
  // do something ?>
            <div
                class="carousel-cell mx-48 w-100 d-flex flex-column justify-content-center align-items-center text-center">

                <?php the_post_thumbnail(array('214', '214'), ['class' => 'my-32']); ?>
                <?php the_title('<h3 class="text-dark fs- my-16">', '</h3>'); ?>
                <?php the_content(); ?>
            </div>
            <?php
}
} else {
 // no posts found
 _e('Sorry, no posts matched your criteria.', 'textdomain');

}

// Restore original Post Data
wp_reset_postdata();

// WP_Query arguments
$args = array(
 'post_type' => array('faq'),
);

// The Query
$query = new WP_Query($args);
?>
        </div>
        <hr>
        <div class="row mw-1140 justify-content-center py-md-60 py-16">
            <div class="col-12 text-center mb-md-60 mb-16">
                <?php echo $content; ?>
            </div>
            <?php

// The Loop
if ($query->have_posts()) {
 while ($query->have_posts()) {
  $query->the_post();
  $loop     = ($query->current_post < $query->post_count / 2)? '': 'ps-sm-16';
  $open     = (0 === $query->current_post)? array('true', '', 'show'): array('false', 'collapsed', '');
  $colStart = (0 === $query->current_post || $query->current_post === $query->post_count / 2)? '<div class="col-sm-6">' : '';
  $colEnd   = ($query->current_post + 1 === $query->post_count / 2 || $query->current_post === $query->post_count - 1)? '</div>': '';
  // do something 
  ?>            
            <?php echo $colStart; ?>
                <div class="accordion accordion-flush mb-24 <?php echo $loop; ?>" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="flush-heading-<?php echo $query->current_post; ?>">
                            <button class="accordion-button <?php echo $open[1]; ?> text-black fs-16 fw-bold" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse-<?php echo $query->current_post; ?>" aria-expanded="<?php echo $open[0]; ?>"
                                aria-controls="flush-collapse-<?php echo $query->current_post; ?>">
                                <?php echo get_the_title(); ?>
                            </button>
                        </h2>
                        <div id="flush-collapse-<?php echo $query->current_post; ?>" class="accordion-collapse collapse <?php echo $open[2]; ?>"
                            aria-labelledby="flush-heading-<?php echo $query->current_post; ?>" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php echo $colEnd; ?>
            <?php
}
} else {
 // no posts found
 _e('Sorry, no posts matched your criteria.', 'textdomain');

}
// Restore original Post Data
wp_reset_postdata();
?>
        </div>
    </div>
</section>