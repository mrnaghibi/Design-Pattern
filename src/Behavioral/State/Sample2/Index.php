<?php


namespace Pattern\Behavioral\State\Sample2;

class Index
{
    public static function main()
    {
        /**
         * EN: The client code.
         *
         */
        $context = new Context(new ConcreteStateA());
        $context->request1();
        $context->request2();
    }
}
