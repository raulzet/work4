<?php

include_once 'Constants.php';
include_once 'autoloader.php';

$req = new Helper\Request();


session_start();


switch ($req->get('handler')) {

    case 'auth':
        $auth = new Controller\Authentication($req);
        if ($req->get('action') == 'login') {
            $auth->logIn();
        }
        if ($req->get('action') == 'logOut') {
            $auth->logOut();
        }
        if ($req->get('action') == 'signUp') {
            $auth->signUp();
        }
        if ($req->get('action') == 'showRegister') {
            $auth->showRegister();
        }

        break;


    case 'qu':
        $qu = new Controller\Question($req);


        if ($req->get('action') == 'upload') {
            $qu->add();
        }
        if ($req->get('action') == 'delete') {
            $qu->delete();
        }

        if ($req->get('action') == 'addQuestion') {
            Controller\Question::createQuestion();
            $qu->getContent();
        }

        break;



    case 'test':
        $test = new Controller\Quiz($req);
        if ($req->get('action') == 'showTest') {
            $test->showTest();
        }

        if ($req->get('action') == 'upload') {
            $test->add();
        }

        if ($req->get('action') == 'delete') {
            $test->delete();
        }


        if ($req->get('action') == 'addTest') {
            Controller\Quiz::createTest();
            $test->getContent();
        }
        if ($req->get('action') == 'showQuiz') {
            $test->getContentTest();
        }
        break;




    default:
        if (!isset($_SESSION['user_logged'])) {
            header('Location: ' . 'View/User/auth.php');
        } else {
            header('Location:' . 'View/User/profil.php');
        }
}


    