<?php

declare(strict_types=1);

use app\Application;
use joole\framework\Joole;

require_once '../vendor/autoload.php';
require_once '../php/configuration.php';

$app = new Application();

$app->setConfigurationsDirectory(__DIR__.'/../config/');
Joole::build($app)->run();