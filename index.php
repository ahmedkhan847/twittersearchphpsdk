<?php

include "vendor/autoload.php";

use Twitter\Lists\Lists;

$list = new Lists();
$list->setToken("YOUR Consumer Key","YOUR Consumer Secret-Key");
$value = ["list_id" => "821989883380199429",
"count" => "100"];
$lists = $list->getListMembers($value);
echo "<pre>";
print_r($lists);
echo "</pre>";
?>