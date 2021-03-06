<?php
$app = __DIR__;

// server domain
define('DOMAIN', '192.168.1.100');

// redis database configure
define('REDIS_HOST', '127.0.0.1');
define('REDIS_PORT', 6379);
define('REDIS_PASSWORD', NULL);
define('REDIS_DB', 0);

// radius server configure
define('RADIUS_HOST', '127.0.0.1');
define('RADIUS_PORT', 6379);
define('RADIUS_PASSWORD', NULL);
define('RADIUS_DB', 0);

// postgres database
define('PGSQL_HOST', '127.0.0.1');
define('PGSQL_PORT', 5432);
define('PGSQL_USER', 'postgres');
define('PGSQL_PASSWORD', 'postgres');
define('PGSQL_DB', 'postgres');

// order database
define('ORDER_HOST', '127.0.0.1');
define('ORDER_PORT', 5432);
define('ORDER_USER', 'postgres');
define('ORDER_PASSWORD', 'postgres');
define('ORDER_DB', 'postgres');

// postgres database
define('PBX_HOST', '127.0.0.1');
define('PBX_PORT', 5432);
define('PBX_USER', 'postgres');
define('PBX_PASSWORD', 'postgres');
define('PBX_DB', 'freeswitch');

// cdr database
define('CDR_HOST', '127.0.0.1');
define('CDR_PORT', 5432);
define('CDR_USER', 'postgres');
define('CDR_PASSWORD', 'postgres');
define('CDR_DB', 'postgres');

// freeswitch esl configure
define('ESL_HOST', '127.0.0.1');
define('ESL_PORT', '8021');
define('ESL_PASSWORD', 'ClueCon');

// money limit
define('MONEY_LIMIT', 150);

// baidu apikey
define('APIKEY', 'c5a7f692657f3a15e3d7bfab0653a0c8');

// setup default timezone
date_default_timezone_set("Asia/Shanghai");
