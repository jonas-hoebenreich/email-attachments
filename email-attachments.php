<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.jonh.eu/
 * @since             1.0.0
 * @package           Email_Attachments
 *
 * @wordpress-plugin
 * Plugin Name:       Email Attachments
 * Plugin URI:        https://attachments.jonh.eu/
 * Description:       Add attachments to any WooCommerce emails
 * Version:           0.0.1
 * Author:            Jonas Höbenreich
 * Author URI:        https://www.jonh.eu/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       email-attachments
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if(!defined('ABSPATH')) exit;

/**
 * Currently plugin version.
 */
const EMAIL_ATTACHMENTS_VERSION = '1.0.0';

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-email-attachments.php';

/**
 * Begins execution of the plugin.
 *
 * @since    1.0.0
 */
function run_email_attachments() {

	$plugin = new Email_Attachments();
	$plugin->run();

}
run_email_attachments();
