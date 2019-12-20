<!--<!DOCTYPE html>
<html>
<head>
	<title>ajouter client</title>
</head>
<body>
	<form method="POST" action="../controller/ajouterClientController.php">
		<input type="text" name="nom" placeholder="nom">
		<input type="text" name="prenom" placeholder="prenom">
		<input type="text" name="email" placeholder="email">
		<input type="password" name="password" placeholder="password">
		<input type="text" name="nomentreprise" placeholder="nomentreprise">
		<input type="submit" name="ajouter" value="ajouter client">
	</form>
</body>
</html>-->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
<meta name="Viewport" content="width = device-width , initial-scale=1"/> 
<title>  </title> 
<link rel ="stylesheet" href="css/bootstrap.min.css" > 
</head>
<body> 

<div class="row justify-content-center" >
  <div class="col-6">
<div class="container">
  <div class="mt-5">
<h1 class = "text-success text-center"> Inscrivez vous </h1> 

<div class="row justify-content-center" >
  <div class="col-8">
  <form method="POST" action="../controller/ajouterClientController.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" name="nom" placeholder="nom">
  </div>

<div class="form-group">
    <label for="prenom">prénom</label>
    <input type="Text" class="form-control" name="prenom" placeholder="prenom">
  </div>

 <div class="form-group">
    <label for="nomentreprise">Entité </label>
    <input type="text" class="form-control" name="nomentreprise" placeholder="nom de votre entité(NGO/Entreprise/Club/association/ect..)">

  <div class="form-group">
    <label for="email">Email</label>
    <input type="Text" class="form-control" name="email" placeholder="email@email.com">
  </div>
 
  <!-- <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>-->

  <div class="form-group">
    <label for="password">Password </label>
    <input type="password" class="form-control" name="password" placeholder="password">




 

  <button type="submit" class="btn btn-primary" >Enregistrer</button>
</div></div>
</form>
<script src = "js/bootstrap.min.js" > </script>
<script src = "js/jquery-3.4.1.min.js" > </script>
</body>
</html>