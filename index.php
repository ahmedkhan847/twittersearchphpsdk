<?php
//header("Access-Control-Allow-Origin: http://wordpress-21306-71265-204812.cloudwaysapps.com");
header('Access-Control-Allow-Origin: http://www.cloudways.com');
include "vendor/autoload.php";

use Twitter\Lists\Lists;
$listid = $_GET['q'];
$list = new Lists();
$list->setToken("sVRnCXPUplLFePmzOqqoir8oR","PzmlGmm6UoJluWupC7js2hx025IwaY8gLD4I8BanQZtwS2g2Ql");
$value = ["list_id" => $listid,
"count" => "100"];
$lists = $list->getListMembers($value);
echo "<pre>";
print_r($lists);
echo "</pre>";
?>