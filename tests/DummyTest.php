<?php

declare(strict_types=1);

namespace ScayTrase\PackageVersions\Tests;

use PHPUnit\Framework\TestCase;
use ScayTrase\PackageVersions\Dummy;

final class DummyTest extends TestCase
{
    public function testVersions(): void
    {
        self::assertSame('0.15.0', Dummy::getVersion('infection/infection'));
    }
}
