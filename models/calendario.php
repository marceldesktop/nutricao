<?php

class calendario extends model{

    
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getAgendamento(){
        $array=array();
        $sql= "SELECT * FROM agendamentos";
        $sql=$this->db->query($sql);
        if($sql->rowCount() > 0){
            $array= $sql->fetchAll(PDO::FETCH_ASSOC);
              
        }
       return $array;
     
       
    }
        public function getClinica(){
        $array=array();
        $sql= "SELECT * FROM clinicas";
        $sql=$this->db->query($sql);
        if($sql->rowCount() > 0){
            $array= $sql->fetchAll();
        }
        return $array;
    }
    
    public function VerificarDisponivel($id_clinica,$data_agendamento,$hora_agendamento){
        $sql= "SELECT * FROM agendamentos WHERE id_clinica =" .$id_clinica." AND data_agendamento =".$data_agendamento." AND (NOT(hora_agendamento =".$hora_agendamento."))";
        $sql=$this->db->query($sql);
        if($sql->rowCount() > 0){
            return false;
        }else{
            return true;
        }
    }
    
    public function CadastrarAgendamento() {
        
    }
    
}
    

