<?php

use App\App;

defined('START_TIME') ?: define('START_TIME', microtime(true));

require_once __DIR__ . '/vendor/autoload.php';

$app = new App(__DIR__);

require_once(ABSPATH . 'wp-settings.php');