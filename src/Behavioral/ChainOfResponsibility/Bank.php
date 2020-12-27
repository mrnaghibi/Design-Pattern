<?php


namespace Pattern\Behavioral\ChainOfResponsibility;

/**
 * Class Bank
 *
 * @property float $balance
 * @package Pattern\Behavioral\ChainOfResponsibility
 */
class Bank extends Account
{
    protected float $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }

    public function getClassName(): string
    {
        return "Bank";
    }
}
