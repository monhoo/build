<?php
// SITE_ROOT contains the full path to the tshirtshop folder
define('SITE_ROOT', dirname(dirname(__FILE__)));
// Application directories
define('PRESENTATION_DIR', SITE_ROOT . '/presentation/');
define('BUSINESS_DIR', SITE_ROOT . '/business/');
// Settings needed to configure the Smarty template engine
define('SMARTY_DIR', SITE_ROOT . '/libs/smarty/');
define('TEMPLATE_DIR', PRESENTATION_DIR . 'templates');
define('COMPILE_DIR', PRESENTATION_DIR . 'templates_c');
define('CONFIG_DIR', SITE_ROOT . '/include/configs');
//define('SSL_CERTIFICATION', SITE_ROOT . '/include/api.sandbox.paypal.com.pem');
//print_r( SSL_CERTIFICATION);
// These should be true while developing the web site
define('IS_WARNING_FATAL', true);
define('DEBUGGING', true);
// The error types to be reported
define('ERROR_TYPES', E_ALL);
// Settings about mailing the error messages to admin
define('SEND_ERROR_MAIL', false);
define('ADMIN_ERROR_MAIL', 'Administrator@example.com');
define('SENDMAIL_FROM', 'Errors@example.com');
ini_set('sendmail_from', SENDMAIL_FROM);
// By default we don't log errors to a file
define('LOG_ERRORS', false);
define('LOG_ERRORS_FILE', 'c:\\tshirtshop\\errors_log.txt'); // Windows
// define('LOG_ERRORS_FILE', '/home/username/tshirtshop/errors.log'); // Linux
/* Generic error message to be displayed instead of debug info
(when DEBUGGING is false) */
define('SITE_GENERIC_ERROR_MESSAGE', '<h1>TShirtShop Error!</h1>');

// Database connectivity setup
define('DB_PERSISTENCY', 'true');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');

define('DB_DATABASE', 'tshirtshop');
define('PDO_DSN', 'mysql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE);

// Server HTTP port (can omit if the default 80 is used)
define('HTTP_SERVER_PORT', '80');
/* Name of the virtual directory the site runs in, for example:
'/tshirtshop/' if the site runs at http://www.example.com/tshirtshop/
'/' if the site runs at http://www.example.com/ */
define('VIRTUAL_LOCATION', '/smarty_build/');
//define('VIRTUAL_LOCATION', '/e_commerce/Chapter02/');
// Configure product lists display options
define('SHORT_PRODUCT_DESCRIPTION_LENGTH', 150);
define('PRODUCTS_PER_PAGE', 4);

/* Minimum word length for searches; this constant must be kept in sync
with the ft_min_word_len MySQL variable */
define('FT_MIN_WORD_LEN', 4);

// We enable and enforce SSL when this is set to anything else than 'no'
define('USE_SSL', 'no');
// Administrator login information
define('ADMIN_USERNAME', 'admin');
define('ADMIN_PASSWORD', 'admin');

// Shopping cart item types
define('GET_CART_PRODUCTS', 1);
define('GET_CART_SAVED_PRODUCTS', 2);

// Cart actions
define('ADD_PRODUCT', 1);
define('REMOVE_PRODUCT', 2);
define('UPDATE_PRODUCTS_QUANTITIES', 3);
define('SAVE_PRODUCT_FOR_LATER', 4);
define('MOVE_PRODUCT_TO_CART', 5);

// Random value used for hashing
define('HASH_PREFIX', 'K1-');

// Constant definitions for order handling related messages

define('CUSTOMER_SERVICE_EMAIL', 'CustomerService@example.com');
define('ORDER_PROCESSOR_EMAIL', 'OrderProcessor@example.com');


// Store name
define('STORE_NAME', 'TShirtShop');

?>