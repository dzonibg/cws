<?php
class AdminController {

    public function index() {
        if (AdminController::isAdmin()) {
            view('admin/index');
        } else view('admin/login');
    }

    public static function isAdmin() { //TODO: Token verification!
        if (isset($_SESSION['admin'])) {
            if ($_SESSION['admin'] == true) {
                return true;
            } else return false;
        }
    }

    public function login() {
        $admin = new Admin;
        $admin->username = $_POST['username'];
        $admin->password = md5($_POST['password']);
        $result = $admin->login($admin->username, $admin->password);
        if ($result == 1) {
            $this->makeAdmin();
        } else Throw new Exception('Not an admin user.');
        redirect('admin');
    }

    public function makeAdmin() {
        $_SESSION['admin'] = true;
    }

    public function logout() {
        $_SESSION['admin'] = false;
        $this->index();
    }

    public function comments() {
        $comments = new Comment();
        $data = $comments->index();
        return view('admin/comments', $data);
    }

    public function unapproved() {
        $comments = new Comment();
        $data = $comments->get_unapproved();
        view('admin/unapproved', $data);
    }

    public function copywriters() {
        $cws = new ContentWriter();
        $data = $cws->index();
        return view('admin/copywriters', $data);
    }

    public function edit_copywriter($id) {
        $cw = new ContentWriter();
        $data = $cw->get($id);
        view('admin/edit_copywriter', $data);
    }

    public function add_copywriter() {
        view('/admin/add_copywriter');
    }
    public function create_copywriter() {
        $cw = new ContentWriter();
        $cw->name = $_POST['name'];
        $cw->description_short = $_POST['description_short'];
        $cw->description = $_POST['description'];
        $cw->hourly_rate = $_POST['hourly_rate'];
        $id = $cw->store($cw);
//        echo $cw->db()->lastInsertId('id'); //doesn't work, will use names for image names.

        var_dump($_FILES["image"]);
        $target_dir = 'resources/images/';
//        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $target_file = $target_dir . $cw->name . '.jpg';
        $targetFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

        redirect('admin/copywriters');

    }

    public function delete_copywriter($id) {
        $cw = new ContentWriter();
        $cw->delete();
        redirect('admin/copywriters');

    }

}