<?php 
    include('Connector-Magdalena.php') ;

$id = $_GET['id'];
$hapus = "DELETE FROM showroom_magdalena_table WHERE id_mobil = '$id'";
$delete =  mysqli_query($conn, $hapus);

header('Location: ListCar-Magdalena.php');



?>