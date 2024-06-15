<?php 

class JourFerie{
    private $conn;
    public function __construct($conn){
        $this->conn=$conn;
    }
    public function create($nom,$date){
        $sql="INSERT INTO `conge`.`jour_ferie` (`date`, `description`) VALUES ('$date', '$nom');";
        $result=$this->conn->query($sql);
        return $result;
    }

    public function delete($id){
        $sql = "DELETE FROM `conge`.`jour_ferie` WHERE `id` = $id;";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getAll(){
        $sql="SELECT id,date,description
        FROM conge.jour_ferie";
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
