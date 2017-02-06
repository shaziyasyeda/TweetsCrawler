<?php
/* define('DB_NAME', 'trx_tweets');
define('DB_USER', 'trax');
define('DB_PASSWORD', 'test123');
define('DB_HOST', 'localhost'); */

function createDbConnection($host, $dbname, $username, $password, $port='') {
	try {
		$conn_str = "mysql:host={$host};dbname={$dbname};";
		if(!empty($port)) {
			$conn_str .= "port={$port}";
		}
		$datab = new PDO($conn_str, $username, $password);
		$datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $datab;
	}
	catch(PDOException $e) {
		echo "$host, $dbname, $username, $password, $port <br>";
		die("Connection failed: " . $e->getMessage());
	}
}

$dbopts = parse_url(getenv('DATABASE_URL'));
$trxDb = createDbConnection($dbopts["host"], ltrim($dbopts["path"],'/'),  $dbopts["user"], $dbopts["pass"]);

//$trxDb = createDbConnection(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD);
