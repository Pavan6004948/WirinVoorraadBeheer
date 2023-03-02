<?php

require_once 'dbConfig.php';



$sql = "SELECT * FROM vriezer";
$result = $connection->query($sql);

if (!$result) {
	die("invalid query: " . $connection->error);
}
?>