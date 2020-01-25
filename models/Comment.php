<?php

class Comment extends Model {

    public function index() {
        $this->db();
        $res = $this->db()
            ->query("SELECT * FROM comment ORDER BY id DESC")->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }

    public function cw_comments($id) {
        $statement = $this->db()
            ->prepare("SELECT * FROM comment WHERE copywriter_id = :copywriter_id AND approved=1 ORDER BY id DESC");
        $statement->execute(['copywriter_id'=> $id]);
        $res = $statement->fetchAll(PDO::FETCH_OBJ);
//        var_dump($res);
        return $res;
    }

    public function approve($id) {
        $statement = $this->db()->prepare("UPDATE comment SET approved=1 WHERE id = :id");
        $statement->execute(['id' => $id]);
    }

    public function store($new) {
        $copywriter_id = $this->copywriter_id;
        $name = $this->name;
        $body = $this->body;
        $statement = $this->db()
            ->prepare("INSERT INTO comment (copywriter_id, name, body) VALUES (:copywriter_id, :name, :body)");
        $statement->execute([
            'copywriter_id' => $copywriter_id,
            'name' => $name,
            'body' => $body
        ]);

    }

    public function get_unapproved() {
        $statement = $this->db()->prepare("SELECT * FROM comment WHERE approved=0");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
}