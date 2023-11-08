<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Elementor_Form_Pro
 *
 * @wordpress-plugin
 * Plugin Name:       Elementor Form Pro
 * Plugin URI:        http://nazmgroup.com/elementor-form-pro/
 * Description:       This plugin enhances Elementor forms with additional features.
 * Version:           0.1.0
 * Author:            Nazm Team
 * Author URI:        http://nazmgroup.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       nefp
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ELEMENTOR_FORM_PRO_VERSION', '0.1.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-elementor-form-pro-activator.php
 */
function activate_elementor_form_pro() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-elementor-form-pro-activator.php';
	Plugin_Name_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-elementor-form-pro-deactivator.php
 */
function deactivate_elementor_form_pro() {
	require_once(plugin_dir_path( __FILE__ ) . 'includes/class-elementor-form-pro-deactivator.php');
	Plugin_Name_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_elementor_form_pro' );
register_deactivation_hook( __FILE__, 'deactivate_elementor_form_pro' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-elementor-form-pro.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_elementor_form_pro() {

	$plugin = new Elementor_Form_Pro();
	$plugin->run();

}
run_elementor_form_pro();
