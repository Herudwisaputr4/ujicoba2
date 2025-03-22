<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

$system_dir = __DIR__."/system";

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = $system_dir.'/storage/framework/maintenance.php')) {
    require $system_dir.'/storage/framework/maintenance.php';
}

// Register the Composer autoloader...
require $system_dir.'/vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once $system_dir.'/bootstrap/app.php')
    ->handleRequest(Request::capture());

$app->bind('path.public', function(){
    return __DIR__."/public";
});
