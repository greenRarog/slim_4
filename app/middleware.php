<?php

declare(strict_types=1);

use App\Application\Middleware\SessionMiddleware;
use App\Application\Middleware\ZalupaMiddleware;
use Slim\App;

return function (App $app) {
    $app->add(SessionMiddleware::class);
};
