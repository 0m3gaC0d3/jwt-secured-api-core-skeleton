<?php

require __DIR__ . '/../vendor/autoload.php';

(new \Symfony\Component\Dotenv\Dotenv())->loadEnv(__DIR__ . '/../.env');

define('APP_ROOT_PATH', dirname(__DIR__, 1).'/');

$kernel = new \OmegaCode\JwtSecuredApiCore\Kernel();
$kernel->run();
