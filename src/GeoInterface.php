<?php

declare(strict_types=1);

namespace Sypex;

interface GeoInterface
{
    public function get(string $ip): mixed;

    public function getNum(string $ip): mixed;

    public function getCountry(string $ip): mixed;

    public function getCountryId(string $ip): mixed;

    public function getCity(string $ip): mixed;

    public function getCityFull(string $ip): mixed;

    public function about(): mixed;
}
