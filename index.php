<?php

require_once './vendor/autoload.php';

use Lipid\App\ApplicationStd;
use MyApp\ActIndex;

/**
 * My web application
 *
 * Short app description
 *
 * @author {- write your name in history -}
 */
(new ApplicationStd(
    [
        '/' => new ActIndex(),
        //'/login' => new ActLogin(),
        //'/logout' => new ActLogout(),
        //'/note' => new ActNote(),
    ]
))->start();
