<?php

//URL Identifier
//Identifying the URLs that lie inside a text.
//Uses PHP and Regex


// The Regular Expression filter
$reg_exUrl = "/((((http|https|ftp|ftps)\:\/\/)|www\.)[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,4}(\/\S*)?)/";

// The Text you want to filter for urls
$text = "Google is going bust. Drop http://Google.com stock now. </br> The next big thing is not www.GoogleMaps.com. The text </br> you want to filter goes here. https://Timber.com. The text you </br> want to filter goes here. http://www.Apple.com will be strong after 20 years. </br> But http://Amazon.com and www.Microsoft.com on the other hand is the </br> new frontier for cloud technologies.";

// Check if there is a url in the text
if(preg_match($reg_exUrl, $text, $url)) {

       // make the urls hyper links
       echo preg_replace($reg_exUrl, "<a href=\"$1\">$1</a>", $text);

} else {

       // if no urls in the text just return the text
       echo $text;

}
?>