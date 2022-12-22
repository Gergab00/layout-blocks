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

/**
 * copy this line into block.php -> require __DIR__.'/build/team-faq/team-faq.php';
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

class TeamFAQ
{

    /**
     * Constructor
     */
    public static function init()
    {
        add_action('init', array(get_called_class(), 'registrer'), 0);
        add_action('init', array(get_called_class(), 'testimonial') , 0);
        add_action('init', array(get_called_class(), 'faq'), 0);
		add_action( 'wp_enqueue_scripts', array( get_called_class(),'enqueueScripts'));
    }

    public static function registrer()
    {
        register_block_type(
            __DIR__,
            array(
                /**
                 * Render callback function.
                 *
                 * @param array    $attributes The block attributes.
                 * @param string   $content    The block content.
                 * @param WP_Block $block      Block instance.
                 *
                 * @return string The rendered output.
                 */
                'render_callback' => array(get_called_class(), 'renderBlock'),
            ));
    }

    public static function renderBlock($attributes, $content, $block)
    {
        ob_start();
        require __DIR__ . '/render.php';
        return ob_get_clean();
    }

    public static function enqueueScripts()
    {
		wp_register_script('teamfaq_script', BLOCKS_URL .'js/script.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script('teamfaq_script');
	}

    // Register Custom Post Type
    public static function testimonial()
    {

        $labels = array(
            'name'                  => _x('Testimonials', 'Post Type General Name', 'text_domain'),
            'singular_name'         => _x('Testimonial', 'Post Type Singular Name', 'text_domain'),
            'menu_name'             => __('Testimonials', 'text_domain'),
            'name_admin_bar'        => __('Testimonials', 'text_domain'),
            'archives'              => __('Testimonial Archives', 'text_domain'),
            'attributes'            => __('Testimonials Attributes', 'text_domain'),
            'parent_item_colon'     => __('Parent Item:', 'text_domain'),
            'all_items'             => __('All Items', 'text_domain'),
            'add_new_item'          => __('Add New Item', 'text_domain'),
            'add_new'               => __('Add New', 'text_domain'),
            'new_item'              => __('New Item', 'text_domain'),
            'edit_item'             => __('Edit Item', 'text_domain'),
            'update_item'           => __('Update Item', 'text_domain'),
            'view_item'             => __('View Item', 'text_domain'),
            'view_items'            => __('View Items', 'text_domain'),
            'search_items'          => __('Search Item', 'text_domain'),
            'not_found'             => __('Not found', 'text_domain'),
            'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
            'featured_image'        => __('Featured Image', 'text_domain'),
            'set_featured_image'    => __('Set featured image', 'text_domain'),
            'remove_featured_image' => __('Remove featured image', 'text_domain'),
            'use_featured_image'    => __('Use as featured image', 'text_domain'),
            'insert_into_item'      => __('Insert into item', 'text_domain'),
            'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
            'items_list'            => __('Items list', 'text_domain'),
            'items_list_navigation' => __('Items list navigation', 'text_domain'),
            'filter_items_list'     => __('Filter items list', 'text_domain'),
        );
        $args = array(
            'label'               => __('Testimonial', 'text_domain'),
            'description'         => __('Add Testimonials here.', 'text_domain'),
            'labels'              => $labels,
            'supports'            => array('title', 'editor', 'revisions', 'thumbnail'),
            'taxonomies'          => array(),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-admin-comments',
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
        );
        register_post_type('testimonial', $args);

    }

    // Register Custom Post Type
    public static function faq()
    {

        $labels = array(
            'name'                  => _x('FAQs', 'Post Type General Name', 'text_domain'),
            'singular_name'         => _x('FAQ', 'Post Type Singular Name', 'text_domain'),
            'menu_name'             => __('FAQs', 'text_domain'),
            'name_admin_bar'        => __('FAQ', 'text_domain'),
            'archives'              => __('FAQ Archives', 'text_domain'),
            'attributes'            => __('FAQ Attributes', 'text_domain'),
            'parent_item_colon'     => __('Parent Item:', 'text_domain'),
            'all_items'             => __('All FAQs', 'text_domain'),
            'add_new_item'          => __('Add New FAQ', 'text_domain'),
            'add_new'               => __('Add New', 'text_domain'),
            'new_item'              => __('New FAQ', 'text_domain'),
            'edit_item'             => __('Edit FAQ', 'text_domain'),
            'update_item'           => __('Update FAQ', 'text_domain'),
            'view_item'             => __('View FAQ', 'text_domain'),
            'view_items'            => __('View FAQs', 'text_domain'),
            'search_items'          => __('Search FAQ', 'text_domain'),
            'not_found'             => __('Not found', 'text_domain'),
            'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
            'featured_image'        => __('Featured Image', 'text_domain'),
            'set_featured_image'    => __('Set featured image', 'text_domain'),
            'remove_featured_image' => __('Remove featured image', 'text_domain'),
            'use_featured_image'    => __('Use as featured image', 'text_domain'),
            'insert_into_item'      => __('Insert into item', 'text_domain'),
            'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
            'items_list'            => __('FAQs list', 'text_domain'),
            'items_list_navigation' => __('FAQs list navigation', 'text_domain'),
            'filter_items_list'     => __('Filter FAQs list', 'text_domain'),
        );
        $args = array(
            'label'               => __('FAQ', 'text_domain'),
            'description'         => __('Add FAQs in here', 'text_domain'),
            'labels'              => $labels,
            'supports'            => array('title', 'editor'),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-info',
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
            'show_in_rest'        => true,
        );
        register_post_type('faq', $args);

    }
}

TeamFAQ::init();
