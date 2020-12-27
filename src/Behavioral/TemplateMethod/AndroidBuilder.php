<?php


namespace Pattern\Behavioral\TemplateMethod;

class AndroidBuilder extends Builder
{
    public function test()
    {
        echo "Running android tests\n";
    }

    public function lint()
    {
        echo "Linting the android code\n";
    }

    public function assemble()
    {
        echo "Assembling the android build\n";
    }

    public function deploy()
    {
        echo "Deploying android build to server\n";
    }
}
