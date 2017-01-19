<?php

include "vendor/autoload.php";

use Twitter\Search\Search;

$search = new Search();
$search->setToken("H9Sq6D2bywCSnaJkDbYgNmIeC","	PQ3MSBdAjLEQUfRo2Mg0z1BRoZDuREbbWAezahHjM7GlpelhxY");
$value = ["q" => "twitter"];
echo "<pre>";
print_r($search->search($value));
echo "</pre>";
?>