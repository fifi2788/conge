<?php 

class Personne{
    private $conn;
    public function __construct($conn){
        $this->conn=$conn;
    }
    public function newEmployee($nom,$prenom,$email,$dateEmbauche){
        $sql="INSERT INTO `conge`.`personne` (`nom`, `prenom`, `email`, `date_embauche`) VALUES ('$nom', '$prenom', '$email', '$dateEmbauche');";
        $result=$this->conn->query($sql);
        return $result;
    }

    public function deleteEmployee($id){
        $sql = "DELETE FROM `conge`.`personne` WHERE `id` = $id;";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getPersonnes(){
        $sql="SELECT id as 'idp',nom,prenom,email,date_embauche
        FROM conge.personne 
        where date_debauche is null;";
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
