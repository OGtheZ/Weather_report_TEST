<?php

require_once "vendor/autoload.php";

$key = "de24cf4d9a5240b589275428212809";
$client = new \WeatherAPILib\WeatherAPIClient($key);

$aPIs = $client->getAPIs();
$q = 'Riga';
if (isset($_GET['searchButton']))
{
    if ($_GET["search"] === "")
    {
        echo "Enter country name!";
    } else {
        $q = $_GET["search"];
    }
}
$result = $aPIs->getForecastWeather($q, 10);

$iconToday = $result->forecast->forecastday[0]->day->condition->icon;
$todayMinTemp = $result->forecast->forecastday[0]->day->mintempC;
$todayMaxTemp = $result->forecast->forecastday[0]->day->maxtempC;
$todayAvgTemp = $result->forecast->forecastday[0]->day->avgtempC;
$todayMaxWind = $result->forecast->forecastday[0]->day->maxwindKph;
$todayPrecipitation = $result->forecast->forecastday[0]->day->totalprecipMm;
$todayVisibilityKm = $result->forecast->forecastday[0]->day->avgvisKm;
$todaySunrise = $result->forecast->forecastday[0]->astro->sunrise;
$todaySunset = $result->forecast->forecastday[0]->astro->sunset;

$iconTomorrow = $result->forecast->forecastday[1]->day->condition->icon;
$tomorrowMinTemp = $result->forecast->forecastday[1]->day->mintempC;
$tomorrowMaxTemp = $result->forecast->forecastday[1]->day->maxtempC;
$tomorrowAvgTemp = $result->forecast->forecastday[1]->day->avgtempC;
$tomorrowMaxWind = $result->forecast->forecastday[1]->day->maxwindKph;
$tomorrowPrecipitation = $result->forecast->forecastday[1]->day->totalprecipMm;
$tomorrowVisibilityKm = $result->forecast->forecastday[1]->day->avgvisKm;
$tomorrowSunrise = $result->forecast->forecastday[1]->astro->sunrise;
$tomorrowSunset = $result->forecast->forecastday[1]->astro->sunset;

$iconAfterTmrw = $result->forecast->forecastday[2]->day->condition->icon;
$dayAfterTmrwMinTemp = $result->forecast->forecastday[2]->day->mintempC;
$dayAfterTmrwMaxTemp = $result->forecast->forecastday[2]->day->maxtempC;
$dayAfterTmrwAvgTemp = $result->forecast->forecastday[2]->day->avgtempC;
$dayAfterTmrwMaxWind = $result->forecast->forecastday[2]->day->maxwindKph;
$dayAfterTmrwPrecipitation = $result->forecast->forecastday[2]->day->totalprecipMm;
$dayAfterTmrwVisibilityKm = $result->forecast->forecastday[2]->day->avgvisKm;
$dayAfterTmrwSunrise = $result->forecast->forecastday[2]->astro->sunrise;
$dayAfterTmrwSunset = $result->forecast->forecastday[2]->astro->sunset;

include "template.php";