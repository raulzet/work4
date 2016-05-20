<?php

namespace Entity;

class UserEntity {

    /**
     * user name
     * @var string
     */
    private $name;

    /**
     * user email
     * @var string
     */
    private $email;

    /**
     * user password
     * @var string
     */
    private $password;

    /**
     * user username
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $role;

    public function __construct($name, $email, $username, $password, $role = false) {
        $this->name = $name;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
    }

    /**
     * set user name
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * get user name
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * set user email
     * @param string $email
     */
    public function setEmail($email) {
        $this->$email = $email;
    }

    /**
     * get user email
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * set user username
     * @param string $username
     */
    public function setUsername($username) {
        $this->username = $username;
    }

    /**
     * get user username
     * @return string
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * set user password
     * @param string $password
     */
    public function setPassword($password) {
        $this->password = $password;
    }

    /**
     * get user password
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }


    public function hashPassword() {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
    }


    public function verifyPass($value) {
        return password_verify($value, $this->password);
    }

    /**
     * set user role
     * @param string $role
     */
    public function setRole($role) {
        $this->role = $role;
    }

   /**
    * get user role
    * @return string
    */
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
