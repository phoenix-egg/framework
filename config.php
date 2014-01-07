<?php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'framework');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');




define('URL', 'http://localhost/testing/framework');
define('ABSPATH', dirname(__FILE__) . '/');

define('SETTINGS', ABSPATH . 'settings.json');
define('STARTER', ABSPATH . 'application/controller/controller.php');
define('VIEW', ABSPATH . 'application/view/');