<?php


namespace Pattern\Behavioral\Command;

/**
 * Class TurnOn
 *
 * @property Bulb $bulb
 * @package Pattern\Behavioral\Command
 */
class TurnOn implements Command
{
    protected Bulb $bulb;

    public function __construct(Bulb $bulb)
    {
        $this->bulb = $bulb;
    }

    public function execute()
    {
        $this->bulb->turnOn();
    }

    public function undo()
    {
        $this->bulb->turnOff();
    }

    public function redo()
    {
        $this->execute();
    }
}
