<?php

declare(strict_types=1);

namespace Sypex\Tests;

use PHPUnit\Framework\TestCase;
use Sypex\Stub;

final class StubTest extends TestCase
{
    public function testStub(): void
    {
        $geo = new Stub(
            getResult: [],
            getNumResult: 1.0,
            getCountryResult: 'RU',
            getCountryIdResult: 123,
            getCityResult: ['city' => 'Moscow'],
            getCityFullResult: ['city' => 'Moscow', 'region' => 'Moscow Region'],
            aboutResult: null,
        );
        self::assertSame([], $geo->get('127.0.0.1'));
        self::assertSame(1.0, $geo->getNum('127.0.0.1'));
        self::assertSame('RU', $geo->getCountry('127.0.0.1'));
        self::assertSame(123, $geo->getCountryId('127.0.0.1'));
        self::assertSame(['city' => 'Moscow'], $geo->getCity('127.0.0.1'));
        self::assertSame(['city' => 'Moscow', 'region' => 'Moscow Region'], $geo->getCityFull('127.0.0.1'));
        self::assertSame(null, $geo->about());
    }
}
