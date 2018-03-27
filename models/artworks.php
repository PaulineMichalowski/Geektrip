<?php
class artworks extends dataBase {
    public $id = 0;
    public $name = '';
    public $idArtworksTypes = '';
    public function __construct() {
        parent::__construct();
        $this->db;
    }
    public function getArtworks() {
        $query = 'SELECT `id`,`name`, `idArtworksTypes` FROM `artworks`';
        $responseRequest = $this->db->query($query);
        return $responseRequest->fetchAll(PDO::FETCH_OBJ);
    }
    public function __destruct() {
        parent::__destruct();
    }
}