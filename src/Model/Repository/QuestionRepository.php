<?php

namespace Repository;

use Repository\InterfaceRepository as InterfaceRepository;
use Entity\QuestionEntity as Question;
use Helper\Myex;

class QuestionRepository implements InterfaceRepository {

    /**
     * @var string 
     */
    private $content;

    /**
     * @var string 
     */
    private $file;

    /**
     * @var int 
     */
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

    /**
     * deletes an entity from file
     * @param int $id
     */
    public function remove($id) {
        unset($this->content[$id]);
        $this->save($this->content);
    }

    public function saveToFile() {

        $contentArray = [];
        foreach ($this->content as $question) {

            if (is_object($question)) {
                $question_object = new Question($question->getId(), $question->getQuestion(), $question->getAnswer(), $question->getCorrectAnswer());
                $contentArray [] = $question_object->transformObjectToArrayQuestion();
            }
        }
        file_put_contents($this->file, json_encode($contentArray));
    }

    public function save($entity) {
        $this->content[] = $entity;

        $this->saveToFile();
    }

}
