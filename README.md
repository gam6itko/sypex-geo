# sypex/geo

Актуализированная бибилиотека с сайта <https://sypexgeo.net/ru/>.

- composer
- PSR-2
- PSR-4
- `throw` вместо `die`
- есть тесты

## Установка

```
composer require sypex/geo
```

## Скачка файла БД

Получаем файл `SxGeo.dat`
```shell
wget https://sypexgeo.net/files/SxGeoCountry.zip
unzip SxGeoCountry.zip
rm SxGeoCountry.zip

wget https://sypexgeo.net/files/SxGeoCity_utf8.zip
unzip SxGeoCity_utf8.zip
rm SxGeoCity_utf8.zip
```

## Примеры использования

```php
$filepath = 'SxGeo.dat';
$geo = new Geo($filepath); // Режим по умолчанию, файл бд SxGeo.dat
$geo = new SxGeo($filepath, Mode::BATCH | Mode::MEMORY); // Самый быстрый режим пакетной обработки

// Определяем страну c БД содержащими страны (SxGeo Country)
//
// возвращает двухзначный ISO-код страны
$country = $geo->getCountry($ip);
// возвращает номер страны
$geo->getCountryId($ip);

// Определяем город (SxGeo City, SxGeo City Max)
//
// возвращает краткую информацию, без названия региона, страны и временной зоны
$geo->getCity($ip);
// возвращает полную информацию о городе, регионе и стране
$geo->getCityFull($ip);
// выполняет getCountry либо getCity в зависимости от типа базы
$city = $geo->get($ip);

// Если нужно осводить рессурсы - удаляем объект
unset($geo);
```
