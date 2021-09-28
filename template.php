<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather report</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid black;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<form method="get">
    <input type="text" placeholder="Search for City" name="search">
    <input type="submit" value="Search" name="searchButton">
</form>
<br>
<table>
    <tr>
        <th>Location: <?php echo $q;?></th>
        <th>Today <img src="<?php echo $iconToday; ?>" alt="img"></th>
        <th>Tomorrow <img src="<?php echo $iconTomorrow; ?>" alt=""></th>
        <th>Day after tomorrow <img src="<?php echo $iconAfterTmrw; ?>" alt=""></th>
    </tr>
    <tr>
        <td>Minimum temperature </td>
        <td><?php echo $todayMinTemp?> C</td>
        <td><?php echo $tomorrowMinTemp?> C</td>
        <td><?php echo $dayAfterTmrwMinTemp?> C</td>
    </tr>
    <tr>
        <td>Maximum temperature</td>
        <td><?php echo $todayMaxTemp?> C</td>
        <td><?php echo $tomorrowMaxTemp?> C</td>
        <td><?php echo $dayAfterTmrwMaxTemp?> C</td>
    </tr>
    <tr>
        <td>Average temperature </td>
        <td><?php echo $todayAvgTemp?> C</td>
        <td><?php echo $tomorrowAvgTemp?> C</td>
        <td><?php echo $dayAfterTmrwAvgTemp?> C</td>
    </tr>
    <tr>
        <td>Maximum wind speed KPH: </td>
        <td><?php echo $todayMaxWind?></td>
        <td><?php echo $tomorrowMaxWind?></td>
        <td><?php echo $dayAfterTmrwMaxWind?></td>
    </tr>
    <tr>
        <td>Precipitation in mm: </td>
        <td><?php echo $todayPrecipitation ?></td>
        <td><?php echo $tomorrowPrecipitation ?></td>
        <td><?php echo $dayAfterTmrwPrecipitation ?></td>
    </tr>
    <tr>
        <td>Visibility in Km: </td>
        <td><?php echo $todayVisibilityKm ?></td>
        <td><?php echo $tomorrowVisibilityKm ?></td>
        <td><?php echo $dayAfterTmrwVisibilityKm ?></td>
    </tr>
    <tr>
        <td>Sunrise: </td>
        <td><?php echo $todaySunrise; ?></td>
        <td><?php echo $tomorrowSunrise; ?></td>
        <td><?php echo $dayAfterTmrwSunrise; ?></td>
    </tr>
    <tr>
        <td>Sunset: </td>
        <td><?php echo $todaySunset; ?></td>
        <td><?php echo $tomorrowSunset; ?></td>
        <td><?php echo $dayAfterTmrwSunset; ?></td>
    </tr>
</table>
<br>
<a href="https://www.weatherapi.com/" target="_blank" title="Free Weather API"><img src='//cdn.weatherapi.com/v4/images/weatherapi_logo.png' alt="Weather data by WeatherAPI.com" border="0"></a>
</body>
</html>