<?php

namespace Entity;

class QuestionEntity {

    /**
     * @var int 
     */
    private $id;

    /**
     * @var string
     */
    private $question;

    /**
     * @var string
     */
    private $answer;

    /**
     * @var string
     */
    private $correctAnswer;

    public function __construct($id, $question, $answer, $correctAnswer) {
        $this->id = $id;
        $this->question = $question;
        $this->answer = $answer;
        $this->correctAnswer = $correctAnswer;
    }

    /**
     * get question id
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * set question in
     * @param int $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * set question text
     * @param string $question
     */
    public function setQuestion($question) {
        $this->question = $question;
    }

    /**
     * get question text
     * @return string
     */
    public function getQuestion() {
        return $this->question;
    }

    /**
     * get question answers
     * @return string
     */
    public function getAnswer() {
        return $this->answer;
    }

    /**
     * set question answers
     * @param sting $answer
     */
    public function setAnswer($answer) {
        $this->answer = $answer;
    }

    /**
     * get question correct answer
     * @return string
     */
    public function getCorrectAnswer() {
        return $this->correctAnswer;
    }

    /**
     * set question correct answer
     * @param string $correctAnswer
     */
    public function setCorrectAnswer($correctAnswer) {
        $this->correctAnswer = $correctAnswer;
    }

    public function transformObjectToArrayQuestion() {
        return array(
            "id" => $this->id,
            "question" => $this->question,
            "answer" => $this->answer,
            "correctAnswer" => $this->correctAnswer,
        );
    }

}
