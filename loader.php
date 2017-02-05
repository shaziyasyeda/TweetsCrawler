<?php

define( 'BASEPATH', __DIR__ );
define( 'COREPATH', BASEPATH.'/core' );
define( 'LIBPATH', BASEPATH.'/libs' );
define( 'TPLPATH', BASEPATH.'/templates' );
define( 'INCPATH', BASEPATH.'/inc' );

define('BASEURL', 'http://localhost/trxn');

require_once LIBPATH.'/twtapi/autoload.php';
require_once COREPATH.'/DBConnection.php';
require_once COREPATH.'/TwitterAPI.php';
require_once COREPATH.'/TweetsManager.php';
require_once COREPATH.'/TweetsProcessor.php';


