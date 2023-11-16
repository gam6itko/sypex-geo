<?php

declare(strict_types=1);

namespace Sypex;

class GeoAdapter implements GeoInterface
{
    private Geo $geo;

    public function __construct(Geo $geo)
    {
        $this->geo = $geo;
    }

    public function get(string $ip): string|array|bool
    {
        return $this->geo->get($ip);
    }

    public function getNum(string $ip): int|bool|float
    {
        return $this->geo->get_num($ip);
    }

    public function getCountry(string $ip): string|bool
    {
        return $this->geo->getCountry($ip);
    }

    public function getCountryId(string $ip): mixed
    {
        return $this->geo->getCountryId($ip);
    }

    public function getCity(string $ip): array|bool
    {
        return $this->geo->getCity($ip);
    }

    public function getCityFull(string $ip): array|bool
    {
        return $this->geo->getCityFull($ip);
    }

    public function about(): array
    {
        return $this->geo->about();
    }
}
