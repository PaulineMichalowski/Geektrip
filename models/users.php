<?php
// Class enfant de la class dataBase, qui permet de se connecter à la base de données. La class enfant hérite des méthodes de dataBase et de ses attributs
class users extends dataBase {
    // on crée les attributs
    public $id = 0;
    public $lastname = '';
    public $firstname = '';
    public $birthdate = '01/01/1900';
    public $mail = '';
    public $userName = '';
    public $password = '';
    public function __construct() {
        parent::__construct();
        $this->db;
    }
    public function addUser() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `users`(`lastname`, `firstname`, `birthdate`, `mail`, `userName`, `password`) VALUES(:lastname, :firstname, :birthdate, :mail, :userName, :password)';
        $responseRequest = $this->db->prepare($query);
        $responseRequest->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $responseRequest->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $responseRequest->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
        $responseRequest->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $responseRequest->bindValue(':userName', $this->userName, PDO::PARAM_STR);
        $responseRequest->bindValue(':password', $this->password, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on l'éxecute
        return $responseRequest->execute();
    }
    public function getUser() {
        $isOk = false;
        $query = 'SELECT `id`, `userName`, `password` FROM `users` WHERE `mail` = :mail';
        $responseRequest = $this->db->prepare($query);
        $responseRequest->bindValue(':mail', $this->mail, PDO::PARAM_STR);
       if ($responseRequest->execute()) {
           $result = $responseRequest->fetch(PDO::FETCH_OBJ);
           if (is_object($result)) {
               $this->id = $result->id;
               $this->userName = $result->userName;
               $this->password = $result->password;
               $isOk =true;
           }
       }
       return $isOk;
        }
        public function getUserProfile() {
            $query = 'SELECT `id`, `lastname`, `firstname`, DATE_FORMAT(`birthdate`, \'%d/%m/%Y\') AS `birthdate`, `mail`, `userName` FROM `users` WHERE `id` = :id';
            $responseRequest = $this->db->prepare($query);
            $responseRequest->bindValue(':id', $this->id, PDO::PARAM_STR);
            if ($responseRequest->execute()) {
                $result = $responseRequest->fetch(PDO::FETCH_OBJ);
                if (is_object($result)) {
                    $this->lastname = $result->lastname;
                    $this->firstname = $result->firstname;
                    $this->birthdate = $result->birthdate;
                }
            }
         return $isOk;
     }
     public function modifyUser() {
         $query = 'UPDATE `users` SET `lastname` = :lastname, `firstname` = :firstname, `userName` = :userName WHERE `id` = :id';
         $responseRequest = $this->db->prepare($query);
     }
     public function __destruct() {
        parent::__destruct();
    }
}
?>