<?php

namespace Controller;

class Authentication {

    /**
     * @var string
     */
    private $userRepo;

    /**
     * @var string
     */
    private $request;

    public function __construct(\Helper\Request $req) {
        $this->userRepo = new \Repository\UserRepository(FILE_PATH);
        $this->request = $req;
    }

    /**
     * Logs a user into their account
     */
    public function logIn() {

        $username = $this->request->post('username');
        $pass = $this->request->post('password');

        try {
            $user = $this->userRepo->load($username);

            if ($user->verifyPass($pass)) {

                $_SESSION['user_logged'] = $username;

                if ($user->isAdmin() == true) {

                    header('Location: http://localhost/Work4/View/Admin/admin.php');
                } else {

                    header('Location: http://localhost/Work4/View/User/profil.php');
                }
            }
        } catch (\Exception $ex) {
            echo $ex->getMessage();
            header('Refresh: 2; URL=http://localhost/Work4/index.php');
        }
    }

    public function logOut() {

        session_destroy();
        header('Location: http://localhost/Work4/index.php');
    }

    /**
     * Registers a user
     */
    public function signUp() {

        $name = $this->request->post('name');
        $email = $this->request->post('email');
        $username = $this->request->post('username');
        $password = $this->request->post('password');


        try {
            $this->userRepo->search($username);
            $user = new \Entity\UserEntity($name, $email, $username, $password, 0);
            $user->hashPassword();
            $this->userRepo->save($user);
            header('Location: http://localhost/Work4/index.php');
        } catch (\Exception $ex) {
            echo $ex->getMessage();
            header('Refresh: 3; URL=http://localhost/Work4/index.php');
        }
    }

    public function showRegister() {
        include "View/User/register.php";
    }

}
