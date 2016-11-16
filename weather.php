<!DOCTYPE html>
<html lang="se">

<head>
	<title>Weather API Test</title>


	<link rel="stylesheet" href="layout.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="w-body">
  <?php
    //$json_string = file_get_contents("http://api.wunderground.com/api/3cb4a366870aa8ef/geolookup/conditions/q/SE/Stockholm.json");
    //$parsed_json = json_decode($json_string);
    //$location = $parsed_json->{'location'}->{'city'};
    //$temp_f = $parsed_json->{'current_observation'}->{'temp_c'};
    //echo "Current temperature in ${location} is: ${temp_f}\n";


    $json_string2 = file_get_contents("http://api.wunderground.com/api/3cb4a366870aa8ef/hourly/q/SE/Stockholm.json");
    $parsed_json = json_decode($json_string2);
    //$location = $parsed_json->{'location'}->{'city'};
    $time_1 = $parsed_json->hourly_forecast[0]->{'FCTTIME'}->{'hour'};
    $temp_1 = $parsed_json->hourly_forecast[0]->{'temp'}->{'metric'};
    $prog_1 = $parsed_json->hourly_forecast[0]->{'wx'};
    $time_2 = $parsed_json->hourly_forecast[1]->{'FCTTIME'}->{'hour'};
    $temp_2 = $parsed_json->hourly_forecast[1]->{'temp'}->{'metric'};
    $prog_2 = $parsed_json->hourly_forecast[1]->{'wx'};
    $time_3 = $parsed_json->hourly_forecast[2]->{'FCTTIME'}->{'hour'};
    $temp_3 = $parsed_json->hourly_forecast[2]->{'temp'}->{'metric'};
    $prog_3 = $parsed_json->hourly_forecast[2]->{'wx'};
    echo "The weather in Stockholm at $time_1:00 is $prog_1 and temperature: ${temp_1}\n";
    echo "The weather in Stockholm at $time_2:00 is $prog_2 and temperature: ${temp_2}\n";
    echo "The weather in Stockholm at $time_3:00 is $prog_3 and temperature: ${temp_3}\n";
  ?>

</body>
</html>
