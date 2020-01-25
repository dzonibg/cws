<?php

class ContentWriter extends Model {

    public $id;
    public $name;


    public function index() {

        $this->db();
        $res = $this->db()->query("SELECT * FROM copywriter")->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }

    public function get($id) {
//       $res = $this->db()->query("SELECT * FROM copywriter WHERE id =". $id)->fetch(PDO::FETCH_OBJ);
        $res = $this->db()->query("SELECT * FROM copywriter WHERE id =". $id)->fetch(PDO::FETCH_ASSOC);
       return $res;
    }
    public function rand() {
        $statement = $this->db()->prepare("SELECT * FROM copywriter WHERE id = :id");
        $statement->execute(['id' => 1]);
        return $statement->fetch();

    }

    public function store($new) {
        $name = $new->name;
        $description = $new->description;
        $description_short = $new->description_short;
        $hourly_rate = $new->hourly_rate;
        $statement = $this->db()
            ->prepare('INSERT INTO copywriter(name, description_short, description, hourly_rate)  VALUES(:name, :description_short, :description, :hourly_rate)');
        $statement->execute([
            'name' => $name,
            'description' => $description,
            'description_short' => $description_short,
            'hourly_rate' => $hourly_rate
        ]);
//        var_dump($this->db()->lastInsertId()); fails to work

    }

    public function delete($id) {
        $statement = $this->db()->prepare("DELETE FROM copywriter WHERE id = :id");
        $statement->execute(['id' => $id]);
        return 'Deleted';
    }

}