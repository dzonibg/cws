<?php

class ContentWriterController extends Controller {

    private $id;
    private $name;


    public function index() {

        $this->db();
        $res = $this->db()->query("SELECT * FROM copywriter")->fetchAll(PDO::FETCH_OBJ);
        foreach($res as $cw) {
            echo $cw->name;
        }
    }

}