<?php
    
class dataBase {
    
    //L'attribut $db sera disponible dans ses enfants
    public $db;
        
    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=geekntrip;charset=utf8', 'usr_geekntrip', 'geekntrip');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
        
    public function __destruct() {
        
    }
        
}
?>