<?php
/**
 * 
 */
class Reservation
{
	private $id_reservation;
	private $date_d;
	private $date_f;
	
	
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

    public function getId_reservation(){
    	return $this->id_reservation;
    }
    public function getDate_d(){
    	return $this->date_d;
    }
    public function getDate_f(){
    	return $this->date_f;
    }
   


    public function setDate_d($date_d){
    	$this->date_d=$date_d;
    }
    public function setDate_f($date_f){
    	$this->date_f=$date_f;
    }
    

}
?>