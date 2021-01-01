<?php


namespace Pattern\Behavioral\ChainOfResponsibility\Sample1;

/**
 * Class Paypal
 *
 * @property float $balance
 * @package Pattern\Behavioral\ChainOfResponsibility
 */
class Paypal extends Account
{
    protected float $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }

    public function getClassName(): string
    {
        return "Paypal";
    }
}
