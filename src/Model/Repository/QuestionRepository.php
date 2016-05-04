<?php

namespace Repository;

use Repository\InterfaceRepository as InterfaceRepository;
use Entity\QuestionEntity as Question;
use Helper\Myex;

class QuestionRepository implements InterfaceRepository {

    private $content;
    private $file;
    private $idCount;

    function __construct($file) {
        $this->file = $file;
        $this->content = $this->loadQuestionInfo($this->file);
        $this->idCount = $this->loadIdCountFromFile();
    }

    private function loadJSONContent() {
        $fileContent = file_get_contents($this->file);
        $decodedContent = json_decode($fileContent);
        return $decodedContent;
        var_dump($decodedContent);
    }

    private function loadQuestionInfo() {
        $questions = [];
        $jsonContent = $this->loadJSONContent($this->file);

        foreach ($jsonContent as $questionInfo) {
            $questions[] = new Question($questionInfo->id, $questionInfo->question, $questionInfo->answer, $questionInfo->correctAnswer);
        }
        return $questions;
    }

    private function loadIdCountFromFile() {
        return $this->loadJSONContent();
    }

//    public function load($id){
//        return $this->content[$id];
//    }

    public function load($id) {
        if (isset($this->content[$id]) == false) {
            throw new Myex("The question does not exists!");
        }
        return $this->content[$id];
    }

    public function loadAll() {
        return $this->content;
    }

    public function search($id) {

        $jsonContent = $this->loadJSONContent($this->file);

        foreach ($jsonContent as $data) {
            foreach ($data as $key => $value) {
                if ($key === 'question' and $value === $id) {
                    return $data;
                }
            }
        }
        return false;
    }

    public function remove($id) {
//        $content = $this->loadAll();
//        //var_dump($content);
//        $key = null;
//
//        foreach ($content as $element) {
//            echo $element->getId();
//            echo "<br>";
//            echo "chiea de delete" . $id;
//            if ($element->getId() == $id) {
//                $key = key($element);
//            }
//        }

        //var_dump($key);
        //die;
        // $deletedQuestion = $this->load($id);
        unset($this->content[$id]);
        //var_dump($this->content);
        $this->save($this->content);
        //return $deletedQuestion;
    }

    public function saveToFile() {

        $contentArray = [];
       // var_dump($this->content);
        foreach ($this->content as $question) {

            if (is_object($question)) {
                $question_object = new Question($question->getId(), $question->getQuestion(), $question->getAnswer(), $question->getCorrectAnswer());
                $contentArray [] = $question_object->transformObjectToArrayQuestion();
            }
        }
        //array_pop($contentArray);
        file_put_contents($this->file, json_encode($contentArray));
        
    }
    
    


    public function save($entity) {
        $this->content[] = $entity;

        $this->saveToFile();
    }

}
