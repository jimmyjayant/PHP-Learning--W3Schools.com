<?php
// Variable to check
// url with no query string
$url = "https://www.w3schools.com";

// url with query string
$urlwqstr = "https://www.w3schools.com?title=w3schools";

// Validate url
if(!filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo "$url is a valid URL with a query string.<br>";
}
else {
    echo "$url is not a valid URL with a query string.<br>";
}


// Validate url with a query string
if(!filter_var($urlwqstr, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo "<br>$urlwqstr is a valid URL with a query string.";
}
else {
    echo "<br>$urlwqstr is not a valid URL with a query string.";
}
?>