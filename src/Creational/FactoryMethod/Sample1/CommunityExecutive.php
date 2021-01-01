<?php


namespace Pattern\Creational\FactoryMethod\Sample1;

class CommunityExecutive implements Interviewer
{

    public function askQuestions()
    {
        echo "Asking About community building!";
    }
}
