<?php

require_once 'dbConfig.php';

class table extends DbConfig{


    public function __construct(){

    }

    public function updateProduct($nieuw, $uit, $laat, $rest){
		try{
			$sql = "INSERT INTO product
			(nieuw, uit, laat, rest)
			VALUES
			(:nieuw, :uit, :laat, :rest)";
			$stmt = $this->connect()->prepare($sql);
			$stmt->bindParam(":nieuw", $nieuw);
            $stmt->bindParam(":uit", $uit);
            $stmt->bindParam(":laat", $laat);
            $stmt->bindParam(":rest", $rest);
			if($stmt->execute()){
				header("Location: Tabellen.php");
			}else{
				throw new Exception("There was an error creating a new product. Try again.");
			}
		}catch(Exception $e){
			return $e->getMessage();
		}
	}
}   

?>