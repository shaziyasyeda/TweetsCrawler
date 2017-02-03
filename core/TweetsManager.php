<?php
class TweetsManager {

	private $tweets_table;
	private $db;

	public function __construct() {
		global $trxDb;
		$this->db = $trxDb;
		$this->tweets_table = "tweets";
	}

	public function addTweet() {


	}

	public function getTweets() {

	}

	public function doesTweetExist() {

	}

	public function getLastTweet() {

	}
}
