<?php


namespace Pattern\Structural\Facade;

class PC implements Computer
{
    public function getElectricShock()
    {
        echo "Ouch!\n";
    }

    public function makeSound()
    {
        echo "Beep Beep!\n";
    }

    public function showLoadingScreen()
    {
        echo "Loading...\n";
    }

    public function bam()
    {
        echo "Ready to be used!\n";
    }

    public function closeEverything()
    {
        echo "Bup bup bup buzzz!\n";
    }

    public function sooth()
    {
        echo "Zzzz!\n";
    }

    public function pullCurrent()
    {
        echo "Haaah\n";
    }
}
