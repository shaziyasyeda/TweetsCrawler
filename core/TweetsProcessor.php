<?php
class TweetsProcessor {

	public function __construct() {

	}

	public function hashtagTweets($hashtag) {
		$twitterApi = new TwitterAPI();
		$tweets = $twitterApi->fetchHashtagTweets($hashtag);
		print_r($tweets);
	}

}
