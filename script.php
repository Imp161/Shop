<?php
    
$image = [];
try {
    $conn = mysqli_connect("localhost","root","root","shop");
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
	$sql = "SELECT * FROM gallery";
	if($result = $conn->query($sql)){
		foreach($result as $row){
			$image[] = $row["image"];
			$name[] = $row["name"];
			$price[] = $row["price"];
        	}
	}

?>