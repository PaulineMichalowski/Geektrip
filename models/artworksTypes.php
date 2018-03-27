<?php
class artworksTypes extends dataBase {
    public $id = 0;
    public $JeuxVidéo = '';
    public $Films = '';
    public $Séries = '';
    public $Livres = '';
    public function __construct() {
        parent::__construct();
        $this->db;
    }
    public function getArtworksTypes() {
        $query = 'SELECT `id`,`name` FROM `artworksTypes`';
        $responseRequest = $this->db->query($query);
        return $responseRequest->fetchAll(PDO::FETCH_OBJ);
    }
    public function __destruct() {
        parent::__destruct();
    }
}

