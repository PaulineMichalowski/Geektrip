<?php
class papers extends dataBase {
    public $id = 0;
    public $title = '';
    public $content = '';
    public $publicationDate = '';
public function __construct() {
        parent::__construct();
        $this->db;
    }
public function sendPapers() {
        $query = 'INSERT INTO `papers` (`title`, `content`, `publicationDate`) VALUES (:title, :content, NOW())';
        $responseRequest = $this->db->prepare($query);
        $responseRequest->bindValue(':title', $this->title, PDO::PARAM_STR);
        $responseRequest->bindValue(':content', $this->content, PDO::PARAM_STR);
        return $responseRequest->execute();
    }
    public function __destruct() {
        parent::__destruct();
    }
}