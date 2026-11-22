<?php
/**
 * The base configuration for WordPress
 * Environment-aware with sensible local defaults.
 */
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') ?: (getenv('DB_NAME') ?: 'kitweb_wp') );
define( 'DB_USER', getenv('WORDPRESS_DB_USER') ?: (getenv('DB_USER') ?: 'kitweb_user') );
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: (getenv('DB_PASSWORD') ?: 'kitweb_password') );
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') ?: (getenv('DB_HOST') ?: 'localhost') );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

define( 'AUTH_KEY',         'xT&QJ!|*t(G-Q9-t=Q%w.11e)8j:p+V72v7x0a|gW=9452427a7c132840' );
define( 'SECURE_AUTH_KEY',  'n2_w558064434e320f779b6d61f1cb4d142b7811bb1fef544e3efbfbcf' );
define( 'LOGGED_IN_KEY',    '7b63f707f593256dbdcb51df527d928a5ce08051a8ba9fa1a3cf84dd36' );
define( 'NONCE_KEY',        '22f9ec67272714c330f6a2766ea9dff112abfc5500e9981882bc265e8a' );
define( 'AUTH_SALT',        '27d3fa878fa46ec98f1d8c1c469b8ef63402778da5560934988e0f63a2' );
define( 'SECURE_AUTH_SALT', '69a194ce0b9858597f7faea5aebf132e185e921b777a28848d56a310ec' );
define( 'LOGGED_IN_SALT',   '137e7a83d34fffa5ca884d5df6d2ad3178c187e1f435e076e273a246d8' );
define( 'NONCE_SALT',       '844697bfda30fa00beff8ab55859779be740e536109966db263923fc81' );

$table_prefix = 'wp_';
define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
