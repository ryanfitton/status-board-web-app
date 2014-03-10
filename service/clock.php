<?php
	//Clock Date and Time in array
	function clockData() {
		$time = date('H:i'); //E.g. 17:46
		$date = date('l jS F'); //E.g. Wednesday 5th March

		$array = array(
			'time' => $time,
			'date' => $date
		);

		return $array;
	}


	//Clock rendered as an HTML tile - Pass the tile title in the function
	function clockRender($title) {
		$data = clockData();

		$render = '
	        <div class="tile">
	            <h2 class="text-center">' . $title . '</h2>
	            <div class="widget clock">
	                <p class="time">' . $data["time"] . '</p>
	                <p class="date">' . $data["date"] . '</p>
	            </div>
	        </div>
		';

		return $render;
	}
?>