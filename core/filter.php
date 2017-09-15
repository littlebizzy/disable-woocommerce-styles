<?php

/**
 * Disable Woocommerce Styles - Filter class
 *
 * @package Disable Woocommerce Styles
 * @subpackage Disable Woocommerce Styles Core
 */
final class DWCSTY_Core_Filter {



	// Properties
	// ---------------------------------------------------------------------------------------------------



	/**
	 * Single class instance
	 */
	private static $instance;



	// Initialization
	// ---------------------------------------------------------------------------------------------------



	/**
	 * Create or retrieve instance
	 */
	public static function instance() {

		// Check instance
		if (!isset(self::$instance))
			self::$instance = new self;

		// Done
		return self::$instance;
	}



	/**
	 * Constructor
	 */
	private function __construct() {
		$this->restrict();
	}



	// Filters
	// ---------------------------------------------------------------------------------------------------



	/**
	 * Restrict WC styles basend on this plugin constants
	 */
	private function restrict() {

		// Initialize
		$replacement = array();

		// WP Styles object
		$styles = wp_styles();
		if (empty($styles->queue) || !is_array($styles->queue))
			return;

		// Process constants
		$names = $this->get_values(DWCSTY_NAMES);
		$prefixes = $this->get_values(DWCSTY_PREFIXES);

		// Enum queued styles
		foreach ($styles->queue as $handler) {

			// Check prefixes
			$prefixed = false;
			foreach ($prefixes as $prefix) {
				if (0 === strpos($handler, $prefix.'-') ||
					0 === strpos($handler, $prefix.'_')) {
					$prefixed = true;
					break;
				}
			}

			// Exception
			if ($prefixed)
				continue;

			// Check names
			$match = false;
			foreach ($names as $name) {
				if ($name == $handler) {
					$match = true;
					break;
				}
			}

			// Exception
			if ($match)
				continue;

			// Add valid handler
			$replacement[] = $handler;
		}

		// Switch
		$styles->queue = $replacement;
	}



	// Internal
	// ---------------------------------------------------------------------------------------------------



	/**
	 * Sanitize target values
	 */
	private function get_values($values) {
		$result = array();
		$values = array_map('trim', explode(',', $values));
		foreach ($values as $value) {
			if ('' !== $value)
				$result[] = $value;
		}
		return $result;
	}



}