var twtApp = angular.module('tweetsApp', [])
twtApp.controller('tweetsCtrl', function($scope, $http, $interval) {
	$scope.tweets = [];
	$scope.baseUrl = window.location.origin+'/trxn';
	
	$scope.fetchTweets = function(isFirst) {
		
		$http({
	        url: $scope.baseUrl+'/getTweets.php', 
	        method: "GET",
	        params: {
	        	'first': isFirst
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
		}, function errorCallback(response) {
			    console.log(response);
		});
	};
	
	$scope.fetchTweets(1);
	
	$interval(function() {
		$scope.fetchTweets();
	}, 10000);
});