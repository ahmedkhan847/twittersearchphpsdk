<?php

include "vendor/autoload.php";

use Twitter\Lists\Lists;

$list = new Lists();
$list->setToken("sVRnCXPUplLFePmzOqqoir8oR","PzmlGmm6UoJluWupC7js2hx025IwaY8gLD4I8BanQZtwS2g2Ql");
$value = ["list_id" => "821989883380199429",
"count" => "100"];
$lists = $list->getListMembers($value);
echo "<pre>";
print_r($lists);
echo "</pre>";
?>