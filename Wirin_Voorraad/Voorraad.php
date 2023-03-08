<?php

require_once 'dbConfig.php';
require 'Navigatie.php';



$sql = "SELECT * FROM vriezer";
$result = $connection->query($sql);


if (!$result) {
	die("invalid query: " . $connection->error);
}

function vriezer(){

	$vriezer = $sql="SELECT * FROM vriezer";
}

?>

<div class="card bg-dark text-black" style="width: 30rem; margin: 50px;">
<img class="card-img-top" src="../Wirin_Voorraad/img/vriezer.jfif" alt="vriezer">
  <div class="card-img-overlay">
    <h5 class="card-title">Voorraad vriezer</h5>
	<a href="Vriezer.php" class="stretched-link"></a>
  </div>
</div>