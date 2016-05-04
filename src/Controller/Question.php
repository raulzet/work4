<?php

namespace Controller;



class Question {

    private $questionRepository;
    private $request;

    public function __construct(\Helper\Request $req) {
        $this->questionRepository = new \Repository\QuestionRepository(QUESTION_PATH);
        $this->request = $req;
    }

    public function add() {
        
        $id = $this->request->post('id');
        $question = $this->request->post('question');
        $answer = $this->request->post('answer');
        $correctAnswer = $this->request->post('correctAnswer');
        //$score = $this->request->post('score');
        


        
        try {
            $this->questionRepository->search($id);
            $content = new \Entity\QuestionEntity($id, $question, $answer, $correctAnswer);

            
            $this->questionRepository->save($content);
           header('Location: ' . $_SERVER['HTTP_REFERER']);
        } catch (\Exception $ex) {
            echo $ex->getMessage();
            header('Refresh: 3; URL=http://localhost/Work4/index.php');
        }
    }
    
    public function showView($data=null){
        include_once 'View/gg.php';
        
    }
    
    public function getContent(){
        $all=  $this->questionRepository->loadAll();
        $this->showView($all);
    }
    
    
    
    public function delete (){
        $id=$this->request->get('id');
        
       $this->questionRepository->remove($id);
       header("Location:index.php/?handler=qu&action=addQuestion"); 
    }
    
     public static function createQuestion() {

        include"View/Admin/addQuestion.php";
    }

}
