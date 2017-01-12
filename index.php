<?php

include "vendor/autoload.php";

use Twitter\TwitterSearch;

$search = new TwitterSearch();

echo "<pre>";
print_r($search->search("sean mcdermott"));
echo "</pre>";