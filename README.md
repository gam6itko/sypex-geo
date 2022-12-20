# sypex/geo

Actualized library from <https://sypexgeo.net/ru/>.

- composer
- PSR-2
- PSR-4
- `throw` вместо `die`
- tests

## Installation

```
composer require sypex/geo
```

## Download Database file


```shell
wget https://sypexgeo.net/files/SxGeoCountry.zip
unzip SxGeoCountry.zip
rm SxGeoCountry.zip

wget https://sypexgeo.net/files/SxGeoCity_utf8.zip
unzip SxGeoCity_utf8.zip
rm SxGeoCity_utf8.zip
```

## Usage

```php
$filepath = 'SxGeo.dat';
$geo = new Geo($filepath); // by default SxGeo.dat
$geo = new SxGeo($filepath, Mode::BATCH | Mode::MEMORY); // the fastest way

// Get country (SxGeo Country)
//
// 2-letter ISO code of country
$country = $geo->getCountry($ip);
// number of country
$geo->getCountryId($ip);

// get city (SxGeo City, SxGeo City Max)
//
// short information, without region name, country and timezone
$geo->getCity($ip);
// full city information
$geo->getCityFull($ip);
// calls getCountry or getCity depending on the type of base
$city = $geo->get($ip);

// free resource
unset($geo);
```
