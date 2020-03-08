<?php

require_once './vendor/autoload.php';

use Controllers\ActAddComment;
use Controllers\ActLogin;
use Controllers\ActRegistration;
use Lipid\App\ApplicationStd;
use MyApp\ActIndex;

/**
 *
 * @author Ilin Mikhail
 */

if ($_SERVER['APP_MODE'] == 'dev') {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

(new ApplicationStd(
    [
        '/' => new ActIndex(),
        '/login' => new ActLogin(),
        '/register' => new ActRegistration(),
        '/store' => new ActAddComment(),
    ]
))->start();
