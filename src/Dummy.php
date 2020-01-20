<?php

declare(strict_types=1);

namespace ScayTrase\PackageVersions;

use PackageVersions\Versions;

final class Dummy
{
    public static function getVersion($packageName): string
    {
        return Versions::getVersion($packageName);
    }
}
