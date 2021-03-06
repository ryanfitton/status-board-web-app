<?php
    //Include widget classes
    require 'service/clock.php';//Clock
    require 'service/weather.php';//Weather
    require 'service/rssFeed.php';//RSS Feed
?>
            <!-- For non-responsive views, use col-xs. For responsive, use col-md -->

            <div class="row">
                <div class="col-md-3">
                    <?php echo clockRender('Clock'); ?>
                </div>

                <div class="col-md-3">
                    <?php echo weatherRender('Weather (Wakefield)', 'Wakefield,uk', 'img/icons/weather/'); ?>
                </div>
                
                <div class="col-md-3">
                    <div class="tile">
                        <h2 class="text-center">Calendar</h2>
                        <p>.col-md-1</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="tile">
                        <h2 class="text-center">Quote of the day</h2>
                        <p>.col-md-1</p>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-9">
                    <?php echo rssDataRender('Digital Ocean Status', 'http://www.digitaloceanstatus.com/rss', 5); ?>
                </div>

                <div class="col-md-3">
                    <?php echo rssDataRender('BBC News West Yorkshire', 'http://feeds.bbci.co.uk/news/england/leeds_and_west_yorkshire/rss.xml', 5); ?>
                </div>
            </div>



            <div class="row">
                <div class="col-md-3">
                    <div class="tile">
                        <h2 class="text-center">Heading</h2>
                        <p>.col-md-1</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="tile">
                        <h2 class="text-center">Heading</h2>
                        <p>.col-md-1</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="tile">
                        <h2 class="text-center">Heading</h2>
                        <p>.col-md-1</p>
                    </div>
                </div>
            </div>