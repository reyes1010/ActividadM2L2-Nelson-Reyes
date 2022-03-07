<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php require_once '../menu.php' ?>

<?php 
	if ($_POST ["valor1"] !="" and $_POST ["valor2"]!=""){
		if ($_POST["valor1"] > $_POST["valor2"] ) {
			print ($resultado ="El valor 1 ". $_POST ["valor1"] . "Es Mayor que valor 2 ".$_POST["valor2"]);
			print ('<br /><a href="ejercicio1.php">Volver</a>');
		} 
		else if($_POST["valor1"] < $_POST["valor2"] )
		{
			print ($resultado ="El valor 1 ".$_POST ["valor1"] . "Es menor que ".$_POST["valor2"]);
			print ('<br /><a href="ejercicio1.php">Volver</a>');
		}
	} else {
		print("Ingresa alg&uacute;n valor");
		print ('<br /><a href="ejercicio1.php">Volver</a>');
	}
	
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>