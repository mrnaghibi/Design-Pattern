<?php


namespace Pattern\Behavioral\Iterator\Sample1;

use Iterator;
use Countable;

/**
 * Class StationList
 *
 * @property array $stations
 * @property int   $counter
 * @package Pattern\Behavioral\Iterator
 */
class StationList implements Countable, Iterator
{

    /** @var RadioStation[] $stations */
    protected array $stations = [];
    /** @var int $counter */
    protected int $counter;

    public function addStation(RadioStation $station)
    {
        $this->stations[] = $station;
    }

    public function removeStation(RadioStation $toRemove)
    {
        $toRemoveFrequency = $toRemove->getFrequency();
        $this->stations = array_filter($this->stations, function (
            RadioStation $station
        ) use ($toRemoveFrequency) {
            return $station->getFrequency() !== $toRemoveFrequency;
        });
    }

    public function count(): int
    {
        return count($this->stations);
    }

    public function current(): RadioStation
    {
        return $this->stations[$this->counter];
    }

    public function next(): int
    {
        return $this->counter++;
    }

    public function key(): int
    {
        return $this->counter;
    }

    public function valid(): bool
    {
        return isset($this->stations[$this->counter]);
    }

    public function rewind()
    {
        $this->counter = 0;
    }
}
