<?php


namespace Pattern\Creational\FactoryMethod\Sample1;

abstract class HiringManager
{
    abstract protected function makeInterviewer(): Interviewer;

    public function takeInterview()
    {
        $interview = $this->makeInterviewer();
        $interview->askQuestions();
    }
}
