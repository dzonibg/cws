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

}