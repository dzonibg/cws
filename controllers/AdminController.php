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
        if(AdminController::isAdmin()) {
            $comments = new Comment();
            $data = $comments->index();
            return view('admin/comments', $data);
        } else unauthorized();
    }

    public function unapproved() {
        if(AdminController::isAdmin()) {
            $comments = new Comment();
            $data = $comments->get_unapproved();
            view('admin/unapproved', $data);
        } else unauthorized();
    }

    public function copywriters() {
        if(AdminController::isAdmin()) {
            $cws = new ContentWriter();
            $data = $cws->index();
            return view('admin/copywriters', $data);
        } unauthorized();
    }

    public function edit_copywriter($id) {
        if(AdminController::isAdmin()) {
            $cw = new ContentWriter();
            $data = $cw->get($id);
            view('admin/edit_copywriter', $data);
        } else unauthorized();
    }

    public function add_copywriter() {
        if(AdminController::isAdmin()) {
            view('/admin/add_copywriter');
        } else unauthorized();
    }
    public function create_copywriter() {
        if(AdminController::isAdmin()) {
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
            $targetFileType = pathinfo($target_file, PATHINFO_EXTENSION);
            move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

            redirect('admin/copywriters');
        } else unauthorized();

    }

    public function delete_copywriter($id) {
        if (AdminController::isAdmin()) {
            $cw = new ContentWriter();
            $cw->delete($id);
            redirect('admin/copywriters');
        } else unauthorized();

    }
    public function update_copywriter($id) {
        if (AdminController::isAdmin()) {
            $cw = new ContentWriter();
            $cw->update($id, $_POST['name'], $_POST['description_short'], $_POST['description'], $_POST['hourly_rate']);
            redirect('admin/edit_copywriter/' . $id);
        } else unauthorized();
    }

}