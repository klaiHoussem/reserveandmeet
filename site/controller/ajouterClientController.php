<?php 
require '../model/ClientModel.php';

if($_SERVER["REQUEST_METHOD"] == "POST" ){
	$clientmodel = new ClientModel();
	$clientmodel->ajouterClient();
	$url = "../index.php";
	header('location:'.$url);
}