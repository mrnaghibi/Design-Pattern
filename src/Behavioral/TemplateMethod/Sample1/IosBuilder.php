<?php


namespace Pattern\Behavioral\TemplateMethod\Sample1;

class IosBuilder extends Builder
{
    public function test()
    {
        echo "Running ios tests\n";
    }

    public function lint()
    {
        echo "Linting the ios code\n";
    }

    public function assemble()
    {
        echo "Assembling the ios build\n";
    }

    public function deploy()
    {
        echo "Deploying ios build to server\n";
    }
}
