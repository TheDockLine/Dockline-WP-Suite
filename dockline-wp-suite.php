<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://thedockline.com
 * @since             1.0.0
 * @package           Dockline_Wp_Suite
 *
 * @wordpress-plugin
 * Plugin Name:       Dockline WP Suite
 * Plugin URI:        https://thedockline.com
 * Description:       Suite of tools used for Dockline websites.
 * Version:           1.0.6
 * Author:            Levi
 * Author URI:        https://thedockline.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dockline-wp-suite
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('DOCKLINE_WP_SUITE_VERSION', '1.0.6');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-dockline-wp-suite-activator.php
 */
function activate_dockline_wp_suite()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-dockline-wp-suite-activator.php';
	Dockline_Wp_Suite_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-dockline-wp-suite-deactivator.php
 */
function deactivate_dockline_wp_suite()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-dockline-wp-suite-deactivator.php';
	Dockline_Wp_Suite_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_dockline_wp_suite');
register_deactivation_hook(__FILE__, 'deactivate_dockline_wp_suite');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-dockline-wp-suite.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_dockline_wp_suite()
{

	$plugin = new Dockline_Wp_Suite();
	$plugin->run();
}
run_dockline_wp_suite();
