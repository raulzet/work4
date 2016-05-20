<?php

namespace Entity;

class QuizEntity {

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $questionId;

    public function __construct($id, $title, $description, $questionId = []) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->questionId = $questionId;
    }

    /**
     * set quiz id
     * @param int $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * get quiz id
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * set quiz title
     * @param string $title
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * get quiz title
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * set quiz description
     * @param string $description
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * get quiz description
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * set question ids
     * @param int $questionId
     */
    public function setQuestionId($questionId) {
        $this->questionId = $questionIdn;
    }

    /**
     * get question ids
     * @return string
     */
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
