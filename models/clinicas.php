<?php
class clinicas extends model{

private $clinicaInfo;

public function __construct($id){
	parent::__construct();


	$sql = " SELECT * FROM clinicas WHERE id = '".$id."'";

        	$sql = $this->db->query($sql);
        	
        	
        	
        	if($sql->rowCount() > 0) {
			$this->clinicaInfo = $sql->fetch();
		}
}


public function getNome(){

	if(isset($this->clinicaInfo['nome'])) {

		return $this->clinicaInfo['nome'];
	}
	else{
		return '';
	}
}


public function getClinica(){
    $array = array();
    $sql= "SELECT * FROM clinicas";
    $sql = $this->db->query($sql);
    if($sql->rowCount() >0){
        $array=$sql->fetchAll();
        
    }
    return $array;
}

}