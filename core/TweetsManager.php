<?php
class TweetsManager {

	private $tweets_table;
	private $users_table;
	private $ht_table;
	private $db;
	private $ht_twt_relation;

	public function __construct() {
		global $trxDb;
		$this->db = $trxDb;
		$this->tweets_table = "tweets";
		$this->users_table = "twt_users";
		$this->ht_table = "hashtags";
		$this->ht_twt_relation = "ht_twt_mapping";
	}

	public function addTweet($twtObj) {
		if(empty($twtObj)) return false;
		try {
			$this->db->beginTransaction();
			
			$sql = "INSERT INTO $this->tweets_table SET
					tweetId = :tweetId,
					text = :text,
					user_id = :user_id,
					retweet_count = :retweet_count,
					favorite_count = :favorite_count,
					is_quote_status = :is_quote_status,
					is_retweet = :is_retweet,
					created_at = :created_at";
			$params = array(
					':tweetId' => $twtObj->id_str,
					':text' => $twtObj->text,
					':user_id' => $twtObj->user_id,
					':retweet_count' => $twtObj->retweet_count,
					':favorite_count' => $twtObj->favorite_count,
					':is_quote_status' => $twtObj->is_quote_status,
					':is_retweet' => $twtObj->is_retweet,
					':created_at' => $twtObj->created_at,
			);
			
			$prepStmnt = $this->db->prepare($sql);
			$prepStmnt->execute($params);
			$this->db->commit();
			return true;
		} catch(PDOException $e) {
			//echo $e->getMessage();
			$this->db->rollBack();
			if($e->getCode() == 23000) return true;
			return false;
		}
	}
	
	public function addUser($twtObj) {
		if(empty($twtObj)) return false;
		
		try {
			$this->db->beginTransaction();
			
			$sql = "INSERT INTO $this->users_table SET
				user_id = :user_id,
				user_handle = :user_handle,
				user_name = :user_name,
				user_profile_img = :user_profile_img";
			$params = array(
					':user_id' => $twtObj->user_id,
					':user_handle' => $twtObj->user_handle,
					':user_name' => $twtObj->user_name,
					':user_profile_img' => $twtObj->user_profile_img,
			);
				
			$prepStmnt = $this->db->prepare($sql);
			$prepStmnt->execute($params);
			
			$this->db->commit();
			return true;
		} catch(PDOException $e) {
			$this->db->rollBack();
			if($e->getCode() == 23000) return true;
			return false;
		}
	}

	public function getTweets($ht_id, $start = 0, $limit = 10) {
		try {
			$sql = "SELECT * FROM $this->tweets_table tt,$this->users_table ut, $this->ht_twt_relation htr
						WHERE htr.ht_id = $ht_id
						AND htr.twt_id = tt.tweetId 
						AND tt.user_id = ut.user_id
				 		ORDER BY tt.timestamp DESC LIMIT $start, $limit";
			$result = $this->db->query($sql,  PDO::FETCH_ASSOC);
				
			if(empty($result) ) return false;
			$tweets = array();
			$twitter_url = "https://twitter.com/";
			foreach ($result as $row) {
				$row['user_url'] = $twitter_url.$row['user_handle'];
				$row['tweet_url'] = $twitter_url.$row['user_handle'].'/status/'.$row['tweetId'];
				array_push($tweets, $row);
			}
			return $tweets;
		} catch(PDOException $e) {
			return false;
		}
	}

	public function getLastTweetId() {
		try {
			
			$sql = "SELECT tweetId FROM $this->tweets_table ORDER BY timestamp DESC LIMIT 1";
			$result = $this->db->query($sql,  PDO::FETCH_ASSOC);
			
			if(empty($result) ) return false;
			
			foreach ($result as $row) {
				if(empty($row)) return false;
				return $row['tweetId'];
			}
			
		} catch(PDOException $e) {
			return false;
		}
	}
	
	public function getOrAddHashtagId($hashtag) {
		if(empty($hashtag)) return false;
		$htDetails = $this->getHashtag($hashtag);
		
		if(!empty($htDetails) && !empty($htDetails['ID'])) {
			return $htDetails['ID'];
		}
		
		return $this->addHashtag($hashtag);
	}
	
	
	public function getHashtag($hashtag) {
		if(empty($hashtag)) return false;
		try {
			
			$hashtag = strtolower($hashtag);
			
			$sql = "SELECT * FROM $this->ht_table WHERE LOWER(hashtag) = LOWER('$hashtag')";
			$result = $this->db->query($sql,  PDO::FETCH_ASSOC);
				
			if(empty($result) ) return false;
			
			return $result->fetch();
				
		} catch(PDOException $e) {
			return false;
		}
		
	}
	
	public function addHashtag($hashtag) {
		if(empty($hashtag)) return false;
		
		try {
			$this->db->beginTransaction();
			
			$hashtag = strtolower($hashtag);
				
			$sql = "INSERT INTO $this->ht_table (hashtag) VALUES ('$hashtag')"; 

			$this->db->exec($sql);
			$this->db->commit();
			return $this->db->lastInsertId();
			
		} catch(PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}
	
	public function addTwtHtRelation($ht_id, $twt_id) {
		if(empty($ht_id) || empty($twt_id)) return false;
		
		try {
			$this->db->beginTransaction();
				
			$sql = "INSERT INTO $this->ht_twt_relation (ht_id, twt_id) VALUES ($ht_id, '$twt_id')";
		
			$this->db->exec($sql);
			$this->db->commit();
				
		} catch(PDOException $e) {
			return false;
		}
	}
} 
