<?php

class CommentController {

    public function index()
    {
        $comments = new Comment();
        $data = $comments->index();
        view('comments_index', $data);
    }

    public function show($id) {
        $comments = new Comment();
        view('comments', $comments->cw_comments($id));
    }

    public function approve($id) {
        $comment = new Comment();
        $comment->approve($id);
    }

    public function create() {
        view('create_comment');

    }

    public function store($cw_id) {


    }

}