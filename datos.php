<?php 
try {
	$usuario = "root";
	$contra = "sexp2p";
	$con = new PDO('mysql:host=localhost;dbname=test', $usuario, $contra);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = $con->prepare('SELECT * FROM personas');
	$sql->execute();
	$rows = $sql->fetchAll(PDO::FETCH_ASSOC);
	foreach ($rows as $row) {
		$arr["data"][] = $row;
	}
	echo json_encode($arr);
} catch (PDOException $e) {
	echo "not ok".PHP_EOL;
	echo $e;
}

?>