<?php
if (!function_exists('add_shortcode')) { function add_shortcode($tag, $func) {} }
if (!function_exists('add_filter')) { function add_filter($tag, $func) {} }
if (!function_exists('add_action')) { function add_action($tag, $func) {} }
if (!function_exists('plugin_basename')) { function plugin_basename($file) { return $file; } }
if (!function_exists('add_options_page')) { function add_options_page() {} }
if (!function_exists('register_setting')) { function register_setting() {} }
if (!function_exists('is_admin')) { function is_admin() { return false; } }
if (!function_exists('wp_enqueue_style')) { function wp_enqueue_style() {} }
if (!function_exists('wp_enqueue_script')) { function wp_enqueue_script() {} }
if (!function_exists('current_user_can')) { function current_user_can() { return true; } }
if (!function_exists('settings_fields')) { function settings_fields() {} }
if (!function_exists('__')) { function __($str) { return $str; } }
if (!function_exists('wp_die')) { function wp_die($msg = '') {} }
if (!function_exists('esc_attr')) { function esc_attr($str) { return $str; } }

require_once __DIR__ . '/../hearthisat/hearthis-shortcode.php';
