<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Correct autoload path
require __DIR__.'/../vendor/autoload.php';

// Correct bootstrap app path
$app = require_once __DIR__.'/../bootstrap/app.php';

// Handle the request
$app->handleRequest(Request::capture());

