<?php

include "vendor/autoload.php";

use Twitter\TwitterSearch;

$search = new TwitterSearch();
$search->setTokken("70902893-GPVf9bzJ1ecYEay6cHnQTaQQb95GcmwbIOO02fMOi","8qo1PM1kodTsSZCx5ES6t2dXqPSqta13z1WpDsbibk3dl");
echo "<pre>";
print_r($search->search("ahmed khan"));
echo "</pre>";