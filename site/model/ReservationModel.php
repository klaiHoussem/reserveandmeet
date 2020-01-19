<?php
    include_once 'Reservation.php';
    require_once '../Configuration.php';

	/**
	     * 
	     */
    class ReservationModel{
        private $reservation;
        public function __construct() {
        }
        
       public function ajouterReservation(){
        $db = new Db();
        $this->reservation= new Reservation();
        $this->reservation->setDate_d($_POST['date_d']);
        $this->reservation->setDate_f($_POST['date_f']);
        
        $sql = "INSERT INTO reservation (id_client, id_espace, date_d, date_f)"
                . "VALUES (".$_POST['id_client'].",".$_POST['id_espace'].",'".$this->reservation->getDate_d()."','".$this->reservation->getDate_f()."')";
        echo $sql;
                
        $db-> query($sql);
    } 


}
?>