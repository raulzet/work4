<?php

namespace Entity;

class QuestionEntity {

    private $id;
    private $question;
    private $answer;
    private $correctAnswer;

    public function __construct($id, $question, $answer, $correctAnswer) {
        $this->id = $id;
        $this->question = $question;
        $this->answer = $answer;
        $this->correctAnswer = $correctAnswer;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setQuestion($question) {
        $this->question = $question;
    }

    public function getQuestion() {
        return $this->question;
    }

    public function getAnswer() {
        return $this->answer;
    }

    public function setAnswer($answer) {
        $this->answer = $answer;
    }

    public function getCorrectAnswer() {
        return $this->correctAnswer;
    }

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
