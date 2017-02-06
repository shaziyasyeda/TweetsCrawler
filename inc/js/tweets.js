var twtApp = angular.module('tweetsApp', [])
twtApp.controller('tweetsCtrl', function($scope, $http, $interval) {
	$scope.tweets = [];
	$scope.baseUrl = window.location.origin+'/trxn';
	$scope.hashtag = '';
	$scope.fetchingTweets = false;
	$scope.htChangeFlag = false;
	
	$scope.hashtagInputChange = function(hashtag) {
		$scope.hashtag = hashtag.replace(/ /g, '');
		if(!$scope.htChangeFlag && hashtag) $scope.htChangeFlag = true;
	}
	
	$scope.hashtagChanged = function() {
		if($scope.fetchingTweets) $scope.fetchingTweets = false;
		$scope.tweets = [];
		$scope.fetchTweets(1);
		$scope.htChangeFlag = false;
	}
	
	$scope.fetchTweets = function(isFirst) {
		
		if($scope.fetchingTweets) return;
		
		$scope.fetchingTweets = true;
		
		$http({
	        url: $scope.baseUrl+'/getTweets.php', 
	        method: "GET",
	        params: {
	        	'first': isFirst,
	        	'ht': $scope.hashtag
	        },
	        headers:{
	        	'X-Requested-With' :'XMLHttpRequest',
	        	'Content-Type' : 'application/json'
	        }
	    }).then(function successCallback(response) {
	    	
	    	if(response && response.data && response.data.success) {
	    		if(response.data.tweets && response.data.tweets.length) {
	    			$scope.tweets = response.data.tweets.concat($scope.tweets);
	    		}
	    	}
	    	$scope.fetchingTweets = false;
		}, function errorCallback(response) {
		    console.log(response);
		    $scope.fetchingTweets = false;
		});
	};
	
	
	$interval(function() {
		$scope.fetchTweets();
	}, 10000);
});