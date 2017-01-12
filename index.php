<?php

include "vendor/autoload.php";

use Twitter\Search\Search;

$search = new Search();
$search->setTokken("afmowdkHQTZVZWMxx0dh5Bz4r","fuJ4HNNTkI27qZEFdv3g4MEMXdVoZHUIVXCwmDbqXBRWMrEQAU");
$value = ["q" => "ahmed khan"];
echo "<pre>";
print_r($search->search($value));
echo "</pre>";