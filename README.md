# Status Board with PHP and JSON

## Modules

### Available
The current modules can be used:

* Clock
* RSS Feed Display
* Weather Information

### How to use modules
Include the PHP service file at the top of the page. Eg:

`<?php require 'service/weather.php';//Weather ?>`

The files should be included at the top of either; ajax-response-desktop-view-size.php or ajax-response-small-tablet-view-size.php

Less should then be compiled to include the module styling. Ensure styles.less includes module styling such as:

`@import "service/weather.less";`

## Setup
Depending on the screen size, you have the option of using two different PHP files:

* ajax-response-desktop-view-size.php
* ajax-response-small-tablet-view-size.php

Both files work in the same way, however the Twitter Bootstrap columns within ajax-response-small-tablet-view-size.php use 'col-xs-' rather than 'col-md-'.

When using ajax-response-small-tablet-view-size.php ensure the site.less file has the correct font sizes and margins, otherwise comment out and change sections which are not needed.

### Ajax
Ajax is used on index.php to ensure the page refreshes to show updated information seamlessly.

Depending on the screen size, the Ajax call will have to changed.

If using ajax-response-desktop-view-size.php ensure this URL is used within the .load methods, if using ajax-response-small-tablet-view-size.php ensure the .load method is using this URL.

The time between each refresh can be changed. The default is `9000` which is 9 seconds.

More information regarding the Ajax refresh can be found here: [http://www.brightcherry.co.uk/scribbles/jquery-auto-refresh-div-every-x-seconds/](http://www.brightcherry.co.uk/scribbles/jquery-auto-refresh-div-every-x-seconds/)

### LESS
LESS is used for CSS styling.

Only styles.less should be compiled.

styles.less should be compiled as a .css file into /css/styles.css

### Bower
Bower is used to retrieve the correct libraries.

* bower.json - Used to set the required libraries and their version numbers.
* .bowerrc - Used to set the folder which the libraries will be copied into.

Bower depends on Node and npm, these must be installed before bower can be used.

Once installed, browse to the folder containing the bower.json and .bowerrc files and run:
`bower install`

More information can be found here: [http://bower.io/](http://bower.io/)

### CHMOD File Permissions
Files and folders must have permissions set to `777`

Because this web app will be run internally on the Home Server there will not be any issues by changing file permissions for all files and folders for this web app to `777`.

## Miscellaneous

### Weather Data
Weather Data is provided by Open Weather Map

More information can be found on their website: [http://openweathermap.org/](http://openweathermap.org/)

## Thanks
Thanks to Wojciech Grzanka for providing weather icons to Iconbest.com

More information can be found here: [http://iconbest.com/2009/01/07/waether-iconset/#more-16](http://iconbest.com/2009/01/07/waether-iconset/#more-16)