<?php
/**
 * 
 */
class espace
{
	private $id_espace;
	private $nomesp;
	private $localisation;
	private $capacite;
    private $description;
	private $image;
	private $type;
	
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

    public function getId_espace(){
    	return $this->id_espace;
    }
    public function getNomesp(){
    	return $this->nomesp;
    }
    public function getLocalisation(){
    	return $this->localisation;
    }
    public function getCapacite(){
    	return $this->capacite;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getImage(){
    	return $this->image;
    }
    public function getType(){
    	return $this->type;
    }


    public function setNomesp($nomesp){
    	$this->nomesp=$nomesp;
    }
    public function setlocalisation($localisation){
    	$this->localisation=$localisation;
    }
    public function setCapacite($capacite){
    	$this->capacite=$capacite;
    }
    public function setDescription($description){
        $this->description=$description;
    }
    public function setImage($image){
    	$this->image=$image;
    }
    public function setType($type){
    	$this->type=$type;
    }

}
?>