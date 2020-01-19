<?php 
require '../model/ReservationModel.php';

if($_SERVER["REQUEST_METHOD"] == "POST" ){
	$reservationmodel = new ReservationModel();
	$reservationmodel->ajouterReservation();
	$url = "../index.php";
	header('location:'.$url);
}

?>