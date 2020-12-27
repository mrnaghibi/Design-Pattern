<?php


namespace Pattern\Structural\Facade;

/**
 * Class ComputerFacade
 *
 * @property Computer $computer
 * @package Pattern\Structural\Facade
 */
class ComputerFacade
{
    protected Computer $computer;

    /**
     * ComputerFacade constructor.
     *
     * @param $computer
     */
    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function turnOn()
    {
        $this->computer->getElectricShock();
        $this->computer->makeSound();
        $this->computer->showLoadingScreen();
        $this->computer->bam();
    }

    public function turnOff()
    {
        $this->computer->closeEverything();
        $this->computer->pullCurrent();
        $this->computer->sooth();
    }
}
