# Twitter API PHP-SDK 

A PHP-SDK for Twitter Search API and for Twitter Rest API. Just add the library in your project.

You can clone the repository or can install it using composer.

`composer require ahmedkhan847/twittersdkphp:dev-master:1.*`

Once the package is installed you can use the SDK for:

* Search in Twitter
* Getting users List from Twitter
* Getting memebers from the Twitter List

Set your consumer key and consumer seceret key and start searching on Twitter.

## Searching in Twitter

```php
<?php
include "vendor/autoload.php";

use Twitter\Search\Search;
$search = new Search();
$search->setToken("Consumer Key (API Key)","	Consumer Secret (API Secret)");
$value = ["q" => "twitter"];
$result = $search->search($value);
echo "<pre>";
print_r($result);
echo "</pre>";
?>
```
## Getting User List From Twitter
```php
<?php
include "vendor/autoload.php";

use Twitter\Lists\Lists;
$list = new Lists();
$list->setToken("Consumer Key (API Key)","	Consumer Secret (API Secret)");
$value = ["user_id" => "132646"];
$lists = $list->getUserList($value);
echo "<pre>";
print_r($lists);
echo "</pre>";
?>
```
## Getting List memebers From Twitter List

```php
<?php
include "vendor/autoload.php";

use Twitter\Lists\Lists;
$list = new Lists();
$list->setToken("Consumer Key (API Key)","	Consumer Secret (API Secret)");
$value = ["list_id" => "132646",
"count" => "100"];
$lists = $list->getListMembers($value);
echo "<pre>";
print_r($lists);
echo "</pre>";
?>
```
## Calling Any Twitter API URL

```php
<?php
include "vendor/autoload.php";

use Twitter;
$base = new Base();
$base->setToken("Consumer Key (API Key)","	Consumer Secret (API Secret)");
$value = ["user_id" => "132646"];
$result = $Base->callTwitter("get","favorites/list.json",$value);
echo "<pre>";
print_r($result);
echo "</pre>";
?>
```
Feel free to contribute to the master branch

