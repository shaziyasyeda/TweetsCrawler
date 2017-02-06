<?php
if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	die("Welcome!");
}
require_once(  __DIR__ . '/loader.php' );

$result['success'] = false;

if(empty($_GET['ht'])) {
	$result['msg'] = "No hashtag sent";
	die(json_encode($result));
}

$hashtag = $_GET['ht'];
$isFirst = !empty($_GET['first']) && $_GET['first'] == 1? true : false;
$twtProcessor = new TweetsProcessor();
$tweets = $twtProcessor->hashtagTweets($hashtag, $isFirst);
if(!empty($tweets)) {
	$result['tweets'] = $tweets;
	$result['success'] = true;
}
die(json_encode($result));

