<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @since             1.0
 * @package           WP_QN
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Quick Navigation
 * Plugin URI:        http://www.garretj.com
 * Description:       Rapid switching between WordPress pages whilst on the dashboard
 * Version:           2.3
 * Author:            Jonathan Garrett
 * Author URI:        http://www.garretj.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp_qn
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 */
//require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-qn-activator.php';

/**
 * The code that runs during plugin deactivation.
 */
//require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-qn-deactivator.php';

/** This action is documented in includes/class-wp-qn-activator.php */
//register_activation_hook( __FILE__, array( 'Plugin_Name_Activator', 'activate' ) );

/** This action is documented in includes/class-wp-qn-deactivator.php */
//register_deactivation_hook( __FILE__, array( 'Plugin_Name_Deactivator', 'deactivate' ) );

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-qn.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_qn() {

	$plugin = new WP_QN();
	$plugin->run();

}
run_wp_qn();
