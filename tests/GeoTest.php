<?php

declare(strict_types=1);

namespace Sypex\Tests;

use PHPUnit\Framework\TestCase;
use Sypex\Geo;

class GeoTest extends TestCase
{
    private const FILE_PATH = __DIR__.'/Resources/SxGeo.dat';

    /**
     * @dataProvider dataGetCountry
     */
    public function testGetCountry(string $ip, string $expected): void
    {
        $geo = new Geo(self::FILE_PATH);
        self::assertSame($expected, $geo->getCountry($ip));
    }

    public function dataGetCountry(): iterable
    {
        yield ['8.8.8.8', 'US'];
        yield ['95.173.136.72', 'RU'];
    }
}
