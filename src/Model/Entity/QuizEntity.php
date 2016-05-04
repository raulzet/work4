<?php

namespace Entity;

class QuizEntity {

    private $id;
    private $title;
    private $description;
    private $questionId;
   

    public function __construct($id, $title, $description, $questionId=[]) {
        $this->id= $id;
        $this->title=$title;
        $this->description =$description;
        $this->questionId=$questionId;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }
    
      public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }
    
      public function setDescription($description) {
        $this->description = $description;
    }

    public function getDescription() {
        return $this->description;
    }
    
      public function setQuestionId($questionId) {
        $this->questionId = $questionIdn;
    }

    public function getQuestionId() {
        return $this->questionId;
    }
    

    public function transformObjectToArrayQuiz() {
        return array(
            "id" => $this->id,
            "title" => $this->title,
            "description" => $this->description,
            "questionId" => $this->questionId
        );
    }

}


