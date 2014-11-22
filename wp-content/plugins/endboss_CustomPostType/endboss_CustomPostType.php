<?php

defined('ABSPATH') or die("NopeNopeNope"); /** Securrrity
/**
 * Plugin Name: endboss_CustomPostType
 * Plugin URI: http://endboss.com
 * Description: Generates custom Post Types
 * Version: 0.1
 */

if(!class_exists('WP_Plugin_Template'))
{
    class WP_Plugin_Template
    {
        /**
         * Construct the plugin object
         */
        public function __construct()
        {
         add_action('admin_init', array(&$this, 'admin_init'));
         add_action('admin_menu', array(&$this, 'add_menu'));
        } // END public function __construct
/*-------------------------------------------------------------------------------------------------------------------*/
            /**
             * hook into WP's admin_init action hook
             */
        public function admin_init()
        {
            // Set up the settings for this plugin
            $this->init_settings();
            // Possibly do additional admin_init tasks
        } // END public static function activate
/*-------------------------------------------------------------------------------------------------------------------*/
        /**
         * add a menu
         */
        public function add_menu()
        {
            add_options_page('WP Plugin Template Settings',
                'WP Plugin Template',
                'manage_options',
                'wp_plugin_template',
                array(&$this,
                    'plugin_settings_page'));
        } // END public function add_menu()

        /**
         * Menu Callback
         */
        public function plugin_settings_page()
        {
            if(!current_user_can('manage_options'))
            {
                wp_die(__('You do not have sufficient permissions to access this page.'));
            }

            // Render the settings template
            include(sprintf("%s/templates/settings.php", dirname(__FILE__)));
        } // END public function plugin_settings_page()
/*-------------------------------------------------------------------------------------------------------------------*/

        /**
         * Initialize some custom settings
         */
        public function init_settings()
        {
            // register the settings for this plugin
            register_setting('wp_plugin_template-group', 'setting_a');
            register_setting('wp_plugin_template-group', 'setting_b');
        } // END public function init_custom_settings()
/*-----------------------------------------------------------------------------------------------------------------*/

        /**
         * Activate the plugin
         */
        public static function activate()
        {
            // Do nothing
        } // END public static function activate
/*-------------------------------------------------------------------------------------------------------------------*/

        /**
         * Deactivate the plugin
         */
        public static function deactivate()
        {
            // Do nothing
        } // END public static function deactivate
    } // END class WP_Plugin_Template
} // END if(!class_exists('WP_Plugin_Template'))
/*-------------------------------------------------------------------------------------------------------------------*/


if(class_exists('WP_Plugin_Template'))
{
    // Installation and uninstallation hooks
    register_activation_hook(__FILE__, array('WP_Plugin_Template', 'activate'));
    register_deactivation_hook(__FILE__, array('WP_Plugin_Template', 'deactivate'));

    // instantiate the plugin class
    $wp_plugin_template = new WP_Plugin_Template();

    // Add a link to the settings page onto the plugin page
    if(isset($wp_plugin_template))
    {
        // Add the settings link to the plugins page
        function plugin_settings_link($links)
        {
            $settings_link = '<a href="options-general.php?page=wp_plugin_template">Settings</a>';
            array_unshift($links, $settings_link);
            return $links;
        }

        $plugin = plugin_basename(__FILE__);
        add_filter("plugin_action_links_$plugin", 'plugin_settings_link');
    }
}/*------------------------------------------------------------------------------------------------------------------*/


