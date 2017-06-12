<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Update_Tainacan
 * @subpackage Update_Tainacan/admin
 * @author     Marcus Molinari <mbrunodm@gmail.com>
 */
class Update_Tainacan_Admin {

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version) {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_styles() {
        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/update-tainacan-admin.css', array(), $this->version, 'all');
    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts() {

        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/update-tainacan-admin.js', array('jquery'), $this->version, false);
    }
    
    /**
     * Register Update_Tainacan's option link at wordpress admin panel
     *
     * @since    1.0.0
     */
    public function add_update_tainacan_menu() {
        add_options_page('Update Tainacan Plugin', 'Update Tainacan Config', 'manage_options', $this->plugin_name, array($this, 'display_update_setup_page'));
    }
    
    /**
     * Adds Update_Tainacan's settings shortcut at plugins' list
     *
     * @since    1.0.0
     */
    public function add_action_links($links) {
        $settings_link = array(
            '<a href="' . admin_url('options-general.php?page=' . $this->plugin_name) . '">' . __('Settings', $this->plugin_name) . '</a>',
        );
        return array_merge($settings_link, $links);
    }
    
    /**
     * Loads admin internal pages
     *
     * @since    1.0.0
     */
    public function display_update_setup_page() {
        include_once( 'partials/class-ibram-tainacan-helper.php' );
        include_once( 'partials/ibram-tainacan-admin-display.php' );
    }

}
