<?php
// Classe permettant de se connecter à la base de données. Ses enfants hériteront de ses méthodes et attributs, en public. (protected également)
class dataBase {
    //L'attribut $db sera disponible dans ses enfants. C'est un attribut de connexion à la base de données
    public $db;
    // Constructeur de la classe parente, et déclaration de la méthode permettant la connexion à la base. 
    // Utilisation de la classe PDO de PHP. On utilise également un try catch pour attraper les erreurs s'il y en a.
    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=geekntrip;charset=utf8', 'usr_geekntrip', 'geekntrip');
            // Si erreur, on attrape l'exception dans $e, et on affiche un message d'erreur.
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    public function __destruct() {
    }
}
?>