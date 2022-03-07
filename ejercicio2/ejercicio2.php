<!DOCTYPE html>
<html>
	<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<?php require_once '../menu.php' ?>
	</head>
	<body>
	<div class="container"><br>
   		<div class="row justify-content-center">
        	<div class="col-12 p-5 bg-white shadow-lg rounded">
				<h1>Peso vehiculo Y peso permitido</h1>
				<form action="Pesovehiculo.php" method="post">
					Ingresa el peso del vehiculo:<br />
					<input type="text" name="pesoVehiculo"><br />
					Ingresa el peso permitido:<br />
					<input type="text" name="pesoPermitido"><br>
					<input type="submit" value="Enviar">
				</form>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>


