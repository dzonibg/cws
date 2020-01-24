<?php

class Admin extends Model {

    public function login($username, $password) {

        $statement = $this->db()
            ->prepare("SELECT * FROM admin WHERE username = :username AND password = :password");
        $statement->execute(['username' => $username, 'password' => $password]);
        return $statement->rowCount();
    }

}