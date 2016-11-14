<!DOCTYPE html>
<html lang="se">

<head>
	<title>HTML5/CSS3 Responsive Theme</title>
	

	<link rel="stylesheet" href="layout.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="w-body">
  <?php
    $json_string = file_get_contents("http://api.wunderground.com/api/3cb4a366870aa8ef/geolookup/conditions/q/IA/Cedar_Rapids.json");
    $parsed_json = json_decode($json_string);
    $location = $parsed_json->{'location'}->{'city'};
    $temp_f = $parsed_json->{'current_observation'}->{'temp_f'};
    echo "Current temperature in ${location} is: ${temp_f}\n";
  ?>

</body>
</html>
