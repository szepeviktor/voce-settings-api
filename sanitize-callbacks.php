<?php
/**
 *
 * @param variable $value
 * @param Voce_Setting $setting
 * @param array $args 
 * @return variable
 */
function vs_santize_checkbox($value, $setting, $args) {
	return !is_null($value);
}

/**
 *
 * @param variable $value
 * @param Voce_Setting $setting
 * @param array $args 
 * @return variable
 */
function vs_santize_text($value, $setting, $args) {
	return trim(strip_tags($value));
}

/**
 *
 * @param variable $value
 * @param Voce_Setting $setting
 * @param array $args 
 * @return variable
 */
function vs_sanitize_url($value, $setting, $args) {
	return esc_url_raw($value);
}

/**
 *
 * @param variable $value
 * @param Voce_Setting $setting
 * @param array $args 
 * @return variable
 */
function vs_sanitize_email($value, $setting, $args) {
	$value = trim($value);
	if(!is_email( $value )) {
		$setting->add_error(sprintf('The %s is not a valid email address', $setting->title));
		return null;
	}
	return $value;
}