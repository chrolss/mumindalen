<!DOCTYPE html>
<html>
  <head>
    <title>IoT Smart Mirror Layout</title>
	  <link rel="stylesheet" href="css/mirror-live.css">
	  <link rel="stylesheet" href="css/weather-icons.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>


<body class="body">
  <header class="main-header">
    <p> An empty and probably unnecessary header on the page </p>
  </header>

	<?php
		$json_string2 = file_get_contents("http://api.wunderground.com/api/3cb4a366870aa8ef/hourly/q/Sweden/Kungsholmen.json");
		$parsed_json = json_decode($json_string2);
		$time_1 = $parsed_json->hourly_forecast[0]->{'FCTTIME'}->{'hour'};
		$temp_1 = $parsed_json->hourly_forecast[0]->{'temp'}->{'metric'};
		$prog_1 = $parsed_json->hourly_forecast[0]->{'wx'};
		$time_2 = $parsed_json->hourly_forecast[2]->{'FCTTIME'}->{'hour'};
		$temp_2 = $parsed_json->hourly_forecast[2]->{'temp'}->{'metric'};
		$prog_2 = $parsed_json->hourly_forecast[2]->{'wx'};
		$time_3 = $parsed_json->hourly_forecast[4]->{'FCTTIME'}->{'hour'};
		$temp_3 = $parsed_json->hourly_forecast[4]->{'temp'}->{'metric'};
		$prog_3 = $parsed_json->hourly_forecast[4]->{'wx'};
		$time_4 = $parsed_json->hourly_forecast[6]->{'FCTTIME'}->{'hour'};
		$temp_4 = $parsed_json->hourly_forecast[6]->{'temp'}->{'metric'};
		$prog_4 = $parsed_json->hourly_forecast[6]->{'wx'};
		$time_5 = $parsed_json->hourly_forecast[8]->{'FCTTIME'}->{'hour'};
		$temp_5 = $parsed_json->hourly_forecast[8]->{'temp'}->{'metric'};
		$prog_5 = $parsed_json->hourly_forecast[8]->{'wx'};
		?>
  <div class="container">
    <div class="weather-container">
      <article class="weather-current">
      	<i id="bigIcon" class="wi wi-dust"></i>
        <span style="vertical-align: middle;"> <?php echo "$temp_1" ?>&deg; </span>
      </article>
      <div class="weather-forecast">
        <div class="weather-forecast-1">
          <img src="sun.png" alt=<?php echo "$prog_2" ?> style="vertical-align: middle;"/>
          <i id="smallIcon1" class="wi wi-dust"></i>
          <span style="vertical-align: middle;"> <?php echo "$temp_2" ?>&deg; </span>
        </div>
        <div class="weather-forecast-2">
          <i id="smallIcon2" class="wi wi-dust"></i>
          <img src="sun.png" alt=<?php echo "$prog_3" ?> style="vertical-align: middle;"/>
          <span style="vertical-align: middle;"> <?php echo "$temp_3" ?>&deg; </span>
        </div>
        <div class="weather-forecast-3">
          <i id="smallIcon3" class="wi wi-dust"></i>
          <img src="thunderstorm.png" alt=<?php echo "$prog_4" ?> style="vertical-align: middle;"/>
          <span style="vertical-align: middle;"> <?php echo "$temp_4" ?>&deg; </span>
        </div>
        <div class="weather-forecast-4">
          <i id="smallIcon4" class="wi wi-dust"></i>
          <img src="thunderstorm.png" alt=<?php echo "$prog_5" ?> style="vertical-align: middle;"/>
          <span style="vertical-align: middle;"> <?php echo "$temp_5" ?>&deg; </span>
        </div>
      </div>
      <div class="weather-forecast-time">
        <div class="weather-forecast-time-1">
          <p> <?php echo "$time_2:00" ?> </p>
        </div>
        <div class="weather-forecast-time-2">
          <p> <?php echo "$time_3:00" ?> </p>
        </div>
        <div class="weather-forecast-time-3">
          <p> <?php echo "$time_4:00" ?> </p>
        </div>
        <div class="weather-forecast-time-4">
          <p> <?php echo "$time_5:00" ?> </p>
        </div>
      </div>
    </div>

    <div class="time-calendar-container">
      <?php date_default_timezone_set("Europe/Stockholm") ?>
      <div id="time" style="font-size: 660%; margin-bottom: 0; padding-bottom: 0;">
        <p>  </p>
      </div>
      <div class="date">
				<p> <?php print date('l'); ?><br> <?php print date('j F') ; ?> </p>
      </div>
      <div class="schedule">
        <p> Mumindalen schedule </p>
        <p> <?php echo $row["Title"] ?>  </p>
        <p> 5/3 @ 21:20 - Fly to Stockholm </p>
      </div>
    </div>
  </div>


  <footer class="urgent-message">
    <p> SmartMirror by Mumindalen </p>
  </footer>

<script>
	

	function returnIcon() {
		var prog1=<?php echo json_encode($prog_1); ?>;
		document.getElementById("bigIcon").className = dictionary(prog1);
		var prog2=<?php echo json_encode($prog_2); ?>;
		document.getElementById("smallIcon1").className = dictionary(prog2);
		var prog3=<?php echo json_encode($prog_3); ?>;
		document.getElementById("smallIcon2").className = dictionary(prog3);
		var prog4=<?php echo json_encode($prog_4); ?>;
		document.getElementById("smallIcon3").className = dictionary(prog4);
		var prog5=<?php echo json_encode($prog_5); ?>;
		document.getElementById("smallIcon4").className = dictionary(prog5);
	}
	returnIcon();
    function checkTime(i) {
      if (i < 10) {
        i = "0" + i;
      }
      return i;
    }
      function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        // add a zero in front of numbers<10
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
        t = setTimeout(function() {
          startTime()
        }, 500);
      }
      startTime();

    function dictionary(_name){
    	if (_name == "Rain"){
    		return "wi wi-rain";
    	}
    	else{
    		return "wi wi-sun";
    	}
    };
</script>



</body>
</html>
