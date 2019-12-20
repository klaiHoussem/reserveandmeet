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
<h1 class = "text-success text-center"> Ajouter votre espace </h1> 

<div class="row justify-content-center" >
  <div class="col-8">
  <form method="POST" action="../controller/ajouterEspaceController.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nomesp">Nom de L'établissement</label>
    <input type="text" class="form-control" name="nomesp" placeholder="Exemple: Espace Hotel africa">
  </div>

<div class="form-group">
    <label for="localisation">Localisation</label>
    <input type="Text" class="form-control" name="localisation" placeholder="l'adresse de la salle">
  </div>

  <div class="form-group">
    <label for="capacite">Capacité</label>
    <input type="Text" class="form-control" name="capacite" placeholder="Environ combien de personne?">
  </div>
 
  <!-- <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>-->

  <div class="form-group">
    <label for="image">Image de l'espace </label>
    <input type="file" class="form-control-file" name="image" id="image">


  <!--  <div id="calendar"></div>-->
  <form class="form-inline">
  <label class="my-1 mr-2" for="type">Type de la salle</label>
  <select class="custom-select my-1 mr-sm-2" name="type">
    <option selected>Choisir...</option>
    <option value="Conference">Salle de Conference</option>
    <option value="Theatre">Salle de Theatre</option>
    
  </select>


 </form>

  <button type="submit" class="btn btn-primary" >Enregistrer votre espace</button>
</div></div>
</form>
<script src = "js/bootstrap.min.js" > </script>
<script src = "js/jquery-3.4.1.min.js" > </script>
</body>
</html>