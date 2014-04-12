<?php
	//Feed items in a multidimensional array
	function rssDataRaw($rssFeed, $limit) {
		$rss = new DOMDocument();
		$rss->load($rssFeed);
		$feed = array();

		$i=0;//Default counter value

		foreach ($rss->getElementsByTagName('item') as $node) {
			
			//If counter is below the set limit then get an RSS item
			if($i<$limit) {

				$item = array (
					'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
					'title' => $node->getElementsByTagName('title')->item(0)->nodeValue
					);

				array_push($feed, $item);

				//Increase counter by 1
				$i++;
			}

		}

		//Return multi-dimensional RSS feed array
		return $feed;
	}


	//Feed items as HTML list
	function rssDataHtmlListRender($rssFeed, $limit) {
		//Get raw data as an array
		$rssItems = rssDataRaw($rssFeed, $limit);

		//Check if RSS feed is returned
		if ($rssItems) {
			$render = '<ul>';

				foreach ($rssItems as $key => $value) {
					$render .= '<li><a href="'. $value['link'] .'">'. $value['title'] . '</a></li>';
				}

			$render .= '</ul>';
		} else {
			//Do something if no RSS feed is returned
		}

		return $render;
	}


	//RSS Feeds rendered as an HTML tile - Pass the tile title, feed and limit in the function
	function rssDataRender($title, $rssFeed, $limit) {
		
		//Get data as a HTML formatted list
		$data = rssDataHtmlListRender($rssFeed, $limit);

		//Check if data is returned from calling the above function
        if ($data) {
			$render = '
		        <div class="tile">
		            <h2 class="text-center">' . $title . '</h2>
		            <div class="widget rss-feed">
		                ' . $data . '
		            </div>
		        </div>
			';
        } else {
            $render = '
		        <div class="tile">
		            <h2 class="text-center">' . $title . '</h2>
		            <div class="widget rss-feed">
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