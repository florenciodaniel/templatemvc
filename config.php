<?php
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "https://localhost/templatemvc/");
	define("DB_NAME", "template");
	define("DB_HOST", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
} else {
	define("DB_NAME", "template");
	define("DB_HOST", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
}

