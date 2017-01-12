<?php

include "vendor/autoload.php";

use Twitter\Search\Search;

$search = new Search();
$search->setToken("YOUR-CONSUMER-KEY","YOUR-CONSUMER-KEY");
$value = ["q" => "twitter"];
echo "<pre>";
print_r($search->search($value));
echo "</pre>";
?>