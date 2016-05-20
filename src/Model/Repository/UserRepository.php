<?php

namespace Repository;

use Repository\InterfaceRepository as InterfaceRepository;
use Entity\UserEntity as User;

class UserRepository implements InterfaceRepository {

    /**
     * @var string
     */
    private $content;

    /**
     * @var string 
     */
    private $file;

    function __construct($file) {
        $this->file = $file;
        $this->content = $this->loadUserInfo($this->file);
    }

    public function load($id) {
        foreach ($this->content as $user) {
            if ($user->getUsername() == $id) {
                return $user;
            }
        }
        throw new Myex("User dont exist");
    }

    public function loadAll() {
        return $this->content;
    }

    private function loadJSONContent() {
        $fileContent = file_get_contents($this->file);
        $decodedContent = json_decode($fileContent);
        return $decodedContent;
    }

    private function loadUserInfo() {
        $users = [];
        $jsonContent = $this->loadJSONContent($this->file);

        foreach ($jsonContent as $userInfo) {
            $users[] = new User($userInfo->name, $userInfo->email, $userInfo->username, $userInfo->password, $userInfo->role);
        }
        return $users;
    }

    public function saveToFile() {
        $assocArray = [];
        foreach ($this->content as $user) {
            $assocArray[] = $user->transformObjectToArray();
        }
        file_put_contents($this->file, json_encode($assocArray));
    }

    public function save($entity) {
        /* @var $user \Entity\UserEntity */
        $this->content[] = $entity;
        $this->saveToFile();
    }

    public function search($id) {

        $jsonContent = $this->loadJSONContent($this->file);

        foreach ($jsonContent as $data) {
            foreach ($data as $key => $value) {
                if ($key === 'username' and $value === $id) {

                    return true;
                }
            }
        }
        return false;
    }

}
