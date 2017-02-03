<?php
class TwitterAPI {

	private $oauth_access_token;
	private $oauth_access_token_secret;
	private $consumer_key;
	private $consumer_secret;
	private $settings;

	public function __construct() {
		$this->oauth_access_token = "964281432-A9GCOHF7rPqqGByR3HmfCSgo5yeTn1zJ453P4UiE";
		$this->oauth_access_token_secret = "UjKglHHavgjJu1buHSVo1akuVedHmvub8tUTBcXYNCfo2";
		$this->consumer_key = "dS5wVlOPayPBtdlzbrP6aMCim";
		$this->consumer_secret = "sPVeESwmkChQxXLnsIjzzAwmSQFYi3mfBqvYOHu05ExXII27LM";

		$this->settings = array(
				'oauth_access_token'        => $this->oauth_access_token,
				'oauth_access_token_secret' => $this->oauth_access_token_secret,
				'consumer_key'              => $this->consumer_key,
				'consumer_secret'           => $this->consumer_secret
		);
	}

	public function fetchHashtagTweets($hashtag) {
		if(empty($hashtag)) return;

		$url='https://api.twitter.com/1.1/search/tweets.json';
		$getfield = '?q=#' . $hashtag.'&include_entities=false&with_twitter_user_id=true&result_type=mixed&count=10';
		$requestMethod = 'GET';
		 
		$twitter = new TwitterAPIExchange( $this->settings );
		 
		$response = $twitter->setGetfield( $getfield )
		->buildOauth( $url, $requestMethod )
		->performRequest();

		if(!empty($response))
			return (json_decode($response));

			return false;
	}


}
