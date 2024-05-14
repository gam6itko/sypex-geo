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
    public function testGetCity(string $ip, $expected): void
    {
        $geo = new Geo(self::FILE_PATH);
        self::assertSame($expected, $geo->getCity($ip));
    }

    public static function dataGetCity(): iterable
    {
        yield ['8.8.8.8', false];
    }

    /**
     * @covers ::about
     */
    public function testAbout(): void
    {
        $geo = new Geo(self::FILE_PATH);
        $about = $geo->about();
        self::assertArrayHasKey('Created', $about);
        self::assertArrayHasKey('Charset', $about);
        self::assertArrayHasKey('Type', $about);
    }
}
