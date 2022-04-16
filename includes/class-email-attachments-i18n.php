<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.jonh.eu/
 * @since      1.0.0
 *
 * @package    Email_Attachments
 * @subpackage Email_Attachments/includes
 */

// If this file is called directly, abort.
if(!defined('ABSPATH')) exit;

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Email_Attachments
 * @subpackage Email_Attachments/includes
 * @author     Jonas Höbenreich <email-attachments@jonh.eu>
 */
class Email_Attachments_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'email-attachments',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
