<?php

/**
 * Theme Notice Class
 *
 */
// Exit if directly accessed.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Class Bulk_New_Theme_Notice
 */
class Bulk_New_Theme_Notice {

    /**
     * Constructor function to include the required functionality for the class.
     *
     * Bulk_New_Theme_Notice constructor.
     */
    public function __construct() {

        add_action('after_switch_theme', array($this, 'bulk_theme_notice'));

        // Display the new theme notice when transient is present.
        //if ( get_transient( 'bulk_theme_switched' ) ) {
        add_action('admin_notices', array($this, 'bulk_new_theme_notice'));
        add_action('admin_init', array($this, 'bulk_ignore_new_theme_notice'));
        //}
    }

    /**
     * Set the transient after switch theme..
     */
    public function bulk_theme_notice() {

        //set_transient( 'bulk_theme_switched', 'bulk_new_theme_notice', 3 * DAY_IN_SECONDS );
        add_action('admin_notices', array($this, 'bulk_new_theme_notice'));
        add_action('admin_init', array($this, 'bulk_ignore_new_theme_notice'));
    }

    /**
     * Add a dismissible notice in the dashboard about new theme.
     */
    public function bulk_new_theme_notice() {
        global $current_user;
        $user_id = $current_user->ID;
        $ignored_notice = get_user_meta($user_id, 'bulk_ignore_new_theme_notice');
        if (!empty($ignored_notice)) {
            return;
        }

        $dismiss_button = sprintf(
                '<a href="%s" class="notice-dismiss" style="text-decoration:none;"></a>',
                '?nag_ignore_new_theme=0'
        );

        $message = sprintf(
                /* translators: %1$s Popularis theme link %2$s Popularis theme demo link */
                __('Popularis - our new free Multipurpose theme. <a target="_blank" href="%1$s"><strong>Check it out!</strong></a> Popularis is fully compatible with WooCommerce, Gutenberg, Elementor and other major page builders. Comes with <a target="_blank" href="%2$s"><strong>one click demo import</strong></a> to quickly setup your new website.', 'bulk'),
                esc_url(admin_url('theme-install.php?theme=popularis')),
                esc_url('https://themes4wp.com/theme/popularis/')
        );

        printf(
                '<div class="notice updated" style="position:relative;">%1$s<p>%2$s</p></div>',
                $dismiss_button,
                $message
        );
    }

    /**
     * Update the bulk_ignore_new_theme_notice option to true, to dismiss the notice from the dashboard
     */
    public function bulk_ignore_new_theme_notice() {
        global $current_user;
        $user_id = $current_user->ID;

        /* If user clicks to ignore the notice, add that to their user meta */
        if (isset($_GET['nag_ignore_new_theme']) && '0' == $_GET['nag_ignore_new_theme']) {
            add_user_meta($user_id, 'bulk_ignore_new_theme_notice', 'true', true);
        }
    }

}

new Bulk_New_Theme_Notice();
