<?php

namespace Controller;


class Quiz {

    private $quizRepository;
    private $request;

    public function __construct(\Helper\Request $req) {
        $this->quizRepository = new \Repository\QuizRepository(QUIZ_PATH);
        $this->request = $req;
    }

    public function add() {

        $id = $this->request->post('id');
        $title = $this->request->post('title');
        $description = $this->request->post('description');
        $questionId = $this->request->post('questionId');


//
//        try {
//            $this->quizRepository->search($id);
//            $content = new \Entity\QuizEntity($id, $title, $description, $questionId);
//
//
//            $this->quizRepository->save($content);
//            header('Location: ' . $_SERVER['HTTP_REFERER']);
//        } catch (\Exception $ex) {
//            echo $ex->getMessage();
//            header('Refresh: 3; URL=http://localhost/Work4/index.php');
//        }

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
        include_once 'View/tt.php';
    }

    public function getContent() {
        $all = $this->quizRepository->loadAll();
        $this->showView($all);
    }

    public function showFileTest($tests = null) {
        include_once 'View/ut.php';
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

//    public function getQuestionsByTestId($id) {
//        
//        $quizQuestions = [];
//        $quiz = $this->quizRepository->search($id);
//        $questions = $quiz->getQuestionId();
//        
//        $qu = explode(',', $qw);
//
//        foreach ($questions as $question) {
//            
//            $quizQuestions = $this->question->quizRepository;
//        }
//    }

}
