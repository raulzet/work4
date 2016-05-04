<?php

namespace Repository;

use Repository\InterfaceRepository as InterfaceRepository;
use Entity\QuizEntity as Quiz;
use Helper\Myex;

class QuizRepository implements InterfaceRepository {

    private $content;
    private $file;
    private $idCount;

    function __construct($file) {
        $this->file = $file;
        $this->content = $this->loadQuizInfo($this->file);
        $this->idContent = $this->loadIdCountFromFile($this->file);
    }

    private function loadJSONContent() {
        $fileContent = file_get_contents($this->file);
        $decodedContent = json_decode($fileContent);
        return $decodedContent;
    }

    private function loadQuizInfo() {
        $quiz = [];
        $jsonContent = $this->loadJSONContent($this->file);

        foreach ($jsonContent as $quizInfo) {
            $quiz[] = new Quiz($quizInfo->id, $quizInfo->title, $quizInfo->description, $quizInfo->questionId);
        }
        return $quiz;
    }

    private function loadIdCountFromFile() {
        return $this->loadJSONContent();
    }

    public function load($id) {
        return $this->content[$id];
    }

    public function loadAll() {
        return $this->content;
    }

    public function search($id) {

        $jsonContent = $this->loadJSONContent($this->file);

        foreach ($jsonContent as $data) {
            foreach ($data as $key => $value) {
                if ($key === 'id' and $value === $id) {
                    return $data;
                }
            }
        }
        return false;
    }

    public function addTest($id, $title, $description, $questionId) {

        $question = explode(',', $questionId);
        $test = new Quiz($id, $title, $description, $questionId);
        $this->save($test);
    }

//    public function found($id) {
//        $json = json_decode(file_get_contents($this->file), true);
//
//        foreach ($json as $data) {
//            if ($data['id'] === $id) {
//                return $data;
//            }
//        }
//        return "";
//    }

    public function saveToFile() {

        $contentArray = [];
        foreach ($this->content as $quiz) {
            // $contentArray[] = $question->transformObjectToArrayQuiz();
            if (is_object($quiz)) {
                $quiz_object = new Quiz($quiz->getId(), $quiz->getTitle(), $quiz->getDescription(), $quiz->getQuestionId());
                $contentArray [] = $quiz_object->transformObjectToArrayQuiz();
            }
        }
        file_put_contents($this->file, json_encode($contentArray));
    }

    public function save($entity) {
        $this->content[] = $entity;
        $this->saveToFile();
    }

    public function remove($id) {
        var_dump($this->content);
        unset($this->content[$id]);
        var_dump($this->content);
        $this->save($this->content);
        // var_dump($this->content);
    }

}
