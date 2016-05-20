<?php

namespace Controller;

class Quiz {

    /**
     * @var string 
     */
    private $quizRepository;

    /**
     * @var string
     */
    private $request;

    public function __construct(\Helper\Request $req) {
        $this->quizRepository = new \Repository\QuizRepository(QUIZ_PATH);
        $this->request = $req;
    }

    /**
     * adds a new quiz
     */
    public function add() {

        $id = $this->request->post('id');
        $title = $this->request->post('title');
        $description = $this->request->post('description');
        $questionId = $this->request->post('questionId');


        try {
            $this->quizRepository->addTest($id, $title, $description, $questionId);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } catch (MyException $e) {

            echo '<script type="text/javascript">alert("' . $e->getMessage() . '");</script>';
            header("Refresh:2; url=View/Admin/addTest.php");
            exit();
        }
    }

    public function showView($tests = null) {
        include_once 'View/Admin/showTest.php';
    }

    public function getContent() {
        $all = $this->quizRepository->loadAll();
        $this->showView($all);
    }

    public function showFileTest($tests = null) {
        include_once 'View/User/viewTest.php';
    }

    public function getContentTest() {
        $all = $this->quizRepository->loadAll();
        $this->showFileTest($all);
    }

    public function delete() {
        $id = $this->request->get('id');
        $this->quizRepository->remove($id);
        header("Location:index.php/?handler=test&action=addTest");
    }

    public function showTest() {
        include "View/User/test.php";
    }

    public static function createTest() {

        include"View/Admin/addTest.php";
    }

}
