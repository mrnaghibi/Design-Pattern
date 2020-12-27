<?php


namespace Pattern\Behavioral\ChainOfResponsibility;

/**
 * Class Bitcoin
 *
 * @property  float $balance
 * @package Pattern\Behavioral\ChainOfResponsibility
 */
class Bitcoin extends Account
{
    protected float $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }

    public function getClassName(): string
    {
        return "Bitcoin";
    }
}