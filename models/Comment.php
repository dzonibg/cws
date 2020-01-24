<?php

class Comment extends Model {

    public function index() {
        $this->db();
        $res = $this->db()->query("SELECT * FROM comment")->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }

    public function cw_comments($id) {
        $statement = $this->db()->prepare("SELECT * FROM comment WHERE copywriter_id = :copywriter_id");
        $statement->execute(['copywriter_id'=> $id]);
        $res = $statement->fetchAll(PDO::FETCH_OBJ);
//        var_dump($res);
        return $res;
    }

    public function approve($id) {
        $statement = $this->db()->prepare("UPDATE comment SET approved=1 WHERE id = :id");
        $statement->execute(['id' => $id]);
        return "Approved";
    }
}