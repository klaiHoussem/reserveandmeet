<?php
/**
 * 
 */
class client
{
	private $id_client;
	private $nom;
	private $prenom;
	private $nomentreprise;
	private $email;
	private $password;
	
	public function hydrate(array $data){
        $i = 0;
        //echo json_encode($data);

        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this,$method)) {
                $this->$method($value);
                //echo $key." ";
            }
            else
            {
                //echo '<br>'.$key.' does not exist i= '.$i;
            }
        }
    }
    public function __construct()
    {
        $ctp = func_num_args();
        $args= func_get_args();
        if ($ctp == 0) {
        }
        else{
            $this->hydrate($args[0]);
        }
    }    

    public function getId_client(){
    	return $this->id_client;
    }
    public function getNom(){
    	return $this->nom;
    }
    public function getPrenom(){
    	return $this->prenom;
    }
    public function getNomentreprise(){
    	return $this->nomentreprise;
    }
    public function getEmail(){
    	return $this->email;
    }
    public function getPassword(){
    	return $this->password;
    }


    public function setPrenom($prenom){
    	$this->prenom=$prenom;
    }
    public function setNom($nom){
    	$this->nom=$nom;
    }
    public function setNomentreprise($nomentreprise){
    	$this->nomentreprise=$nomentreprise;
    }
    public function setEmail($email){
    	$this->email=$email;
    }
    public function setPassword($password){
    	$this->password=$password;
    }

}
?>