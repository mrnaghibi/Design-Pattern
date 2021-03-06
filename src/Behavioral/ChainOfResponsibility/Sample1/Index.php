<?php


namespace Pattern\Behavioral\ChainOfResponsibility\Sample1;

class Index
{
    public static function main()
    {
        // Let's prepare a chain like below
        // $bank->$paypal->$bitcoin
        // First priority bank
        // If bank can't pay then paypal
        // If paypal can't pay then bit coin
        $bank = new Bank(100);// Bank with balance 100
        $paypal = new Paypal(200);// Paypal with balance 200
        $bitcoin = new Bitcoin(300);// Bitcoin with balance 300
        $bank->setNext($paypal);
        $paypal->setNext($bitcoin);
        // Let's try to pay using the first priority i.e. bank
        $bank->pay(259);
    }
}
