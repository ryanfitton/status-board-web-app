<?php
    //Include widget classes
    require 'service/clock.php';//Clock
    require 'service/weather.php';//Weather
    require 'service/rssFeed.php';//RSS Feed
?>
            <!-- For non-responsive views, use col-xs. For responsive, use col-md -->

            <div class="row">
                <div class="col-xs-6">
                    <?php echo clockRender('Clock'); ?>
                </div>

                <div class="col-xs-6">
                    <?php echo weatherRender('Weather (Wakefield)', 'Wakefield,uk', 'img/icons/weather/'); ?>
                </div>
            </div>



            <div class="row">
                <div class="col-xs-6">
                    <?php echo rssDataRender('Digital Ocean Status', 'http://www.digitaloceanstatus.com/rss', 5); ?>
                </div>

                <div class="col-xs-6">
                    <?php echo rssDataRender('Brickset News', 'http://brickset.com/feed', 5); ?>
                </div>
            </div>