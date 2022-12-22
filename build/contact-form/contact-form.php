<?php
/**
 *
 *
 * @author Gerardo Gonzalez
 * @version 1.0.0
 * @since 1.0.0
 * @package layout-blocks
 *
 */

/**
 * copy this line into block.php -> require __DIR__.'/build/contact-form/contact-form.php';
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

class ContactForm
{

    /**
     * Constructor
     */
    public static function init()
    {
        add_action('init', array(get_called_class(), 'registrer'));
        add_action('admin_init', array(get_called_class(), 'registerEmailFieldSettings'));
        add_action('admin_menu', array(get_called_class(), 'addSubMenuPage'));
        add_action('wp_enqueue_scripts', array(get_called_class(), 'enqueueScripts'));
        add_action('wp_ajax_nopriv_contact_form', array(get_called_class(), 'contactFormSend'));
        add_action('wp_ajax_contact_form', array(get_called_class(), 'contactFormSend'));

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
        wp_register_script('contact_form_script', BLOCKS_URL . 'js/script.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('contact_form_script');
        wp_localize_script('contact_form_script', 'contact_form',
            ['ajaxUrl' => admin_url('admin-ajax.php'),
                'contact_formNonce' => wp_create_nonce('secret-key-form'),
            ]);
    }

    public static function contactFormSend()
    {
        $name = sanitize_file_name($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);

        $to = 'emailsendto@example.com';
        $subject = 'The subject';
        $body = 'The email body content: ' . $message;
        $headers = array('Content-Type: text/html; charset=UTF-8', 'From: My Site Name <support@example.com>');

        wp_mail($to, $subject, $body, $headers);

        $res = !true ? ['status' => 1, 'message' => 'Your message was send...']
        : ['status' => 0, 'message' => 'Opps we make a boo bo'];

        wp_send_json($res);
    }

    public static function renderFields_callback()
    {
        ?>
    <form action="options.php" method="POST">
      <?php
        settings_fields('contact-form-settings');
        do_settings_sections('contact-form-page'); 
        submit_button();
        ?>
    </form>
    <?php
}
 
    public static function addSubMenuPage()
    {
        add_submenu_page(
            'tools.php', 
            'Contact Form Configuration', 
            'Contact Form Configuration', 
            'manage_options', 
            'contact-form-page', 
            array(get_called_class(), 'renderFields_callback') 
        );
    }

    public static function settingsSection()
    {
        echo 'Configure the options of the Contact Form block.';
    }


    public static function registerEmailFieldSettings()
    {
        register_setting(
            'contact-form-settings',
            '_emailToSend'
        );
        add_settings_section(
            'contact-form-settings', 
            'Configure the Contact Form options.',
            array(get_called_class(), 'settingsSection'), 
            'contact-form-page' 
        );
        add_settings_field(
            '_emailToSend',
            'Add email to send the contact form', 
            array(get_called_class(), 'renderEmailField'), 
            'contact-form-page', 
            'contact-form-settings' 
        );
    }

    public static function renderEmailField()
    {
        $value = get_option('_emailToSend');
        ?>
    <input type="email" name="_emailToSend" value="<?php echo esc_attr($value); ?>" />
    <?php
}

}

ContactForm::init();