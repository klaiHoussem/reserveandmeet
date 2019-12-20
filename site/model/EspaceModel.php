<?php
    include_once 'Espace.php';
    require_once '../Configuration.php';

	/**
	     * 
	     */
    class EspaceModel{
        private $espace;
        public function __construct() {
        }
        
       public function ajouterEspace(){
        $db = new Db();
        $this->espace= new Espace();
        $this->espace->setnomesp($_POST['nomesp']);
        $this->espace->setlocalisation($_POST['localisation']);
        $this->espace->setcapacite($_POST['capacite']);
        $this->espace->setimage($_FILES['image']['name']);
        $this->espace->settype($_POST['type']);
        
        $target_dir = "../image/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        echo $target_file ;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["nomesp"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
        echo "\n File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    }

    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

        $sql = "INSERT INTO espace (nomesp, localisation, capacite, image, type ) "
                . "VALUES ('".$this->espace->getnomesp()."','".$this->espace->getlocalisation()."','".$this->espace->getcapacite()."','".$this->espace->getimage()."','".$this->espace->gettype()."')";
                
        $db-> query($sql);
    } 
}
?>