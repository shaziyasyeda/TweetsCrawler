<?php
class TweetsProcessor {

	public function __construct() {

	}

	public function hashtagTweets($hashtag, $isFirst = false) {
		$twtMgr = new TweetsManager();
		$twitterApi = new TwitterAPI();
		
		$ht_id = $twtMgr->getOrAddHashtagId($hashtag);
		$sinceId = $twtMgr->getLastTweetId();
		$twResponse = $twitterApi->fetchHashtagTweets($hashtag, $sinceId);
		
		if(empty($twResponse) || !is_object($twResponse) 
				|| empty($twResponse->statuses) || !is_array($twResponse->statuses)) {
				return empty($isFirst)? false: $twtMgr->getTweets($ht_id);
		}
		
		
		$tweets = $twResponse->statuses;
		$tweetsFromDb = array();
		if(!empty($isFirst) && (count($tweets) < 20)) {
			//$tweetsFromDb = $twtMgr->getTweets($ht_id, 1, 10);
		}
		
		$processedTweets = array();
		
		$twitter_url = "https://twitter.com/";
		
		for($i = 0; $i < count($tweets); $i++) {
			$tweet = (object) array();
			$tweet->id_str = $tweets[$i]->id_str;
			$tweet->text = $tweets[$i]->text;
			$tweet->user_id = $tweets[$i]->user->id_str;
			$tweet->is_quote_status = empty($tweets[$i]->is_quote_status)? false: true;
			$tweet->is_retweet = empty($tweets[$i]->retweeted)? false: true;
			$tweet->retweet_count = $tweets[$i]->retweet_count;
			$tweet->favorite_count = $tweets[$i]->favorite_count;
			$tweet->created_at = $tweets[$i]->created_at;
			$tweet->user_id = $tweets[$i]->user->id_str;
			$tweet->user_name = $tweets[$i]->user->name;
			$tweet->user_handle = $tweets[$i]->user->screen_name;
			$tweet->user_url = $twitter_url.$tweets[$i]->user->screen_name;
			$tweet->tweet_url = $twitter_url.$tweets[$i]->user->screen_name.'/status/'.$tweets[$i]->id_str;
			$tweet->user_profile_img = $tweets[$i]->user->profile_image_url;
			
			$result = $twtMgr->addTweet($tweet);
			
			if(!empty($result)) {
				array_push($processedTweets, $tweet);
			}
			
			$twtMgr->addUser($tweet);
			$twtMgr->addTwtHtRelation($ht_id, $tweet->id_str);
		}
		
		if(!empty($tweetsFromDb)) {
			$processedTweets = array_merge($tweetsFromDb, $processedTweets);
		}
		
		return $processedTweets;
	}

}
