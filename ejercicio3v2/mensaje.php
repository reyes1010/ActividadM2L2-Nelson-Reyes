<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php require_once '../menu.php' ?>

<?php
if ($_POST ["mensaje"] == 'Hola' ) {
   echo 'Muy buenas, usuario';
} else {
   if ( $_POST ["mensaje"] == 'Adiós' ) {
      echo 'Hasta pronto';
   } else {
      echo 'No se  reconoce el textro introducido';
   }
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>