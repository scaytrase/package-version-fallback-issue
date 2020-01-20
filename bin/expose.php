<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use ScayTrase\PackageVersions\Dummy;

echo 'symfony/symfony: ' . Dummy::getVersion('symfony/symfony') . PHP_EOL;
echo 'symfony/process: ' . Dummy::getVersion('symfony/process') . PHP_EOL;
echo 'infection/infection: ' . Dummy::getVersion('infection/infection') . PHP_EOL;
