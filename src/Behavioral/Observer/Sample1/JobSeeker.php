<?php


namespace Pattern\Behavioral\Observer\Sample1;

/**
 * Class JobSeeker
 *
 * @property string $name
 * @package Pattern\Behavioral\Observer
 */
class JobSeeker implements Observer
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function onJobPosted(JobPost $job)
    {
        // Do something with the job posting
        echo 'Hi ' . $this->name . '! New job posted: ' . $job->getTitle();
    }
}
