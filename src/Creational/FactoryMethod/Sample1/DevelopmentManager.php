<?php


namespace Pattern\Creational\FactoryMethod\Sample1;

class DevelopmentManager extends HiringManager
{

    protected function makeInterviewer(): Interviewer
    {
        return new Developer();
    }
}
