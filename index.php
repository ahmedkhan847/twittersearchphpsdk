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
$profiles = array();
foreach($lists as $key => $value){
    if(!empty($value)){
        foreach($value as $keys => $values){
      //  $profile = "<div class='activity-user-profile-content'><div class='content'><div class='stream-item-header'><a class='account-group js-user-profile-link' href='/sourcewordpress' rel='noopener'><img class='avatar js-action-profile-avatar  ' src='".$values->profile_image_url_https."' alt='' data-user-id='".$values->id."'><strong class='fullname js-action-profile-name'>".$values->name."</strong><span class='username js-action-profile-name'>@".$values->screen_name."</span></a> </div> <p class='bio '>".$values->description."</p></div>";
        
        $profile = "<section id='wptimetwitterprofilewidget-2' class='widget widget_wptimetwitterprofilewidget'><div id='wptimetwitterprofilewidget-2' class='wpt-tw-profile-wrap'>
        <div class='wpt-tp-cover' style='background: url(".$values->profile_background_image_url_https.") no-repeat;'><div class='wpt-tp-avatar-wrap'><a href='https://twitter.com/".$values->screen_name."' target='_blank' rel='nofollow'><img class='wpt-tp-avatar' src='".$values->profile_image_url_https."' /></a></div><h4 class='wpt-tp-name'><a href='https://twitter.com/".$values->screen_name."' target='_blank' rel='nofollow'>".$values->name."</a></h4><h5 class='wpt-tp-screen-name'><a href='https://twitter.com/".$values->screen_name."' target='_blank' rel='nofollow'>@".$values->screen_name."</a></h5></div><div class='wpt-tp-counts'>
<ul>
 	<li><span class='wpt-tp-count-name'>TWEETS</span><span class='wpt-tp-the-count'>".$values->statuses_count."</span></li>
 	<li><span class='wpt-tp-count-name'>FOLLOWING</span><span class='wpt-tp-the-count'>".$values->friends_count."</span></li>
 	<li><span class='wpt-tp-count-name'>FOLLOWERS</span><span class='wpt-tp-the-count'>".$values->followers_count."</span></li>
</ul>
</div>
<div class='wpt-tp-content-wrap'>
<div class='wpt-tp-content'>".
$values->description
."</br><ul>
 	<li class='fa fa-map-marker'>Moon</li>
 	<li class='fa fa-link'><a href='".$values->url."' target='_blank' rel='nofollow'>".$values->url."</a></li>
 	<li class='fa fa-calender-o'>".date("F j, Y",$values->created_at)."</li>
</ul>
</div>
</div>
</div>
</section>";
        array_push($profiles,$profile);
    }
    }
    
}
echo json_encode($profiles, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
?>