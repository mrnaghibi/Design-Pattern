<?php


namespace Pattern\Behavioral\Command;

/**
 * Class TurnOff
 *
 * @property Bulb $bulb
 * @package Pattern\Behavioral\Command
 */
class TurnOff implements Command
{
    protected Bulb $bulb;

    public function __construct(Bulb $bulb)
    {
        $this->bulb = $bulb;
    }

    public function execute()
    {
        $this->bulb->turnOff();
    }

    public function undo()
    {
        $this->bulb->turnOn();
    }

    public function redo()
    {
        $this->execute();
    }
}
