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
    $temp_c = $parsed_json->{'hourly_forecast'}->{'FCTTIME'}->{'hour'};
    echo "Current temperature in Stockholm at 21 is: ${temp_c}\n";
  ?>

</body>
</html>
