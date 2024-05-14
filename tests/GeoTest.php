<?php

declare(strict_types=1);

namespace Sypex\Tests;

use PHPUnit\Framework\TestCase;
use Sypex\Geo;

/**
 * @coversDefaultClass \Sypex\Geo
 */
final class GeoTest extends TestCase
{
    private const FILE_PATH = __DIR__.'/Resources/SxGeo.dat';

    /**
     * @covers ::getCountry
     * @dataProvider dataGetCountry
     */
    public function testGetCountry(string $ip, string $expected): void
    {
        $geo = new Geo(self::FILE_PATH);
        self::assertSame($expected, $geo->getCountry($ip));
    }

    public static function dataGetCountry(): iterable
    {
        yield ['8.8.8.8', 'US'];
        yield ['95.173.136.72', 'RU'];
    }

    /**
     * @covers ::getCity
     * @dataProvider dataGetCity
     */
    public function testGetCity(string $ip, bool|string $expected): void
    {
        $geo = new Geo(self::FILE_PATH);
        self::assertSame($expected, $geo->getCity($ip));
    }

    public static function dataGetCity(): iterable
    {
        yield ['8.8.8.8', false];
    }
}
