<?php

namespace Entity;

class UserEntity {

    private $name;
    private $email;
    private $password;
    private $username;
    private $role;

    public function __construct($name, $email, $username, $password, $role = false) {
        $this->name = $name;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setEmail($email) {
        $this->$email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }

    public function hashPassword() {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
    }

    public function verifyPass($value) {
        return password_verify($value, $this->password);
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function getRole() {
        return $this->role;
    }

    public function isAdmin() {
        if ($this->role == 1) {
            return true;
        }
        return false;
    }

    public function transformObjectToArray() {
        return array(
            "name" => $this->name,
            "email" => $this->email,
            "username" => $this->username,
            "password" => $this->password,
            "role" => $this->role
        );
    }

}
