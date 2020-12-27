<?php


namespace Pattern\Structural\Bridge;

interface Bridge
{
    public function __construct(Theme $theme);
    public function getContent();
}
