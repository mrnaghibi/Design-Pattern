<?php


namespace Pattern\Creational\FactoryMethod\Sample1;

class Developer implements Interviewer
{

    public function askQuestions()
    {
        echo "Asking About Design Pattern!";
    }
}
