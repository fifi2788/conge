<?php 

class TypeConge{
    private $conn;
    public function __construct($conn){
        $this->conn=$conn;
    }
    public function create($nom,$deductible){
        $sql="INSERT INTO `conge`.`type_conge` (`label`, `deductible`) VALUES ('$nom', '$deductible');";
        $result=$this->conn->query($sql);
        return $result;
    }

    public function delete($id){
        $sql = "DELETE FROM `conge`.`type_conge` WHERE `id` = $id;";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getAll(){
        $sql="SELECT id,label,deductible
        FROM conge.type_conge;";
        $result=$this->conn->query($sql);
        $res=[]; //array()
        while($row=$result->fetch_assoc()){
            $res[]=$row;
        }
        return $res;
    }

    //TODO: creer une methode permettant de supprimer un employe
    //public function delete($id) {}
}
