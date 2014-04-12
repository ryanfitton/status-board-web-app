<?php
	//Convert temperature from Kelvin to Celsius - Kelvin must be subtracted by 273.15 to convert to Celsius
	function temperatureKelvinToCelsius($temperature) {
		$celsius = round($temperature - 273.15, 1); //Round decimal digits to 1

		return $celsius;
	}


	//Weather data for 5 days in an array - Pass the city and weather icon image location in the function
	function weatherData($city, $imgLocation) {
        //Get JSON data and decode
        $jsonWeather = file_get_contents("http://api.openweathermap.org/data/2.5/forecast/daily?q=" . $city . "&cnt=5&mode=json", "r");
        
        //Check if weather data is returned
        if ($jsonWeather) {
            $jsonWeatherArray = json_decode($jsonWeather, true);

            $weatherDataArray = array(
            	//Day 1
            	"1" => array(
            		//Datetime of data recieved in unixtime, this is different for each day
            		'datetime' => $jsonWeatherArray['list'][0]['dt'],

            		//Weather icon
            		'icon' => $imgLocation . $jsonWeatherArray['list'][0]['weather'][0]['icon'] .".png",

            		//The temperature for the day (in celsius)
            		'temperature' => temperatureKelvinToCelsius($jsonWeatherArray['list'][0]['temp']['day']),

            		//Description of the weather
            		'description' => $jsonWeatherArray['list'][0]['weather'][0]['description']
            	),
            	//Day 2
            	"2" => array(
            		'datetime' => $jsonWeatherArray['list'][1]['dt'],
            		'icon' => $imgLocation . $jsonWeatherArray['list'][1]['weather'][0]['icon'] .".png",
            		'temperature' => temperatureKelvinToCelsius($jsonWeatherArray['list'][1]['temp']['day']),
            		'description' => $jsonWeatherArray['list'][1]['weather'][0]['description']
            	),
            	//Day 3
            	"3" => array(
            		'datetime' => $jsonWeatherArray['list'][2]['dt'],
            		'icon' => $imgLocation . $jsonWeatherArray['list'][2]['weather'][0]['icon'] .".png",
            		'temperature' => temperatureKelvinToCelsius($jsonWeatherArray['list'][2]['temp']['day']),
            		'description' => $jsonWeatherArray['list'][2]['weather'][0]['description']
            	),
            	//Day 4
            	"4" => array(
            		'datetime' => $jsonWeatherArray['list'][3]['dt'],
            		'icon' => $imgLocation . $jsonWeatherArray['list'][3]['weather'][0]['icon'] .".png",
            		'temperature' => temperatureKelvinToCelsius($jsonWeatherArray['list'][3]['temp']['day']),
            		'description' => $jsonWeatherArray['list'][3]['weather'][0]['description']
            	),
            	//Day 5
            	"5" => array(
            		'datetime' => $jsonWeatherArray['list'][4]['dt'],
            		'icon' => $imgLocation . $jsonWeatherArray['list'][4]['weather'][0]['icon'] .".png",
            		'temperature' => temperatureKelvinToCelsius($jsonWeatherArray['list'][4]['temp']['day']),
            		'description' => $jsonWeatherArray['list'][4]['weather'][0]['description']
            	)
            );
        } else {
            //Do something if no weather data is returned
        }

        return $weatherDataArray;
	}


	//Weather rendered as an HTML tile - Pass the tile title, city and weather icon image location in the function
	function weatherRender($title, $city, $imgLocation) {
		$data = weatherData($city, $imgLocation);

        //Check if data is returned from calling the above function
        if ($data) {
            $render = '
                <div class="tile">
                    <h2 class="text-center">' . $title . '</h2>
                    <div class="widget weather">
                        <div class="row text-left today">
                            <div class="col-xs-4">
                                <img src="' . $data[1]['icon'] . '" />
                            </div>
                            <div class="col-xs-8">
                                <p class="temp-today">' . $data[1]['temperature'] . '&deg;</p>
                                <p>' . $data[1]['description'] . '</p>
                            </div>
                        </div>
                        <div class="row future">
                            <div class="col-xs-3">
                                <h4>' . gmdate("D", $data[2]['datetime']) . '</h4>
                                <p>' . $data[2]['temperature'] . '&deg;</p>
                                <img src="' . $data[2]['icon'] . '" />
                            </div>
                            <div class="col-xs-3">
                                <h4>' . gmdate("D", $data[3]['datetime']) . '</h4>
                                <p>' . $data[3]['temperature'] . '&deg;</p>
                                <img src="' . $data[3]['icon'] . '" />
                            </div>
                            <div class="col-xs-3">
                                <h4>' . gmdate("D", $data[4]['datetime']) . '</h4>
                                <p>' . $data[4]['temperature'] . '&deg;</p>
                                <img src="' . $data[4]['icon'] . '" />
                            </div>
                            <div class="col-xs-3">
                                <h4>' . gmdate("D", $data[5]['datetime']) . '</h4>
                                <p>' . $data[5]['temperature'] . '&deg;</p>
                                <img src="' . $data[5]['icon'] . '" />
                            </div>
                        </div>
                    </div>
                </div>
            ';
        } else {
            $render = '
                <div class="tile">
                    <h2 class="text-center">' . $title . '</h2>
                    <div class="widget weather">
                        <div class="row text-center">
                            <h1 class="error">No data available</h1>
                        </div>
                    </div>
                </div>
            ';
        }

		return $render;
	}
?>