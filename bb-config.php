<?php 

/* BoxBilling Configuration File */

/* More information on this file at http://www.boxbilling.com/docs/ */

/* Define timezone */
date_default_timezone_set('Asia/Jakarta');
/* Set default date format */
define('BB_DATE_FORMAT', 'l, d F Y');

/* Database */
define('BB_DB_NAME', 'billing');
define('BB_DB_USER', 'root');
define('BB_DB_PASSWORD', 'suck-IT26');
define('BB_DB_HOST', 'localhost');
define('BB_DB_TYPE', 'mysql');

/* Live site URL with trailing slash */
define('BB_URL', 'https://bits.co.id:5555/');

/* BoxBilling license key */
define('BB_LICENSE', 'FREE-CM3Q-XCTB-4532-782W-F7ES');

/* Enable or disable warning messages */
define('BB_DEBUG', TRUE);

/* Enable or disable pretty urls. Please configure .htaccess before enabling this feature. */
define('BB_SEF_URLS', TRUE);

/* Default application locale */
define('BB_LOCALE', 'id_ID');

/* Translatable locale format */
define('BB_LOCALE_DATE_FORMAT', '%A, %d %B %G');

/* Translatable time format */
define('BB_LOCALE_TIME_FORMAT', ' %T');

/* Default location to store application data. Must be protected from public. */
define('BB_PATH_DATA', dirname(__FILE__) . '/bb-data');
