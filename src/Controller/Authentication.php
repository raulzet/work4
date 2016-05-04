<?php

namespace Controller;

class Authentication {

    private $userRepo;
    private $request;

    public function __construct(\Helper\Request $req) {
        $this->userRepo = new \Repository\UserRepository(FILE_PATH);
        $this->request = $req;
    }

    public function logIn() {
        
//        $username = $this->request->post('username');
//        $pass = $this->request->post('password');
//
//        if (!$username || !$pass) {
//
//            $_SESSION['user_logged'] = null;
//            echo "you must enter your username and your password!\n";
//
//
//            header('Refresh: 3; URL=http://localhost/Work4/index.php');
//        } else {
//            $allUsers = $this->userRepo->loadAll();
//            $ok = 0;
//            /* @var $user \Entity\UserEntity */
//            foreach ($allUsers as $user) {
//
////                echo $pass;
////                echo $user->getPassword();
////                echo $username;
////                echo $user->getUsername();
////                echo "<br>";
//
//
//                if ($username === $user->getUsername() && password_verify($pass, $user->getPassword())) {
//                    $ok = 1;
//                    break;
//                }
//            }
//            if ($ok === 1) {
//                $_SESSION['user_logged'] = $username;
//
//                header('Location: http://localhost/Work4/View/User/profil.php');
//            } else {
//                $_SESSION['user_logged'] = null;
//                echo "Username or password are invalid!\n";
//
//
//                header('Refresh: 5; URL=http://localhost/Work4/index.php');
//            }
//        }
   
        

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
