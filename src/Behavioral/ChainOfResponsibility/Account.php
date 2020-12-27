<?php

namespace Pattern\Behavioral\ChainOfResponsibility;

use Exception;

/**
 * Class Account
 *
 * @property float   $balance
 * @property Account $successor
 * @package Pattern\Behavioral\ChainOfResponsibility
 */
abstract class Account
{
    protected Account $successor;
    protected float $balance;

    abstract public function getClassName(): string;

    public function setNext(Account $account)
    {
        $this->successor = $account;
    }

    public function pay(float $amountToPay)
    {
        if ($this->canPay($amountToPay)) {
            echo sprintf(
                'Paid %s using %s' . PHP_EOL,
                $amountToPay,
                $this->getClassName()  //get_called_class()
            );
        } elseif ($this->successor) {
            echo sprintf(
                'Cannot pay using %s. Proceeding ..' . PHP_EOL,
                $this->getClassName() //get_called_class()
            );
            $this->successor->pay($amountToPay);
        } else {
            throw new Exception('None of the accounts have enough balance');
        }
    }

    public function canPay($amount): bool
    {
        return $this->balance >= $amount;
    }
}
