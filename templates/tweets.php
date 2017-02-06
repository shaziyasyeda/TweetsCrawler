<html>
<head>
	<script src="<?php echo BASEURL.'/inc/js/angular.min.js'?>" type="text/javascript"></script>
	<script src="<?php echo BASEURL.'/inc/js/jquery-3.1.1.min.js'?>" type="text/javascript"></script>
	<script src="<?php echo BASEURL.'/inc/js/bootstrap.min.js'?>" type="text/javascript"></script>
	<script src="<?php echo BASEURL.'/inc/js/tweets.js'?>" type="text/javascript"></script>
	
	<link rel="stylesheet" type="text/css" href="<?php echo BASEURL.'/inc/css/bootstrap.min.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo BASEURL.'/inc/css/font-awesome.min.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo BASEURL.'/inc/css/tweets.css'?>">
</head>

<body ng-app="tweetsApp" ng-controller="tweetsCtrl" class="tweets-main col-md-8 col-md-offset-4">
	<div class="header col-md-12">
		<h2>
			<span><?php echo "Tweets"; ?></span>
			<span ng-show="hashtag">for hashtag {{hashtag}}</span>
		</h2>
		<div class="hashtag form-inline col-md-12">
			<span class="hash">#</span>
			<input class="form-control" type="text" ng-model="hashtag" placeholder="Enter Hashtag" ng-change="hashtagInputChange(hashtag)">
			<button class="btn btn-default" ng-click="hashtagChanged()" ng-disabled="!hashtag || !htChangeFlag">Get Tweets</button>
		</div>
	</div>
	<div class="content col-md-12">
		<div class="spinner" ng-if="(!tweets || tweets.length == 0) && fetchingTweets">
			<i class="fa fa-spin fa-spinner" aria-hidden="true"></i>
			<span>Fetching tweets for hashtag {{hashtag}}</span>
		</div>
		<div class="tweets-container">
			<a class="tweet col-md-12" ng-repeat="tweet in tweets" ng-href="{{tweet.tweet_url}}" target="_blank">
				<div class="tweet-user-pic col-md-1">
					<img alt="User" ng-src="{{tweet.user_profile_img}}">
				</div>
				<div class="tweet-details col-md-11">
					<div class="tweet-user-names">
						<span class="tweet-user-name">{{tweet.user_name}}</span>
						<span class="tweet-user-handle">@{{tweet.user_handle}}</span>
					</div>
					<div class="tweet-text">{{tweet.text}}</div>
					<div class="tweet-stats">
						<span class="tweet-rt col-md-4">
							<i class="fa fa-retweet" aria-hidden="true"></i>
							<span class="tweet-rt-count" ng-show="tweet.retweet_count > 0">{{tweet.retweet_count}}</span>
						</span>
						<span class="tweet-rpl col-md-4">
							<i class="fa fa-reply" aria-hidden="true"></i>
						</span>
						<span class="tweet-fav col-md-4">
							<i class="fa fa-heart" aria-hidden="true"></i>
							<span class="tweet-fav-count" ng-show="tweet.favorite_count > 0">{{tweet.favorite_count}}</span>
						</span>
					</div>
				</div>
			</a>
		</div>
	</div>
</body>
</html>