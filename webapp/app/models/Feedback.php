<?php

namespace app\models;
use app\models\Model;

class Feedback extends Model {
    protected $table = "feedback";

    public function getByUser($userId) {
        $sql = "select * from feedback where user = ?";
        $rs = $this->connection->prepare($sql);
        $rs->bindValue(1, $userId);
        $rs->execute();
        return $rs->fetchAll();
    }

    public function GetAllComments() {
        $sql = "select f.comment, u.name from feedback as f inner join users as u on u.id = f.user";
        $comments = $this->connection->query($sql);
        return $comments->fetchAll();
    }
}