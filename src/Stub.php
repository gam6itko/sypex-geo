<?php

declare(strict_types=1);

namespace Sypex;

/**
 * For testing purposes.
 */
final class Stub implements GeoInterface
{
    public function __construct(
        private mixed $getResult = null,
        private mixed $getNumResult = null,
        private mixed $getCountryResult = null,
        private mixed $getCountryIdResult = null,
        private mixed $getCityResult = null,
        private mixed $getCityFullResult = null,
        private mixed $aboutResult = null,
    )
    {
    }

    public function get(string $ip): mixed
    {
        return $this->getResult;
    }

    public function getNum(string $ip): mixed
    {
        return $this->getNumResult;
    }

    public function getCountry(string $ip): mixed
    {
        return $this->getCountryResult;
    }

    public function getCountryId(string $ip): mixed
    {
        return $this->getCountryIdResult;
    }

    public function getCity(string $ip): mixed
    {
        return $this->getCityResult;
    }

    public function getCityFull(string $ip): mixed
    {
        return $this->getCityFullResult;
    }

    public function about(): mixed
    {
        return $this->aboutResult;
    }
}
