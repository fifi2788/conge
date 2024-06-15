<?php 

class Demande{
    private $conn;
    public function __construct($conn){
        $this->conn=$conn;
    }
    public function create($type_conge,$personne,$debut,$fin,$commentaire=''){
        $sql="INSERT INTO `conge`.`demandes` (`id_type_conge`, `id_personne`, `debut_conge`, `fin_conge`,commentaire) VALUES ($type_conge, $personne, '$debut', '$fin','$commentaire');
";
        $result=$this->conn->query($sql);
        return $result;
    }


    //TODO: creer une methode permettant de supprimer un employe
    //public function delete($id) {}
}
