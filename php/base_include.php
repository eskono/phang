<?php
date_default_timezone_set('UTC');

require_once __DIR__.'/vendor/autoload.php';
//require_once __DIR__.'/db/credentials.php';

// CONSTANTS
define("DB_SETTINGS_DIR", __DIR__.'/settings/database.ini');
//define("MEMCACHE_SETTINGS_DIR", __DIR__.'/settings/memcache.ini');

define("MEMCACHE_LIBRARY", 'memcache');
define("MEMCACHE_HOST", '127.0.0.1');
define("MEMCACHE_PORT", '11211');
