<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Status Board</title>

        <!-- Contact Information -->
        <meta name="author" content="Ryan Fitton">
        <meta name="copyright" content="Copyright © 2014 Ryan Fitton" />

        <!-- JavaScript -->
        <script src="libs/jquery/jquery.min.js"></script>
        <script src="libs/fastclick/lib/fastclick.js"></script>
        <script src="libs/bootstrap/js/transition.js"></script>

        <!-- Mobile Device Setup -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"><!-- Viewport -->
        <meta name="apple-mobile-web-app-capable" content="yes"><!-- Sets whether a web application runs in full-screen mode -->
        <meta name="apple-mobile-web-app-status-bar-style" content="black"><!-- Sets the style of the status bar for a web application -->
        <meta name="mobile-web-app-capable" content="yes"><!-- Sets whether a web application runs in full-screen mode on Android Chrome -->
        <meta name="format-detection" content="telephone=no"><!-- Enables or disables automatic detection of possible phone numbers in a webpage in Safari on iOS -->

        <!-- Website Styling -->
        <link href="css/styles.css" rel="stylesheet">

        <!-- Website Icons -->
        <link rel="apple-touch-icon" sizes="152x152" href="img/icons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/icons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/icons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/icons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/icons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="57x57" href="img/icons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" href="img/icons/apple-touch-icon-60x60.png">
        <link rel="shortcut icon" href="img/icons/favicon.ico" />
        <link rel="ico" type="image/ico" href="img/icons/favicon.ico" />

        <script type="text/javascript">
            //Ajax page auto refresh
            //http://www.brightcherry.co.uk/scribbles/jquery-auto-refresh-div-every-x-seconds/
            $(document).ready(function() {
                $(".response-container").load("ajax-response-small-tablet-view-size.php");
                var refreshId = setInterval(function() {
                    $(".response-container").load('ajax-response-small-tablet-view-size.php?randval='+ Math.random());
                }, 9000);//9000 = 9 seconds
                $.ajaxSetup({ cache: false });
            });
        </script>
    </head>


    <body>

        <div id="wrap" class="response-container"><!-- Use wrap to keep footer sticky -->
            <!-- Ajax will load page content here -->
        </div>

<!--
        <div id="footer">
            <div class="row">
                <div class="col-md-4">
                        <p>.col-md-1</p>
                </div>
                <div class="col-md-4 text-center">
                        <p>.col-md-1</p>
                </div>
                <div class="col-md-4 text-right">
                        <p>.col-md-1</p>
                </div>
            </div>
        </div>
-->

    </body>
</html>