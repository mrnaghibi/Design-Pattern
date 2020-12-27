<?php


namespace Pattern\Creational\FactoryMethod;

class Developer implements Interviewer
{

    public function askQuestions()
    {
        echo "Asking About Design Pattern!";
    }
}
