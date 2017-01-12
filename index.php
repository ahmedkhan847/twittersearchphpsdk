<?php

include "vendor/autoload.php";

use Twitter\TwitterSearch;

$search = new TwitterSearch();
$search->setTokken("afmowdkHQTZVZWMxx0dh5Bz4r","fuJ4HNNTkI27qZEFdv3g4MEMXdVoZHUIVXCwmDbqXBRWMrEQAU");
$value = "70902893";
echo "<pre>";
print_r($search->getList($value));
echo "</pre>";