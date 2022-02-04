<?php
	
spl_autoload_register(function($className) {
	$file = dirname(__DIR__) . '\\src\\' . $className . '.php';
	$file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
	include_once $file;
});