<?php
if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	die("Welcome!");
}
require_once(  __DIR__ . '/loader.php' );
$hashtag = 'VikasVsSCAM';
$isFirst = !empty($_GET['first']) && $_GET['first'] == 1? true : false;
$twtProcessor = new TweetsProcessor();
$tweets = $twtProcessor->hashtagTweets($hashtag, $isFirst);
if(empty($tweets)) {
	$result['success'] = false;
} else {
	$result['tweets'] = $tweets;
	$result['success'] = true;
}
die(json_encode($result));

