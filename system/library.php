<?php
	require_once('config.php');
	
	function base_dir($dir = '') {
		return BASE_DIR . $dir;
	}
	
	function base_url($url = '') {
		return BASE_URL . $url;
	}
	
	function get_array($array, $name = null) {
		return $name ? $array[$name] : $array;
	}
	
	function get_cookie($name = null) {
		return $name ? $_COOKIE[$name] : $_COOKIE;
	}
	
	function get_env($name = null) {
		return $name ? $_ENV[$name] : $_ENV;
	}
	
	function get_files($name = null) {
		return $name ? $_FILES[$name] : $_FILES;
	}
	
	function get_files_error($name) {
		return $_FILES[$name]['error'];
	}
	
	function get_files_name($name) {
		return $_FILES[$name]['name'];
	}
	
	function get_files_size($name) {
		return $_FILES[$name]['size'];
	}
	
	function get_files_tmp_name($name) {
		return $_FILES[$name]['tmp_name'];
	}
	
	function get_files_type($name) {
		return $_FILES[$name]['type'];
	}
	
	function get_get($name = null) {
		return $name ? $_GET[$name] : $_GET;
	}
	
	function get_globals($name = null) {
		return $name ? $GLOBALS
[$name] : $GLOBALS;
	}
	
	function get_post($name = null) {
		return $name ? $_POST[$name] : $_POST;
	}
	
	function get_request($name = null) {
		return $name ? $_REQUEST[$name] : $_REQUEST;
	}
	
	function get_server($name = null) {
		return $name ? $_SERVER[$name] : $_SERVER;
	}
	
	function get_session($name = null) {
		return $name ? $_SESSION[$name] : $_SESSION;
	}
	
	function has_array($array, $name) {
		return isset($array[$name]);
	}
	
	function has_cookie($name) {
		return isset($_COOKIE[$name]);
	}
	
	function has_env($name) {
		return isset($_ENV[$name]);
	}
	
	function has_files($name) {
		return isset($_FILES[$name]);
	}
	
	function has_get($name) {
		return isset($_GET[$name]);
	}
	
	function has_globals($name) {
		return isset($GLOBALS
[$name]);
	}
	
	function has_post($name) {
		return isset($_POST[$name]);
	}
	
	function has_request($name) {
		return isset($_REQUEST[$name]);
	}
	
	function has_server($name) {
		return isset($_SERVER[$name]);
	}
	
	function has_session($name) {
		return isset($_SESSION[$name]);
	}
	
	function redirect($location) {
		header("Location: $location");
	}
	
	function refresh() {
		header('Refresh: 0');
	}
	
	function template($name, $data) {
		return BASE_DIR . "/template/$name.php";
	}
?>