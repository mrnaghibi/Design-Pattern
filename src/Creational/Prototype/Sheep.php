<?php


namespace Pattern\Creational\Prototype;

/**
 * Class Sheep
 * @property string $name
 * @property string $category
 * @package Pattern\Creational\Prototype
 */
class Sheep
{
    protected string $name;
    protected string $category;

    /**
     * Sheep constructor.
     *
     * @param $name
     * @param $category
     */
    public function __construct($name, $category = "Mountain Sheep")
    {
        $this->name = $name;
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category)
    {
        $this->category = $category;
    }
}
