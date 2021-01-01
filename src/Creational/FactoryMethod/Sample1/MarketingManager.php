<?php


namespace Pattern\Creational\FactoryMethod\Sample1;

class MarketingManager extends HiringManager
{
    protected function makeInterviewer(): Interviewer
    {
        return new CommunityExecutive();
    }
}
