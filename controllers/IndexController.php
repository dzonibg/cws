<?php

class IndexController {

    public function index() {
        $cws = new ContentWriter();
        $data = $cws->index();
//        var_dump($data);
        view('index', $data);
    }

    public function happy() {
        $data = ['name' => 'Nikola'];
        view('happy', $data);
    }

    public function show($id) {
        $cw = new ContentWriter();
        $data = $cw->get($id);
//        var_dump($data);
        view('show', $data);
    }

    public function create() {
        view('create');
    }

    public function store() {
        $new = new ContentWriter();
        $new->name = "test";
        $new->description = 'test description';
        $new->description_short = 'short description';
        $new->hourly_rate = 10;
        $new->store($new);

    }
}