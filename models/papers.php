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
    public function getPapers() {
        $query = 'SELECT `id`, `title`, `content`, `publicationDate` FROM `papers`';
        $responseRequest = $this->db->query($query);
        return $responseRequest->fetchAll(PDO::FETCH_OBJ);
    }
    public function readPapers() {
        $query = 'SELECT `id`, `title`, `content`, `publicationDate` FROM `papers` WHERE `id` = :id';
        $responseRequest = $this->db->prepare($query);
        $responseRequest->bindValue(':id', $this->id, PDO::PARAM_INT);
        if ($responseRequest->execute()) {
            $papersId = $responseRequest->fetch(PDO::FETCH_OBJ);
        }
        return $papersId;
    }
    public function updatePapers() {
        $query = 'UPDATE `papers` SET `title`=:title, `content`=:content WHERE `id`=:id';
        $modifyResult = $this->db->prepare($query);
        $modifyResult->bindValue(':title', $this->title, PDO::PARAM_STR);
        $modifyResult->bindValue(':content', $this->content, PDO::PARAM_STR);
        $modifyResult->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $modifyResult->execute();
    }
    public function deletePapers() {
        $query = 'DELETE FROM `papers` WHERE `id` = :id';
        $deleteResult = $this->db->prepare($query);
        $deleteResult->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $deleteResult->execute();
    }
    public function __destruct() {
        parent::__destruct();
    }
}