<?php 
define( 'BASEPATH', __DIR__ );
define( 'COREPATH', BASEPATH.'/core' );
define( 'LIBPATH', BASEPATH.'/libs' );
define( 'TPLPATH', BASEPATH.'/templates' );
define( 'INCPATH', BASEPATH.'/inc' );

require_once( BASEPATH . '/loader.php' );

$hashtag = 'startup';
$twtProcessor = new TweetsProcessor();
$twtProcessor->hashtagTweets($hashtag);
