<?php 
require '../model/EspaceModel.php';

if($_SERVER["REQUEST_METHOD"] == "POST" ){
	$espacemodel = new EspaceModel();
	$espacemodel->afficherEspace();
	$url = "../index.php";
	header('location:'.$url);
}