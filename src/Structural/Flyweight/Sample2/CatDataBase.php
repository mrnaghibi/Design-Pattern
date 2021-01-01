<?php

namespace Pattern\Structural\Flyweight\Sample2;

/**
 * EN: The Flyweight Factory stores both the Context and Flyweight objects,
 * effectively hiding any notion of the Flyweight pattern from the client.
 */
class CatDataBase
{
    /**
     * EN: The list of cat objects (Contexts).
     *
     */
    private array $cats = [];

    /**
     * EN: The list of cat variations (Flyweights).
     *
     */
    private array $variations = [];

    /**
     * EN: When adding a cat to the database, we look for an existing cat
     * variation first.
     *
     * @param string $name
     * @param string $age
     * @param string $owner
     * @param string $breed
     * @param string $image
     * @param string $color
     * @param string $texture
     * @param string $fur
     * @param string $size
     */
    public function addCat(
        string $name,
        string $age,
        string $owner,
        string $breed,
        string $image,
        string $color,
        string $texture,
        string $fur,
        string $size
    ) {
        $variation =
            $this->getVariation($breed, $image, $color, $texture, $fur, $size);
        $this->cats[] = new Cat($name, $age, $owner, $variation);
        echo "CatDataBase: Added a cat ($name, $breed).\n";
    }

    /**
     * EN: Return an existing variation (Flyweight) by given data or create a
     * new one if it doesn't exist yet.
     *
     * @param string $breed
     * @param string $image
     * @param        $color
     * @param string $texture
     * @param string $fur
     * @param string $size
     *
     * @return \Pattern\Structural\Flyweight\Sample2\CatVariation
     */
    public function getVariation(
        string $breed,
        string $image,
        $color,
        string $texture,
        string $fur,
        string $size
    ): CatVariation {
        $key = $this->getKey(get_defined_vars());

        if (!isset($this->variations[$key])) {
            $this->variations[$key] =
                new CatVariation($breed, $image, $color, $texture, $fur, $size);
        }

        return $this->variations[$key];
    }

    /**
     * EN: This function helps to generate unique array keys.
     *
     * @param array $data
     *
     * @return string
     */
    private function getKey(array $data): string
    {
        return md5(implode("_", $data));
    }

    /**
     * EN: Look for a cat in the database using the given query parameters.
     *
     * @param array $query
     *
     * @return mixed
     */
    public function findCat(array $query)
    {
        foreach ($this->cats as $cat) {
            if ($cat->matches($query)) {
                return $cat;
            }
        }
        echo "CatDataBase: Sorry, your query does not yield any results.";
    }
}