<?php


namespace Pattern\Creational\FactoryMethod;

class CommunityExecutive implements Interviewer
{

    public function askQuestions()
    {
        echo "Asking About community building!";
    }
}
