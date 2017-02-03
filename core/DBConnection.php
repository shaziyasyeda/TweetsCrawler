<?php
define('DB_NAME', 'trx_tweets');
define('DB_USER', '');
define('DB_PASSWORD', 'ZAQ!2wsx');
define('DB_HOST', 'localhost');


function createDbConnection($host, $dbname, $username, $password) {
	try {
		$datab = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password);
		$datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $datab;
	}
	catch(PDOException $e) {
		echo($e->getMessage());
		return false;
	}
}
$trxDb = createDbConnection(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD);
